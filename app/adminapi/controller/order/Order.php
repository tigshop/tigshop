<?php
//**---------------------------------------------------------------------+
//** 后台控制器文件 -- 订单
//**---------------------------------------------------------------------+
//** 版权所有：江西佰商科技有限公司. 官网：https://www.tigshop.com
//**---------------------------------------------------------------------+
//** 作者：Tigshop团队，yq@tigshop.com
//**---------------------------------------------------------------------+
//** 提示：Tigshop商城系统为非免费商用系统，未经授权，严禁使用、修改、发布
//**---------------------------------------------------------------------+

namespace app\adminapi\controller\order;

use app\adminapi\AdminBaseController;
use app\model\order\OrderSplitLog;
use app\service\admin\order\OrderDetailService;
use app\service\admin\order\OrderLogService;
use app\service\admin\order\OrderService;
use exceptions\ApiException;
use think\App;
use think\Response;
use think\facade\Db;

/**
 * 订单控制器
 */
class Order extends AdminBaseController
{
    protected OrderService $orderService;
    protected OrderLogService $orderLogService;

    /**
     * 构造函数
     *
     * @param App $app
     * @param OrderService $orderService
     */
    public function __construct(App $app, OrderService $orderService, OrderLogService $orderLogService)
    {
        parent::__construct($app);
        $this->orderService = $orderService;
        $this->orderLogService = $orderLogService;
        //$this->checkAuthor('orderManage'); //权限检查
    }

    /**
     * 列表页面
     *
     * @return \think\Response
     */
    public function list(): \think\Response
    {
        $filter = $this->request->only([
            'keyword' => '',
            'user_id/d' => 0,
            'order_status/d' => -1,
            'pay_status/d' => -1,
            'shipping_status/d' => -1,
            'address' => '',
            'email' => '',
            'mobile' => '',
            'logistics_id/d' => 0,
            "add_start_time" => "",
            "add_end_time" => "",
            'comment_status/d' => -1,
            'page/d' => 1,
            'size/d' => 15,
            'sort_field' => 'order_id',
            'sort_order' => 'desc',
            'is_settlement' => -1,
            'is_exchange_order' => -1
        ], 'get');

        $filter['shop_id'] = $this->shopId;
		$filter['suppliers_id'] = request()->suppliersId;
        $filterResult = $this->orderService->getFilterResult($filter);
        $total = $this->orderService->getFilterCount($filter);
        return $this->success([
            'records' => $filterResult,
            'total' => $total,
        ]);
    }

    /**
     * 订单详情
     * @return Response
     * @throws ApiException
     */
    public function detail(): \think\Response
    {
        $id =$this->request->all('id/d', 0);
		$suppliers_id = request()->suppliersId;
        $item = $this->orderService->getDetail($id,null,$suppliers_id);
        $item['way_bill'] = $this->orderService->getUseWayBillStatus(); //发货和已发货是否显示电子面单
        return $this->success(
            $item
        );
    }

    /**
     * 查看父订单
     * @return Response
     */
    public function parentOrderDetail(): Response
    {
        $id =$this->request->all('id/d', 0);
        $item = app(OrderSplitLog::class)->where('order_id', $id)->findOrEmpty();
        return $this->success(
            $item['parent_order_data'] ?? [],
        );
    }

    /**
     * 订单设置为已确认
     * @return Response
     */
    public function setConfirm(): \think\Response
    {
        $id =$this->request->all('id/d', 0);
        $this->orderService->setOrderConfirm($id);
        return $this->success();
    }

    /**
     * 订单拆分
     * @return Response
     */
    public function splitStoreOrder(): \think\Response
    {
        $id =$this->request->all('id/d', 0);
        $this->orderService->splitStoreOrder($id);
        return $this->success();
    }

    /**
     * 订单设置为已支付
     * @return Response
     * @throws ApiException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function setPaid(): \think\Response
    {
        $id =$this->request->all('id/d', 0);
        $orderDetail = app(OrderDetailService::class)->setOrderId($id);
        $orderDetail->setOfflinePaySuccess();
        return $this->success();
    }

    /**
     * 取消订单
     * @return Response
     */
    public function cancelOrder(): \think\Response
    {
        $id =$this->request->all('id/d', 0);
        $this->orderService->cancelOrder($id);
        return $this->success();
    }

    /**
     * 删除订单
     * @return Response
     */
    public function delOrder(): \think\Response
    {
        $id =$this->request->all('id/d', 0);
        $this->orderService->delOrder($id);
        return $this->success();
    }

    /**
     * 修改订单金额
     * @return Response
     */
    public function modifyMoney(): \think\Response
    {
        $id =$this->request->all('id/d', 0);
        $data = $this->request->only([
            'shipping_fee/f' => 0.00,
            'invoice_fee/f' => 0.00,
            'service_fee/f' => 0.00,
            'discount_amount/f' => 0.00,
        ], 'post');
        $this->orderService->modifyOrderMoney($id, $data);
        return $this->success();
    }

    /**
     * 修改收货人信息
     * @return Response
     */
    public function modifyConsignee(): \think\Response
    {
        $id =$this->request->all('id/d', 0);
        $data = $this->request->only([
            'consignee' => '',
            'mobile' => '',
            'telephone' => '',
            'email' => '',
            'postcode' => '',
            'region_ids/a' => [],
            'address' => '',
        ], 'post');
        $this->orderService->modifyOrderConsignee($id, $data);
        return $this->success();
    }

    /**
     * 确认收货
     * @return \think\Response
     * @throws \exceptions\ApiException
     */
    public function confirmReceipt(): \think\Response
    {
        $id =$this->request->all('id/d', 0);
        $this->orderService->confirmReceipt($id, null);
        return $this->success();
    }

