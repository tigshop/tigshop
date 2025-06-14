<?php
//**---------------------------------------------------------------------+
//** 服务层文件 -- 订单详情类处理
//**---------------------------------------------------------------------+
//** 版权所有：江西佰商科技有限公司. 官网：https://www.tigshop.com
//**---------------------------------------------------------------------+
//** 作者：Tigshop团队，yq@tigshop.com
//**---------------------------------------------------------------------+
//** 提示：Tigshop商城系统为非免费商用系统，未经授权，严禁使用、修改、发布
//**---------------------------------------------------------------------+

namespace app\service\admin\order;

use app\job\order\OrderConfirmReceiptJob;
use app\model\msg\AdminMsg;
use app\model\order\Order;
use app\model\order\OrderAmountDetail;
use app\model\order\OrderCouponDetail;
use app\model\product\ECardGroup;
use app\service\admin\logistics\src\KDNiaoService;
use app\service\admin\merchant\ShopService;
use app\service\admin\msg\AdminMsgService;
use app\service\admin\pay\PayLogService;
use app\service\admin\pay\PaymentService;
use app\service\admin\product\ProductService;
use app\service\admin\product\ProductSkuService;
use app\service\admin\promotion\SeckillService;
use app\service\admin\setting\LogisticsCompanyService;
use app\service\admin\setting\RegionService;
use app\service\admin\user\UserCouponService;
use app\service\admin\user\UserService;
use app\service\common\BaseService;
use exceptions\ApiException;
use think\facade\Db;
use utils\Config;
use utils\TigQueue;
use utils\Time;
use utils\Util;

/**
 * 订单服务类
 */
class OrderDetailService extends BaseService
{
    protected int $id;
    protected int|null $userId = null; //指定会员id可获取
    protected ?array $availableActions = null;
    public ?Order $order = null;

    public function __construct()
    {
    }

    // 设置订单id
    public function setOrderId(int $id)
    {
        return $this->setId($id);
    }

    // 设置会员id
    public function setUserId(int|null $user_id)
    {
        $this->userId = $user_id;
        return $this;
    }

    // 设置订单id
    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    // 当已获取订单信息时可以预设置
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * 设置订单支付金额
     * @return OrderDetailService
     */
    public function setPaidMoney(float $paidMoney)
    {
        $order = $this->getOrder();
        if ($order->pay_type_id == Order::PAY_TYPE_ID_ONLINE) {
            $order->online_paid_amount = $paidMoney;
        }
        if ($order->pay_type_id == Order::PAY_TYPE_ID_OFFLINE) {
            $order->offline_paid_amount = $paidMoney;
        }
        return $this;
    }

    /**
     * 获取订单详情
     *
     * @param int $id
     * @throws ApiException
     */
    public function getOrder(int $suppliers_id = 0): Order
    {
        if ($this->order === null) {
            if ($this->id === null || $this->id <= 0) {
                throw new ApiException(Util::lang('#缺少订单id'));
            }
            $order = Order::with(['items', 'user', 'shop'])->append([
                'order_status_name',
                "user_address",
                "shipping_status_name",
                "pay_status_name",
                "total_product_weight"
            ])->find($this->id);
            if (!$order) {
                $is_parent_order = Order::where('parent_order_id', $this->id)->find();
                if (!$is_parent_order) {
                    throw new ApiException(Util::lang('订单不存在'));
                } else {
                    throw new ApiException(Util::lang('该订单已被拆分为多个订单'));
                }
            }
            if ($this->userId !== null && $order->user_id != $this->userId) {
                throw new ApiException(Util::lang('无此订单操作权限'));
            }
            foreach ($order->items as $key => $value) {
				if ($suppliers_id > 0) {
					// 供应商订单
					if ($suppliers_id != $value->suppliers_id) {
						unset($order->items[$key]);
					}
				}

                $value->stock = app(ProductService::class)->getProductStock($value->product_id, $value->sku_id);
                $value->subtotal = $value->price * $value->quantity;
            }
			// 对象重置下标
			$order->items = $order->items->values();
			$this->order = $order;
        }

        return $this->order;
    }

    // 获取可操作项
    public function getAvailableActions(): array
    {
        if ($this->availableActions === null) {
            $this->availableActions = app(OrderStatusService::class)->getAvailableActions($this->getOrder());
        }
        return $this->availableActions;
    }

    // 判断状态是否存在
    public function checkActionAvailable($action): bool
    {
        $actions = $this->getAvailableActions();
        foreach ($actions as $key => $value) {
            if ($key == $action && $value == true) {
                return true;
            }
        }
        // return false;
        throw new ApiException(Util::lang('当前订单状态不可执行此操作'));
    }

    /**
     * 执行更新订单
     *
     * @param int $id
     * @param array $data
     * @param bool $isAdd
     * @return int|bool
     * @throws ApiException
     */
    public function update(array $data)
    {
        $result = $this->getOrder()->save($data);
        return true;
    }

    // 添加日志
    public function addLog($description = '')
    {
        if (!empty(input('description'))) {
            $description .= /** LANG */
                "，备注：" . input('description');
        }
        $data = [
            'description' => $description,
            'order_sn' => $this->getOrder()->order_sn,
            'order_id' => $this->getOrder()->order_id,
        ];
        $result = app(OrderLogService::class)->addOrderLog($data);
        return true;
    }

    // 设置订单已确认
    public function setOrderConfirm()
    {
        $this->checkActionAvailable('set_confirm');
        $this->update([
            'order_status' => Order::ORDER_CONFIRMED,
        ]);
    }

    /**
     * 设置订单状态为已支付
     * 注：此处只处理订单状态相关的更新，不要加入金额相关的业务处理
     *
     * @return void
     */
    public function setOrderPaid()
    {
        $order = $this->getOrder();
        $orderDb = Order::find($this->id);
        if ($orderDb && $orderDb->pay_status != Order::PAYMENT_PAID) {
            $this->checkActionAvailable('set_paid');
            $order->pay_status = Order::PAYMENT_PAID;
            $order->pay_time = Time::now();
            if ($order->order_status == Order::ORDER_PENDING) {
                $order->order_status = Order::ORDER_CONFIRMED;
            }
            $order->save();
            //加积分
            app(OrderService::class)->orderSuccessPoint($order->total_amount, $order->user_id, $order->order_id);
            // 判断订单商品是否来自多个店铺并完成拆分
            $this->splitStoreOrder();
        }
    }

    // 取消订单
    public function cancelOrder()
    {
        $order = $this->getOrder();
        $this->checkActionAvailable('cancel_order');
        try {
            Db::startTrans();
            //使用了积分返积分
            if ($order->use_points > 0) {
                app(UserService::class)->incPoints($order->use_points, $order->user_id, '订单取消返还积分');
            }
            //使用了余额返余额
            if ($order->balance > 0) {
                app(UserService::class)->incBalance($order->balance, $order->user_id, '订单取消返还余额');
            }
            //使用了优惠券返优惠券
            if ($order->coupon_amount > 0) {
                app(UserCouponService::class)->returnUserCoupon($order->user_id, $order->order_id);
            }
            //返回库存以及销量
            foreach ($order->items as $item) {
                //增加库存
                if ($item->sku_id > 0) {
                    app(ProductSkuService::class)->incStock($item->sku_id, $item->quantity);
                } else {
                    app(ProductService::class)->incStock($item->product_id, $item->quantity);
                }
                //减少销量
                app(ProductService::class)->decSales($item->product_id, $item->quantity);
                //秒杀品减少销量
                app(SeckillService::class)->decSales($item->product_id, $item->sku_id, $item->quantity);
                //秒杀返回库存
                app(SeckillService::class)->incStock($item->product_id, $item->sku_id, $item->quantity);
            }
            $order->order_status = Order::ORDER_CANCELLED;
            $order->save();

            // 发送后台信息 -- 取消订单
            app(AdminMsgService::class)->createMessage([
                'msg_type' => AdminMsg::MSG_TYPE_ORDER_CANCEL,
                'shop_id' => $order->shop_id,
                'order_id' => $this->id,
                'title' => "订单已被取消：{$order->order_sn},金额：{$order->total_amount}",
                'content' => '订单编号：' . $order->order_sn . '，订单金额：' . $order->total_amount . '元，订单取消。',
                'related_data' => [
                    "order_id" => $this->id
                ]
            ]);

            Db::commit();
        } catch (\Exception $exception) {
            Db::rollback();
            throw new ApiException($exception->getMessage());
        }
    }