    /**
     * 修改配送信息
     * @return Response
     */
    public function modifyShipping(): \think\Response
    {
        $id =$this->request->all('id/d', 0);
        $data = $this->request->only([
            'shipping_method/d' => 0,
            'logistics_id/d' => 0,
            'tracking_no' => '',
        ], 'post');
        $this->orderService->modifyOrderShipping($id, $data);
        return $this->success();
    }

    /**
     * 修改商品信息
     * @return Response
     */
    public function modifyProduct(): \think\Response
    {
        $id =$this->request->all('id/d', 0);
        $data =$this->request->all('items', []);
        $this->orderService->modifyOrderProduct($id, $data);
        return $this->success();
    }

    /**
     * 添加商品时获取商品信息
     * @return Response
     */
    public function getAddProductInfo(): \think\Response
    {
        $ids =$this->request->all('ids', []);
        $product_items = $this->orderService->getAddProductInfoByIds($ids);
        return $this->success(
           $product_items
        );
    }

    /**
     * 设置商家备注
     * @return Response
     */
    public function setAdminNote(): \think\Response
    {
        $id =$this->request->all('id/d', 0);
        $admin_note =$this->request->all('admin_note', '');
        $this->orderService->setAdminNote($id, $admin_note);
        return $this->success();
    }

    /**
     * 发货
     * @return Response
     */
    public function deliver(): \think\Response
    {
        $id =$this->request->all('id/d', 0);
        $deliver_data =$this->request->all('deliver_data/a', []);
        $shipping_method =$this->request->all('shipping_method/d', 1);
        $logistics_id =$this->request->all('logistics_id/d', 0);
        $tracking_no =$this->request->all('tracking_no', '');
        $bill_remark =$this->request->all('bill_remark', '');
        $this->orderService->deliverOrder($id, $deliver_data, $shipping_method, $logistics_id, $tracking_no, $bill_remark);
        return $this->success();
    }

    /**
     * 打印订单
     * @return Response
     */
    public function orderPrint(): \think\Response
    {
        $id =$this->request->all('id/d', 0);
        $order_print = $this->orderService->getOrderPrintInfo($id);
        return $this->success(
            $order_print
        );
    }

    /**
     * 打印电子面单
     * @return Response
     */
    public function orderPrintWaybill(): Response
    {
        $id =$this->request->all('id/d', 0);
        $way_bill_print = $this->orderService->getOrderPrintWaybillInfo($id);
        return $this->success(
           $way_bill_print
        );
    }

    /**
     * 订单导出标签列表
     * @return \think\Response
     */
    public function getExportItemList(): \think\Response
    {
        $export_item_list = $this->orderService->getExportItemList();
        return $this->success(
           $export_item_list
        );
    }

    /**
     * 订单导出存的标签
     * @return \think\Response
     */
    public function saveExportItem(): \think\Response
    {
        $order_export =$this->request->all('export_item', []);
        $result = $this->orderService->saveExportItem($order_export);
        return $result ? $this->success() : $this->error('保存失败');
    }

    // 标签详情
    public function exportItemInfo(): \think\Response
    {
        $item = $this->orderService->getExportItemInfo();
        return $this->success(
            $item
        );
    }

    //订单导出
    public function orderExport(): \think\Response
    {
        $filter = $this->request->only([
            'keyword' => '',
            'user_id/d' => 0,
            'order_status/d' => -1,
            'pay_status/d' => -1,
            'shipping_status/d' => -1,
            'comment_status/d' => -1,
            'address' => '',
            'email' => '',
            'mobile' => '',
            'logistics_id/d' => 0,
            'add_start_time' => "",
            'add_end_time' => "",
            'page/d' => 1,
            'size/d' => 99999,
            'sort_field' => 'order_id',
            'sort_order' => 'desc',
        ], 'get');
        $filter['shop_id'] = $this->shopId;

        //导出栏目
        $exportItem =$this->request->all('export_item', []);
        if (empty($exportItem)) {
            return $this->error('导出栏目不能为空！');
        }

        $filterResult = $this->orderService->getFilterResult($filter);
        $result = $this->orderService->orderExport($filterResult, $exportItem);
        return $result ? $this->success() : $this->error('导出失败');
    }

    /**
     * 多个订单详情
     * @return Response
     * @throws ApiException
     */
    public function severalDetail(): \think\Response
    {
        $data =$this->request->all("ids/a", []);
		$suppliers_id = request()->suppliersId;
        $data = is_array($data) ? $data : explode(',', $data);
        $item = $this->orderService->getSeveralDetail($data,$suppliers_id);
        return $this->success(
           $item
        );
    }

    /**
     * 批量操作
     * @return Response
     * @throws ApiException
     */
    public function batch(): Response
    {
        if (empty($this->request->all('ids')) || !is_array($this->request->all('ids'))) {
            return $this->error(/** LANG */ '未选择项目');
        }

        $data =$this->request->all('data', []);
        if (in_array($this->request->all('type'), ['deliver'])) {
            try {
                //批量操作一定要事务
                Db::startTrans();
                foreach ($this->request->all('ids') as $key => $id) {
                    $id = intval($id);
                    $this->orderService->batchOperation($id,$this->request->all('type'), $data);
                }
                Db::commit();
            } catch (\Exception $exception) {
                Db::rollback();
                throw new ApiException($exception->getMessage());
            }

            return $this->success();
        } else {
            return $this->error(/** LANG */ '#type 错误');
        }
    }

    /**
     * 批量打印
     * @return Response
     * @throws ApiException
     */
    public function printSeveral(): Response
    {
        $ids =$this->request->all('ids', '');
        $ids = is_array($ids) ? $ids : explode(',', $ids);
        $order_print = $this->orderService->printSeveral($ids);
        return $this->success(
            $order_print
        );
    }
}