    // 删除订单
    public function delOrder()
    {
        $order = $this->getOrder();
        $this->checkActionAvailable('del_order');
        $order->order_status = Order::ORDER_CANCELLED;
        $order->is_del = 1;
        $order->save();
    }

    /**
     * 确认收货
     * @return void
     * @throws ApiException
     */
    public function confirmReceipt(): void
    {
        $order = $this->getOrder();
        $this->checkActionAvailable('confirm_receipt');
        $order->order_status = Order::ORDER_COMPLETED;
        $order->shipping_status = Order::SHIPPING_SHIPPED;
        $order->received_time = Time::now();
        $order->save();

        // 订单完成 -- 发送后台消息
        $admin_msg = [
            'msg_type' => AdminMsg::MSG_TYPE_ORDER_FINISH,
            'shop_id' => $order->shop_id,
            'order_id' => $this->id,
            'title' => "订单已完成通知：{$order->order_sn},金额：{$order->total_amount}",
            'content' => "您有订单【{$order->order_sn}】已完成,请注意查看",
            'related_data' => [
                "order_id" => $this->id
            ]
        ];
        app(AdminMsgService::class)->createMessage($admin_msg);
        if ($admin_msg['shop_id'] > 0) {
            //如果是店铺订单则给平台订单也发一条
            $admin_msg['shop_id'] = 0;
            app(AdminMsgService::class)->createMessage($admin_msg);
        }
        // 触发订单结算
        app(ShopService::class)->triggerAutoOrderSettlement(['order_id' => $this->id,'shop_id' => $order->shop_id]);
    }

    // 修改订单金额
    public function modifyOrderMoney($data)
    {
        $order = $this->getOrder();
        $this->checkActionAvailable('modify_order_money');
        if (isset($data['shipping_fee'])) {
            $order->shipping_fee = $data['shipping_fee'];
        }
        if (isset($data['invoice_fee'])) {
            $order->invoice_fee = $data['invoice_fee'];
        }
        if (isset($data['service_fee'])) {
            $order->service_fee = $data['service_fee'];
        }
        if (isset($data['discount_amount'])) {
            $order->discount_amount = $data['discount_amount'];
        }
        $order->save();
        // 重新计算订单金额
        $this->updateOrderMoney();
    }

    // 修改收货人信息
    public function modifyOrderConsignee($data)
    {
        $this->checkActionAvailable('modify_order_consignee');
        // 获取原订单信息
        $order = $this->getOrder()->toArray();
        // 收货人json信息
        $arr = [
            'consignee' => $data['consignee'],
            'mobile' => $data['mobile'],
            'telephone' => $data['telephone'],
            'email' => $data['email'],
            'postcode' => $data['postcode'],
            'region_ids' => $data['region_ids'],
            'address' => $data['address'],
        ];
        if (isset($data["region_ids"]) && !empty($data["region_ids"])) {
            $arr["region_names"] = app(RegionService::class)->getNames($data['region_ids']);
        }
        if (!empty($order['address_data'])) {
            $arr["address_id"] = $order['address_data']["address_id"];
            $arr["address_tag"] = $order['address_data']['address_tag'];
            $arr["user_id"] = $order['address_data']['user_id'];
            $arr["is_default"] = $order['address_data']['is_default'];
            $arr["is_selected"] = $order['address_data']['is_selected'];
        }

        $order_data = [
            'consignee' => $data['consignee'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            "address" => $data["address"],
            'region_ids' => $data["region_ids"],
            'region_names' => $arr["region_names"],
            'address_data' => $arr,
        ];
        $this->getOrder()->save($order_data);
    }

    // 修改配送信息
    public function modifyOrderShipping($data)
    {
        $order = $this->getOrder();
        $this->checkActionAvailable('modify_shipping_info');
        $order->shipping_method = $data['shipping_method'];
        if ($data['shipping_method'] == 1) {
            $order->logistics_id = $data['logistics_id'];
            $order->logistics_name = app(LogisticsCompanyService::class)->getName($data['logistics_id']);
            $order->tracking_no = $data['tracking_no'];
        } elseif ($data['shipping_method'] == 2) {
            $order->logistics_id = 0;
            $order->logistics_name = '商家配送';
            $order->tracking_no = '';
        } elseif ($data['shipping_method'] == 3) {
            $order->logistics_id = 0;
            $order->logistics_name = '无需配送';
            $order->tracking_no = '';
        }elseif ($data['shipping_method'] == 4) {
            $order->logistics_id = $data['logistics_id'];
            $order->logistics_name = app(LogisticsCompanyService::class)->getName($data['logistics_id']);
            $order->tracking_no = '';
        }
        $order->save();

        if($data['shipping_method'] == 4) {
            //重新调取订单信息
            $order = $this->getOrder();
            $item = app(KDNiaoService::class)->getElectronicWaybill($order->toArray() ,$data['bill_remark']);
            $order->tracking_no = $item['Order']['LogisticCode'];
            $order->save();
        }
    }

    /**
     * 处理订单发货
     *
     * @param array $data 待发货项的数组:
     *                    - 'item_id': 订单商品项的id（注意不是product_id）
     *                    - 'to_delivery_quantity': 需要发货的商品数量。
     * @param number $shipping_method 配送方式
     * @param number $logistics_id 物流id
     * @param string $postcode 物流编号
     * @param string $bill_remark 电子面单备注
     * @return void
     * @throws ApiException
     */
    public function deliverOrder(array $data, $shipping_method, $logistics_id = 0, $tracking_no = '', $bill_remark ='')
    {
        Db::startTrans();
        $this->checkActionAvailable('deliver');
        $order = $this->getOrder();
        $deliver = [];
        foreach ($data as $value) {
            $deliver[$value['item_id']] = $value['to_delivery_quantity'];
        }
        $split_data = [];
        foreach ($order->items as $value) {
            if (isset($deliver[$value->item_id])) {
                $deliver_num = $deliver[$value->item_id];
                if ($deliver_num > $value->quantity || $deliver_num == 0) {
                    throw new ApiException('发货数量错误');
                }
                if (in_array($order->order_type, [6, 7, 8])) {
                    if ($deliver_num != $value->quantity) {
                        throw new ApiException('虚拟商品，付费商品，卡密商品不允许分批发货');
                    }
                }
                $split_data[] = [
                    'item_id' => $value->item_id,
                    'split_quantity' => $deliver_num,
                ];
            }
        }
        try {
            // 当存在拆分订单的情况时
            $result = $this->splitOrder($split_data);
            $order_id = $result['new_order_id'];
            $this->addLog('订单商品来自不同仓库或部份发货，已拆分');
        } catch (\Exception $e) {
            if ($e->getCode() === 1002) {
                $order_id = $order->order_id;
            } else {
                throw new ApiException($e->getMessage());
            }
        }
        $orderDetailService = new OrderDetailService();
        $order = $orderDetailService->setId($order_id)->getOrder();
        $order->order_status = Order::ORDER_PROCESSING;
        $order->shipping_status = Order::SHIPPING_SENT;
        $order->shipping_time = Time::now();
        $order->shipping_method = $shipping_method;
        if ($shipping_method == 1) {
            $order->logistics_id = $logistics_id;
            $order->logistics_name = app(LogisticsCompanyService::class)->getName($logistics_id);
            $order->tracking_no = $tracking_no;
            $orderDetailService->addLog('订单已发货');
        } elseif ($shipping_method == 2) {
            $order->logistics_name = '商家配送';
            $orderDetailService->addLog('订单已发货，商家配送');
        } elseif ($shipping_method == 3) {
            $order->logistics_name = '无需配送';
            $orderDetailService->addLog('订单已发货，无需配送');
        } elseif($shipping_method == 4) {
            $order->logistics_id = $logistics_id;
            $order->logistics_name = app(LogisticsCompanyService::class)->getName($logistics_id);
            $orderDetailService->addLog('订单已发货，采用电子面单');
        }
        $order->save();
        Db::commit();

        if($shipping_method == 4) {
            //如果是电子面单调用电子面单服务
            $order = $orderDetailService->setId($order_id)->getOrder();
            $item = app(KDNiaoService::class)->getElectronicWaybill($order->toArray(), $bill_remark);
            $order->tracking_no = $item['Order']['LogisticCode'];
            $order->save();
        }

         //已发货后添加自动收货逻辑
        $autoDeliveryDays = Config::get('autoDeliveryDays');
        if(!empty($autoDeliveryDays) && $autoDeliveryDays > 0) {
            //触发
            $days = ceil($autoDeliveryDays * 86400);
            app(TigQueue::class)->later(OrderConfirmReceiptJob::class, $days,
                ['order_id' => $order->order_id]);
        }

    }

    /**
     * 拆分订单，用于发货或手动拆分
     *
     * @param array $split_data 待拆分出的数组:
     *                    - 'item_id': 待拆分的订单商品项
     *                    - 'split_quantity': 待拆分出来的数量
     * @return array
     * @throws ApiException
     */
    public function splitOrder(array $split_data): array
    {
        $order = $this->getOrder();
        $split = [];
        if (empty($split_data)) {
            throw new ApiException('订单拆分数量错误', 1001);
        }
        foreach ($split_data as $value) {
            $split[intval($value['item_id'])] = intval($value['split_quantity']);
        }
        $split_result = [
            0 => [], //根据$data拆出来的订单商品
            1 => [], //剩下的订单商品
        ];
        foreach ($order->items as $item) {
            $value = $item->getData();
            if (isset($split[$value['item_id']]) && $split[$value['item_id']] > 0) {
                // 划入订单key:0
                $quantity = intval($split[$value['item_id']]);
                if ($quantity > $value['quantity'] || $quantity <= 0) {
                    throw new ApiException('订单拆分数量错误，请重试', 1001);
                }
                if ($quantity < $value['quantity']) {
                    // 如果拆分的数量 小于 原商品的数量
                    $split_result[0][] = array_merge($value, ['quantity' => $quantity]);
                    $split_result[1][] = array_merge($value, ['quantity' => $value['quantity'] - $quantity]);
                } elseif ($quantity >= $value['quantity']) {
                    $split_result[0][] = array_merge($value, ['quantity' => $value['quantity']]);
                }
            } else {
                // 划入订单key:1
                $split_result[1][] = $value;
            }
        }
        if (count($split_result[1]) === 0) {
            // 若钩选了所有商品且数量都是最大
            throw new ApiException('无效拆分！', 1002);
        }
        // 启动事务
        Db::startTrans();
        $result = [];
        foreach ($split_result as $key => $items) {
            // 创建分割的订单
            $new_order = $this->creatSpiltOrder($order, $items, false, $order['shop_id']);
            $result[$key]['order_id'] = $new_order->order_id;
        }
        // 删除订单和订单商品
        $order->delete();
        $order->together(['items'])->delete();
        Db::commit();
        return [
            'new_order_id' => $result[0]['order_id'],
            'rest_order_id' => $result[1]['order_id'],
        ];
    }

    // 将店铺订单拆分
    public function splitStoreOrder()
    {
        $order = $this->getOrder();
        if ($order->is_store_splited == 1) {
            return false;
        }
        // 启动事务
        Db::startTrans();
        $stores = [];
        foreach ($order->items as $item) {
            $value = $item->getData();
            $stores[$value['shop_id']][] = $value;
        }
        if (count($stores) === 1) {
            // 所有商品只存在同一个店铺id，直接更新拆分状态
            $order->is_store_splited = 1;
            $order->save();
            Db::commit();
            return false;
        }
        foreach ($stores as $shop_id => $items) {
            // 创建分割的订单
            $this->creatSpiltOrder($order, $items, true, $shop_id);
        }
        // 删除父订单和订单商品
        $this->addLog('订单商品来自不同店铺，已拆分');
        $order->delete();
        $order->together(['items'])->delete();
        Db::commit();
        return true;
    }

    // 处理拆单金额
    private function creatSpiltOrder(Order $order, array $new_items, $is_spilt_store = false, int $shop_id = 0): Order
    {
        // 复制原始数据
        $data = $order->getData();
        unset($data['order_id']);
        $data['shop_id'] = $shop_id;
        $product_amount = 0;
        $total_amount = 0;
        foreach ($new_items as $key => $value) {
            unset($new_items[$key]['item_id']);
            $product_amount += $value['quantity'] * $value['origin_price'];
        }
        $data['product_amount'] = $product_amount;
        $total_amount = $product_amount;
        // 检查订单编号是否已存在
        while ($order->where('order_sn', $data['order_sn'])->find()) {
            $data['order_sn'] = app(OrderService::class)->creatNewOrderSn();
        }

        // 如果订单已经被拆分过，继续用以前的父订单id
        $data['parent_order_id'] = $order->parent_order_id > 0 ? $order->parent_order_id : $order->order_id;
        $data['parent_order_sn'] = !empty($order->parent_order_sn) ? $order->parent_order_sn : $order->order_sn;
        $orderAmountDetail = OrderAmountDetail::where('order_id', $order->parent_order_id)->where('shop_id',
            $data['shop_id'])->find();
        $orderCouponDetail = OrderCouponDetail::where('order_id', $order->parent_order_id)->where('shop_id',
            $data['shop_id'])->find();
        if ($is_spilt_store === true) {
            $data['is_store_splited'] = 1;
            //取主单里当前店铺的amount信息
            $extension_data = $order->order_extension;
            // 优惠券金额（按店铺）
            $data['coupon_amount'] = $orderAmountDetail['coupon_amount'] ?? 0;
            // 全局优惠券金额（平摊）,暂无全局优惠
//            $data['coupon_amount'] += isset($extension_data['coupon_amount'][-1]) ? $this->allocatedAmount($order->product_amount, $product_amount, $extension_data['coupon_money'][-1]) : 0;
            $total_amount = bcsub($total_amount,$data['coupon_amount'],2);
            // 运费（按店铺）
            $data['shipping_fee'] = $orderAmountDetail['shipping_fee'] ?? 0;
            // 优惠/折扣（按店铺）
            $data['discount_amount'] = $orderAmountDetail['discount_amount'] ?? 0;
            $total_amount = bcsub($total_amount,$data['discount_amount'],2);
            // 配送类型
            $data['shipping_type_id'] = isset($extension_data['shippingType'][$shop_id]) ? $extension_data['shippingType'][$shop_id]['typeId'] : 0;
            $data['shipping_type_name'] = isset($extension_data['shippingType'][$shop_id]) ? $extension_data['shippingType'][$shop_id]['typeName'] : '';

        } else {
            // 优惠券金额（平摊）
            $data['coupon_amount'] = $data['coupon_amount'] > 0 ? $this->allocatedAmount($order->product_amount, $product_amount, $data['coupon_amount']) : 0;
            $total_amount = bcsub($total_amount,$data['coupon_amount'],2);
            // 运费（平摊）
            $data['shipping_fee'] = $data['shipping_fee'] > 0 ? $this->allocatedAmount($order->product_amount, $product_amount, $data['shipping_fee']) : 0;
            // 优惠/折扣（平摊）
            $data['discount_amount'] = $data['discount_amount'] > 0 ? $this->allocatedAmount($order->product_amount, $product_amount, $data['discount_amount']) : 0;
            $total_amount = bcsub($total_amount,$data['discount_amount'],2);
        }
        // 积分抵扣（平摊）
        $data['points_amount'] = $data['points_amount'] > 0 ? $this->allocatedAmount($order->product_amount, $product_amount, $data['points_amount']) : 0;
        // 手续费（平摊）
        $data['service_fee'] = $data['service_fee'] > 0 ? $this->allocatedAmount($order->product_amount, $product_amount, $data['service_fee']) : 0;
        // 发票费用（平摊）
        $data['invoice_fee'] = $data['invoice_fee'] > 0 ? $this->allocatedAmount($order->product_amount, $product_amount, $data['invoice_fee']) : 0;
        // 使用的余额（平摊）
        $data['balance'] = $data['balance'] > 0 ? $this->allocatedAmount($order->total_amount, $total_amount, $data['balance']) : 0;
        // 线上支付金额（平摊）
        $data['online_paid_amount'] = $data['online_paid_amount'] > 0 ? $this->allocatedAmount($order->product_amount, $product_amount, $data['online_paid_amount']) : 0;
        // 线下支付金额（平摊）
        $data['offline_paid_amount'] = $data['offline_paid_amount'] > 0 ? $this->allocatedAmount($order->product_amount, $product_amount, $data['offline_paid_amount']) : 0;

        $new_order = new Order();
        $new_order->save($data);

        // 添加订单商品
        $item_data = $new_items;
        foreach ($item_data as $key => $value) {
            $item_data[$key]['order_id'] = $new_order->order_id;
        }
        $new_order->items()->saveAll($item_data);
        // 更新新订单的金额
        $orderDetailService = new OrderDetailService();
        $orderDetail = $orderDetailService->setId($new_order->order_id);
        $orderDetail->updateOrderMoney();
        if ($orderAmountDetail) {
            $orderAmountDetail = $orderAmountDetail->toArray();
            unset($orderAmountDetail['order_discount_detail_id']);
            $orderAmountDetail['order_id'] = $new_order->order_id;
            OrderAmountDetail::create($orderAmountDetail);
        }
        if ($orderCouponDetail) {
            $orderCouponDetail = $orderCouponDetail->toArray();
            unset($orderCouponDetail['order_coupon_detail_id']);
            $orderCouponDetail['order_id'] = $new_order->order_id;
            OrderCouponDetail::create($orderAmountDetail);
        }

        if ($is_spilt_store === true) {
            // 处理店铺订单已拆分后的操作，比如发票申请等
        }
        // 添加拆份记录
        app(OrderLogService::class)->addSplitLog($order->order_id, $new_order->order_id, $order);
        return $new_order;
    }

    // 根据商品金额计算一些优惠或运费的分摊金额
    private function allocatedAmount(float $product_amount, float $new_product_amount, float $amount = 0): float
    {
        return $product_amount > 0 && $amount > 0 ? round(($amount * $new_product_amount) / $product_amount, 2) : 0;
    }

    /**
     * 更新订单商品金额
     *
     * @throws ApiException
     */
    public function updateOrderProductAmount()
    {
    }

    // 修改订单商品
    public function modifyOrderProduct(array $data)
    {
        $this->checkActionAvailable('modify_order_product');
        app(OrderItemService::class)->modifyOrderItem($this->id, $data);
    }

    // 重新更新订单金额相关
    public function updateOrderMoney()
    {
        $order = $this->getOrder();
        // 重新计算商品金额
        //$order->product_amount = 0;
//        foreach ($order->items as $value) {
//            $order->product_amount += $value['quantity'] * $value['price'];
//        }
        // 订单总金额
        $order->total_amount = $order->product_amount + $order->service_fee + $order->shipping_fee + $order->invoice_fee
            - $order->points_amount - $order->discount_amount - $order->coupon_amount;
        // 已付款金额
        $order->paid_amount = $order->balance + $order->online_paid_amount + $order->offline_paid_amount;
        // 未付款金额
        $order->unpaid_amount = $order->total_amount - $order->paid_amount > 0 ? $order->total_amount - $order->paid_amount : 0;
        // 未退款金额
        $order->unrefund_amount = $order->paid_amount - $order->total_amount > 0 ? $order->paid_amount - $order->total_amount : 0;
        // 更新金额
        $order->save();

        // 如果未支付，且未付款金额为0，则更新订单状态
        if (
            $order->unpaid_amount <= 0 &&
            $order->order_status == Order::ORDER_PENDING &&
            $order->pay_status == Order::PAYMENT_UNPAID
        ) {
            $this->setOrderPaid();
        }
        return true;
    }

    // 设置商家备注
    public function setAdminNote(string $note)
    {
        $order = $this->getOrder();
        $order->admin_note = $note;
        $order->save();
    }

    /**
     * 设置线下支付状态
     * @return bool
     * @throws ApiException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function setOfflinePaySuccess(): bool
    {
        $order = $this->getOrder()->toArray();
        $order['order_type'] = 0;
        $order['pay_code'] = 'offline';
        $pay_params = app(PayLogService::class)->creatPayLogParams($order);
        $pay_params['paylog_id'] = app(PayLogService::class)->creatPayLog($pay_params);
        app(PaymentService::class)->paySuccess($pay_params['pay_sn']);
        return true;
    }
}
