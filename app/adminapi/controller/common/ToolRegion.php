<?php
//**---------------------------------------------------------------------+
//**   后台控制器文件 --
//**---------------------------------------------------------------------+
//**   版权所有：江西佰商科技有限公司. 官网：https://www.tigshop.com
//**---------------------------------------------------------------------+
//**   作者：Tigshop团队，yq@tigshop.com
//**---------------------------------------------------------------------+
//**   提示：Tigshop商城系统为非免费商用系统，未经授权，严禁使用、修改、发布
//**---------------------------------------------------------------------+

namespace app\adminapi\controller\common;

use app\BaseController;
use app\model\setting\Region;

class ToolRegion extends BaseController
{

    public function __construct()
    {
        $data = '
{
    "code": 0,
    "msg": "",
    "data": [
        {
            "api": 0,
            "part": "东北",
            "provinces": [
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "和平区",
                                    "regionId": 210102
                                },
                                {
                                    "name": "沈河区",
                                    "regionId": 210103
                                },
                                {
                                    "name": "大东区",
                                    "regionId": 210104
                                },
                                {
                                    "name": "皇姑区",
                                    "regionId": 210105
                                },
                                {
                                    "name": "铁西区",
                                    "regionId": 210106
                                },
                                {
                                    "name": "苏家屯区",
                                    "regionId": 210111
                                },
                                {
                                    "name": "浑南区",
                                    "regionId": 210112
                                },
                                {
                                    "name": "沈北新区",
                                    "regionId": 210113
                                },
                                {
                                    "name": "于洪区",
                                    "regionId": 210114
                                },
                                {
                                    "name": "辽中区",
                                    "regionId": 210115
                                },
                                {
                                    "name": "康平县",
                                    "regionId": 210123
                                },
                                {
                                    "name": "法库县",
                                    "regionId": 210124
                                },
                                {
                                    "name": "新民市",
                                    "regionId": 210181
                                },
                                {
                                    "name": "经济技术开发区",
                                    "regionId": 210190
                                }
                            ],
                            "name": "沈阳市",
                            "regionId": 210100
                        },
                        {
                            "counties": [
                                {
                                    "name": "中山区",
                                    "regionId": 210202
                                },
                                {
                                    "name": "西岗区",
                                    "regionId": 210203
                                },
                                {
                                    "name": "沙河口区",
                                    "regionId": 210204
                                },
                                {
                                    "name": "甘井子区",
                                    "regionId": 210211
                                },
                                {
                                    "name": "旅顺口区",
                                    "regionId": 210212
                                },
                                {
                                    "name": "金州区",
                                    "regionId": 210213
                                },
                                {
                                    "name": "普兰店区",
                                    "regionId": 210214
                                },
                                {
                                    "name": "长海县",
                                    "regionId": 210224
                                },
                                {
                                    "name": "瓦房店市",
                                    "regionId": 210281
                                },
                                {
                                    "name": "庄河市",
                                    "regionId": 210283
                                }
                            ],
                            "name": "大连市",
                            "regionId": 210200
                        },
                        {
                            "counties": [
                                {
                                    "name": "铁东区",
                                    "regionId": 210302
                                },
                                {
                                    "name": "铁西区",
                                    "regionId": 210303
                                },
                                {
                                    "name": "立山区",
                                    "regionId": 210304
                                },
                                {
                                    "name": "千山区",
                                    "regionId": 210311
                                },
                                {
                                    "name": "台安县",
                                    "regionId": 210321
                                },
                                {
                                    "name": "岫岩满族自治县",
                                    "regionId": 210323
                                },
                                {
                                    "name": "海城市",
                                    "regionId": 210381
                                },
                                {
                                    "name": "高新区",
                                    "regionId": 210390
                                }
                            ],
                            "name": "鞍山市",
                            "regionId": 210300
                        },
                        {
                            "counties": [
                                {
                                    "name": "新抚区",
                                    "regionId": 210402
                                },
                                {
                                    "name": "东洲区",
                                    "regionId": 210403
                                },
                                {
                                    "name": "望花区",
                                    "regionId": 210404
                                },
                                {
                                    "name": "顺城区",
                                    "regionId": 210411
                                },
                                {
                                    "name": "抚顺县",
                                    "regionId": 210421
                                },
                                {
                                    "name": "新宾满族自治县",
                                    "regionId": 210422
                                },
                                {
                                    "name": "清原满族自治县",
                                    "regionId": 210423
                                }
                            ],
                            "name": "抚顺市",
                            "regionId": 210400
                        },
                        {
                            "counties": [
                                {
                                    "name": "平山区",
                                    "regionId": 210502
                                },
                                {
                                    "name": "溪湖区",
                                    "regionId": 210503
                                },
                                {
                                    "name": "明山区",
                                    "regionId": 210504
                                },
                                {
                                    "name": "南芬区",
                                    "regionId": 210505
                                },
                                {
                                    "name": "本溪满族自治县",
                                    "regionId": 210521
                                },
                                {
                                    "name": "桓仁满族自治县",
                                    "regionId": 210522
                                }
                            ],
                            "name": "本溪市",
                            "regionId": 210500
                        },
                        {
                            "counties": [
                                {
                                    "name": "元宝区",
                                    "regionId": 210602
                                },
                                {
                                    "name": "振兴区",
                                    "regionId": 210603
                                },
                                {
                                    "name": "振安区",
                                    "regionId": 210604
                                },
                                {
                                    "name": "宽甸满族自治县",
                                    "regionId": 210624
                                },
                                {
                                    "name": "东港市",
                                    "regionId": 210681
                                },
                                {
                                    "name": "凤城市",
                                    "regionId": 210682
                                }
                            ],
                            "name": "丹东市",
                            "regionId": 210600
                        },
                        {
                            "counties": [
                                {
                                    "name": "古塔区",
                                    "regionId": 210702
                                },
                                {
                                    "name": "凌河区",
                                    "regionId": 210703
                                },
                                {
                                    "name": "太和区",
                                    "regionId": 210711
                                },
                                {
                                    "name": "黑山县",
                                    "regionId": 210726
                                },
                                {
                                    "name": "义县",
                                    "regionId": 210727
                                },
                                {
                                    "name": "凌海市",
                                    "regionId": 210781
                                },
                                {
                                    "name": "北镇市",
                                    "regionId": 210782
                                },
                                {
                                    "name": "经济技术开发区",
                                    "regionId": 210793
                                }
                            ],
                            "name": "锦州市",
                            "regionId": 210700
                        },
                        {
                            "counties": [
                                {
                                    "name": "站前区",
                                    "regionId": 210802
                                },
                                {
                                    "name": "西市区",
                                    "regionId": 210803
                                },
                                {
                                    "name": "鲅鱼圈区",
                                    "regionId": 210804
                                },
                                {
                                    "name": "老边区",
                                    "regionId": 210811
                                },
                                {
                                    "name": "盖州市",
                                    "regionId": 210881
                                },
                                {
                                    "name": "大石桥市",
                                    "regionId": 210882
                                }
                            ],
                            "name": "营口市",
                            "regionId": 210800
                        },
                        {
                            "counties": [
                                {
                                    "name": "海州区",
                                    "regionId": 210902
                                },
                                {
                                    "name": "新邱区",
                                    "regionId": 210903
                                },
                                {
                                    "name": "太平区",
                                    "regionId": 210904
                                },
                                {
                                    "name": "清河门区",
                                    "regionId": 210905
                                },
                                {
                                    "name": "细河区",
                                    "regionId": 210911
                                },
                                {
                                    "name": "阜新蒙古族自治县",
                                    "regionId": 210921
                                },
                                {
                                    "name": "彰武县",
                                    "regionId": 210922
                                }
                            ],
                            "name": "阜新市",
                            "regionId": 210900
                        },
                        {
                            "counties": [
                                {
                                    "name": "白塔区",
                                    "regionId": 211002
                                },
                                {
                                    "name": "文圣区",
                                    "regionId": 211003
                                },
                                {
                                    "name": "宏伟区",
                                    "regionId": 211004
                                },
                                {
                                    "name": "弓长岭区",
                                    "regionId": 211005
                                },
                                {
                                    "name": "太子河区",
                                    "regionId": 211011
                                },
                                {
                                    "name": "辽阳县",
                                    "regionId": 211021
                                },
                                {
                                    "name": "灯塔市",
                                    "regionId": 211081
                                }
                            ],
                            "name": "辽阳市",
                            "regionId": 211000
                        },
                        {
                            "counties": [
                                {
                                    "name": "双台子区",
                                    "regionId": 211102
                                },
                                {
                                    "name": "兴隆台区",
                                    "regionId": 211103
                                },
                                {
                                    "name": "大洼区",
                                    "regionId": 211104
                                },
                                {
                                    "name": "盘山县",
                                    "regionId": 211122
                                }
                            ],
                            "name": "盘锦市",
                            "regionId": 211100
                        },
                        {
                            "counties": [
                                {
                                    "name": "银州区",
                                    "regionId": 211202
                                },
                                {
                                    "name": "清河区",
                                    "regionId": 211204
                                },
                                {
                                    "name": "铁岭县",
                                    "regionId": 211221
                                },
                                {
                                    "name": "西丰县",
                                    "regionId": 211223
                                },
                                {
                                    "name": "昌图县",
                                    "regionId": 211224
                                },
                                {
                                    "name": "调兵山市",
                                    "regionId": 211281
                                },
                                {
                                    "name": "开原市",
                                    "regionId": 211282
                                }
                            ],
                            "name": "铁岭市",
                            "regionId": 211200
                        },
                        {
                            "counties": [
                                {
                                    "name": "双塔区",
                                    "regionId": 211302
                                },
                                {
                                    "name": "龙城区",
                                    "regionId": 211303
                                },
                                {
                                    "name": "朝阳县",
                                    "regionId": 211321
                                },
                                {
                                    "name": "建平县",
                                    "regionId": 211322
                                },
                                {
                                    "name": "喀喇沁左翼蒙古族自治县",
                                    "regionId": 211324
                                },
                                {
                                    "name": "北票市",
                                    "regionId": 211381
                                },
                                {
                                    "name": "凌源市",
                                    "regionId": 211382
                                }
                            ],
                            "name": "朝阳市",
                            "regionId": 211300
                        },
                        {
                            "counties": [
                                {
                                    "name": "连山区",
                                    "regionId": 211402
                                },
                                {
                                    "name": "龙港区",
                                    "regionId": 211403
                                },
                                {
                                    "name": "南票区",
                                    "regionId": 211404
                                },
                                {
                                    "name": "绥中县",
                                    "regionId": 211421
                                },
                                {
                                    "name": "建昌县",
                                    "regionId": 211422
                                },
                                {
                                    "name": "兴城市",
                                    "regionId": 211481
                                }
                            ],
                            "name": "葫芦岛市",
                            "regionId": 211400
                        }
                    ],
                    "name": "辽宁省",
                    "regionId": 210000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "南关区",
                                    "regionId": 220102
                                },
                                {
                                    "name": "宽城区",
                                    "regionId": 220103
                                },
                                {
                                    "name": "朝阳区",
                                    "regionId": 220104
                                },
                                {
                                    "name": "二道区",
                                    "regionId": 220105
                                },
                                {
                                    "name": "绿园区",
                                    "regionId": 220106
                                },
                                {
                                    "name": "双阳区",
                                    "regionId": 220112
                                },
                                {
                                    "name": "九台区",
                                    "regionId": 220113
                                },
                                {
                                    "name": "农安县",
                                    "regionId": 220122
                                },
                                {
                                    "name": "长春经济技术开发区",
                                    "regionId": 220171
                                },
                                {
                                    "name": "长春净月高新技术产业开发区",
                                    "regionId": 220172
                                },
                                {
                                    "name": "长春高新技术产业开发区",
                                    "regionId": 220173
                                },
                                {
                                    "name": "长春汽车经济技术开发区",
                                    "regionId": 220174
                                },
                                {
                                    "name": "榆树市",
                                    "regionId": 220182
                                },
                                {
                                    "name": "德惠市",
                                    "regionId": 220183
                                },
                                {
                                    "name": "公主岭市",
                                    "regionId": 220184
                                },
                                {
                                    "name": "经济技术开发区",
                                    "regionId": 220192
                                }
                            ],
                            "name": "长春市",
                            "regionId": 220100
                        },
                        {
                            "counties": [
                                {
                                    "name": "昌邑区",
                                    "regionId": 220202
                                },
                                {
                                    "name": "龙潭区",
                                    "regionId": 220203
                                },
                                {
                                    "name": "船营区",
                                    "regionId": 220204
                                },
                                {
                                    "name": "丰满区",
                                    "regionId": 220211
                                },
                                {
                                    "name": "永吉县",
                                    "regionId": 220221
                                },
                                {
                                    "name": "吉林经济开发区",
                                    "regionId": 220271
                                },
                                {
                                    "name": "吉林高新技术产业开发区",
                                    "regionId": 220272
                                },
                                {
                                    "name": "蛟河市",
                                    "regionId": 220281
                                },
                                {
                                    "name": "桦甸市",
                                    "regionId": 220282
                                },
                                {
                                    "name": "舒兰市",
                                    "regionId": 220283
                                },
                                {
                                    "name": "磐石市",
                                    "regionId": 220284
                                }
                            ],
                            "name": "吉林市",
                            "regionId": 220200
                        },
                        {
                            "counties": [
                                {
                                    "name": "铁西区",
                                    "regionId": 220302
                                },
                                {
                                    "name": "铁东区",
                                    "regionId": 220303
                                },
                                {
                                    "name": "梨树县",
                                    "regionId": 220322
                                },
                                {
                                    "name": "伊通满族自治县",
                                    "regionId": 220323
                                },
                                {
                                    "name": "双辽市",
                                    "regionId": 220382
                                }
                            ],
                            "name": "四平市",
                            "regionId": 220300
                        },
                        {
                            "counties": [
                                {
                                    "name": "龙山区",
                                    "regionId": 220402
                                },
                                {
                                    "name": "西安区",
                                    "regionId": 220403
                                },
                                {
                                    "name": "东丰县",
                                    "regionId": 220421
                                },
                                {
                                    "name": "东辽县",
                                    "regionId": 220422
                                }
                            ],
                            "name": "辽源市",
                            "regionId": 220400
                        },
                        {
                            "counties": [
                                {
                                    "name": "东昌区",
                                    "regionId": 220502
                                },
                                {
                                    "name": "二道江区",
                                    "regionId": 220503
                                },
                                {
                                    "name": "通化县",
                                    "regionId": 220521
                                },
                                {
                                    "name": "辉南县",
                                    "regionId": 220523
                                },
                                {
                                    "name": "柳河县",
                                    "regionId": 220524
                                },
                                {
                                    "name": "梅河口市",
                                    "regionId": 220581
                                },
                                {
                                    "name": "集安市",
                                    "regionId": 220582
                                }
                            ],
                            "name": "通化市",
                            "regionId": 220500
                        },
                        {
                            "counties": [
                                {
                                    "name": "浑江区",
                                    "regionId": 220602
                                },
                                {
                                    "name": "江源区",
                                    "regionId": 220605
                                },
                                {
                                    "name": "抚松县",
                                    "regionId": 220621
                                },
                                {
                                    "name": "靖宇县",
                                    "regionId": 220622
                                },
                                {
                                    "name": "长白朝鲜族自治县",
                                    "regionId": 220623
                                },
                                {
                                    "name": "临江市",
                                    "regionId": 220681
                                }
                            ],
                            "name": "白山市",
                            "regionId": 220600
                        },
                        {
                            "counties": [
                                {
                                    "name": "宁江区",
                                    "regionId": 220702
                                },
                                {
                                    "name": "前郭尔罗斯蒙古族自治县",
                                    "regionId": 220721
                                },
                                {
                                    "name": "长岭县",
                                    "regionId": 220722
                                },
                                {
                                    "name": "乾安县",
                                    "regionId": 220723
                                },
                                {
                                    "name": "吉林松原经济开发区",
                                    "regionId": 220771
                                },
                                {
                                    "name": "扶余市",
                                    "regionId": 220781
                                }
                            ],
                            "name": "松原市",
                            "regionId": 220700
                        },
                        {
                            "counties": [
                                {
                                    "name": "洮北区",
                                    "regionId": 220802
                                },
                                {
                                    "name": "镇赉县",
                                    "regionId": 220821
                                },
                                {
                                    "name": "通榆县",
                                    "regionId": 220822
                                },
                                {
                                    "name": "吉林白城经济开发区",
                                    "regionId": 220871
                                },
                                {
                                    "name": "洮南市",
                                    "regionId": 220881
                                },
                                {
                                    "name": "大安市",
                                    "regionId": 220882
                                }
                            ],
                            "name": "白城市",
                            "regionId": 220800
                        },
                        {
                            "counties": [
                                {
                                    "name": "延吉市",
                                    "regionId": 222401
                                },
                                {
                                    "name": "图们市",
                                    "regionId": 222402
                                },
                                {
                                    "name": "敦化市",
                                    "regionId": 222403
                                },
                                {
                                    "name": "珲春市",
                                    "regionId": 222404
                                },
                                {
                                    "name": "龙井市",
                                    "regionId": 222405
                                },
                                {
                                    "name": "和龙市",
                                    "regionId": 222406
                                },
                                {
                                    "name": "汪清县",
                                    "regionId": 222424
                                },
                                {
                                    "name": "安图县",
                                    "regionId": 222426
                                }
                            ],
                            "name": "延边朝鲜族自治州",
                            "regionId": 222400
                        }
                    ],
                    "name": "吉林省",
                    "regionId": 220000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "道里区",
                                    "regionId": 230102
                                },
                                {
                                    "name": "南岗区",
                                    "regionId": 230103
                                },
                                {
                                    "name": "道外区",
                                    "regionId": 230104
                                },
                                {
                                    "name": "平房区",
                                    "regionId": 230108
                                },
                                {
                                    "name": "松北区",
                                    "regionId": 230109
                                },
                                {
                                    "name": "香坊区",
                                    "regionId": 230110
                                },
                                {
                                    "name": "呼兰区",
                                    "regionId": 230111
                                },
                                {
                                    "name": "阿城区",
                                    "regionId": 230112
                                },
                                {
                                    "name": "双城区",
                                    "regionId": 230113
                                },
                                {
                                    "name": "依兰县",
                                    "regionId": 230123
                                },
                                {
                                    "name": "方正县",
                                    "regionId": 230124
                                },
                                {
                                    "name": "宾县",
                                    "regionId": 230125
                                },
                                {
                                    "name": "巴彦县",
                                    "regionId": 230126
                                },
                                {
                                    "name": "木兰县",
                                    "regionId": 230127
                                },
                                {
                                    "name": "通河县",
                                    "regionId": 230128
                                },
                                {
                                    "name": "延寿县",
                                    "regionId": 230129
                                },
                                {
                                    "name": "尚志市",
                                    "regionId": 230183
                                },
                                {
                                    "name": "五常市",
                                    "regionId": 230184
                                }
                            ],
                            "name": "哈尔滨市",
                            "regionId": 230100
                        },
                        {
                            "counties": [
                                {
                                    "name": "龙沙区",
                                    "regionId": 230202
                                },
                                {
                                    "name": "建华区",
                                    "regionId": 230203
                                },
                                {
                                    "name": "铁锋区",
                                    "regionId": 230204
                                },
                                {
                                    "name": "昂昂溪区",
                                    "regionId": 230205
                                },
                                {
                                    "name": "富拉尔基区",
                                    "regionId": 230206
                                },
                                {
                                    "name": "碾子山区",
                                    "regionId": 230207
                                },
                                {
                                    "name": "梅里斯达斡尔族区",
                                    "regionId": 230208
                                },
                                {
                                    "name": "龙江县",
                                    "regionId": 230221
                                },
                                {
                                    "name": "依安县",
                                    "regionId": 230223
                                },
                                {
                                    "name": "泰来县",
                                    "regionId": 230224
                                },
                                {
                                    "name": "甘南县",
                                    "regionId": 230225
                                },
                                {
                                    "name": "富裕县",
                                    "regionId": 230227
                                },
                                {
                                    "name": "克山县",
                                    "regionId": 230229
                                },
                                {
                                    "name": "克东县",
                                    "regionId": 230230
                                },
                                {
                                    "name": "拜泉县",
                                    "regionId": 230231
                                },
                                {
                                    "name": "讷河市",
                                    "regionId": 230281
                                }
                            ],
                            "name": "齐齐哈尔市",
                            "regionId": 230200
                        },
                        {
                            "counties": [
                                {
                                    "name": "鸡冠区",
                                    "regionId": 230302
                                },
                                {
                                    "name": "恒山区",
                                    "regionId": 230303
                                },
                                {
                                    "name": "滴道区",
                                    "regionId": 230304
                                },
                                {
                                    "name": "梨树区",
                                    "regionId": 230305
                                },
                                {
                                    "name": "城子河区",
                                    "regionId": 230306
                                },
                                {
                                    "name": "麻山区",
                                    "regionId": 230307
                                },
                                {
                                    "name": "鸡东县",
                                    "regionId": 230321
                                },
                                {
                                    "name": "虎林市",
                                    "regionId": 230381
                                },
                                {
                                    "name": "密山市",
                                    "regionId": 230382
                                }
                            ],
                            "name": "鸡西市",
                            "regionId": 230300
                        },
                        {
                            "counties": [
                                {
                                    "name": "向阳区",
                                    "regionId": 230402
                                },
                                {
                                    "name": "工农区",
                                    "regionId": 230403
                                },
                                {
                                    "name": "南山区",
                                    "regionId": 230404
                                },
                                {
                                    "name": "兴安区",
                                    "regionId": 230405
                                },
                                {
                                    "name": "东山区",
                                    "regionId": 230406
                                },
                                {
                                    "name": "兴山区",
                                    "regionId": 230407
                                },
                                {
                                    "name": "萝北县",
                                    "regionId": 230421
                                },
                                {
                                    "name": "绥滨县",
                                    "regionId": 230422
                                }
                            ],
                            "name": "鹤岗市",
                            "regionId": 230400
                        },
                        {
                            "counties": [
                                {
                                    "name": "尖山区",
                                    "regionId": 230502
                                },
                                {
                                    "name": "岭东区",
                                    "regionId": 230503
                                },
                                {
                                    "name": "四方台区",
                                    "regionId": 230505
                                },
                                {
                                    "name": "宝山区",
                                    "regionId": 230506
                                },
                                {
                                    "name": "集贤县",
                                    "regionId": 230521
                                },
                                {
                                    "name": "友谊县",
                                    "regionId": 230522
                                },
                                {
                                    "name": "宝清县",
                                    "regionId": 230523
                                },
                                {
                                    "name": "饶河县",
                                    "regionId": 230524
                                }
                            ],
                            "name": "双鸭山市",
                            "regionId": 230500
                        },
                        {
                            "counties": [
                                {
                                    "name": "萨尔图区",
                                    "regionId": 230602
                                },
                                {
                                    "name": "龙凤区",
                                    "regionId": 230603
                                },
                                {
                                    "name": "让胡路区",
                                    "regionId": 230604
                                },
                                {
                                    "name": "红岗区",
                                    "regionId": 230605
                                },
                                {
                                    "name": "大同区",
                                    "regionId": 230606
                                },
                                {
                                    "name": "肇州县",
                                    "regionId": 230621
                                },
                                {
                                    "name": "肇源县",
                                    "regionId": 230622
                                },
                                {
                                    "name": "林甸县",
                                    "regionId": 230623
                                },
                                {
                                    "name": "杜尔伯特蒙古族自治县",
                                    "regionId": 230624
                                },
                                {
                                    "name": "大庆高新技术产业开发区",
                                    "regionId": 230671
                                }
                            ],
                            "name": "大庆市",
                            "regionId": 230600
                        },
                        {
                            "counties": [
                                {
                                    "name": "伊美区",
                                    "regionId": 230717
                                },
                                {
                                    "name": "乌翠区",
                                    "regionId": 230718
                                },
                                {
                                    "name": "友好区",
                                    "regionId": 230719
                                },
                                {
                                    "name": "嘉荫县",
                                    "regionId": 230722
                                },
                                {
                                    "name": "汤旺县",
                                    "regionId": 230723
                                },
                                {
                                    "name": "丰林县",
                                    "regionId": 230724
                                },
                                {
                                    "name": "大箐山县",
                                    "regionId": 230725
                                },
                                {
                                    "name": "南岔县",
                                    "regionId": 230726
                                },
                                {
                                    "name": "金林区",
                                    "regionId": 230751
                                },
                                {
                                    "name": "铁力市",
                                    "regionId": 230781
                                }
                            ],
                            "name": "伊春市",
                            "regionId": 230700
                        },
                        {
                            "counties": [
                                {
                                    "name": "向阳区",
                                    "regionId": 230803
                                },
                                {
                                    "name": "前进区",
                                    "regionId": 230804
                                },
                                {
                                    "name": "东风区",
                                    "regionId": 230805
                                },
                                {
                                    "name": "郊区",
                                    "regionId": 230811
                                },
                                {
                                    "name": "桦南县",
                                    "regionId": 230822
                                },
                                {
                                    "name": "桦川县",
                                    "regionId": 230826
                                },
                                {
                                    "name": "汤原县",
                                    "regionId": 230828
                                },
                                {
                                    "name": "同江市",
                                    "regionId": 230881
                                },
                                {
                                    "name": "富锦市",
                                    "regionId": 230882
                                },
                                {
                                    "name": "抚远市",
                                    "regionId": 230883
                                }
                            ],
                            "name": "佳木斯市",
                            "regionId": 230800
                        },
                        {
                            "counties": [
                                {
                                    "name": "新兴区",
                                    "regionId": 230902
                                },
                                {
                                    "name": "桃山区",
                                    "regionId": 230903
                                },
                                {
                                    "name": "茄子河区",
                                    "regionId": 230904
                                },
                                {
                                    "name": "勃利县",
                                    "regionId": 230921
                                }
                            ],
                            "name": "七台河市",
                            "regionId": 230900
                        },
                        {
                            "counties": [
                                {
                                    "name": "东安区",
                                    "regionId": 231002
                                },
                                {
                                    "name": "阳明区",
                                    "regionId": 231003
                                },
                                {
                                    "name": "爱民区",
                                    "regionId": 231004
                                },
                                {
                                    "name": "西安区",
                                    "regionId": 231005
                                },
                                {
                                    "name": "林口县",
                                    "regionId": 231025
                                },
                                {
                                    "name": "绥芬河市",
                                    "regionId": 231081
                                },
                                {
                                    "name": "海林市",
                                    "regionId": 231083
                                },
                                {
                                    "name": "宁安市",
                                    "regionId": 231084
                                },
                                {
                                    "name": "穆棱市",
                                    "regionId": 231085
                                },
                                {
                                    "name": "东宁市",
                                    "regionId": 231086
                                }
                            ],
                            "name": "牡丹江市",
                            "regionId": 231000
                        },
                        {
                            "counties": [
                                {
                                    "name": "爱辉区",
                                    "regionId": 231102
                                },
                                {
                                    "name": "逊克县",
                                    "regionId": 231123
                                },
                                {
                                    "name": "孙吴县",
                                    "regionId": 231124
                                },
                                {
                                    "name": "北安市",
                                    "regionId": 231181
                                },
                                {
                                    "name": "五大连池市",
                                    "regionId": 231182
                                },
                                {
                                    "name": "嫩江市",
                                    "regionId": 231183
                                }
                            ],
                            "name": "黑河市",
                            "regionId": 231100
                        },
                        {
                            "counties": [
                                {
                                    "name": "北林区",
                                    "regionId": 231202
                                },
                                {
                                    "name": "望奎县",
                                    "regionId": 231221
                                },
                                {
                                    "name": "兰西县",
                                    "regionId": 231222
                                },
                                {
                                    "name": "青冈县",
                                    "regionId": 231223
                                },
                                {
                                    "name": "庆安县",
                                    "regionId": 231224
                                },
                                {
                                    "name": "明水县",
                                    "regionId": 231225
                                },
                                {
                                    "name": "绥棱县",
                                    "regionId": 231226
                                },
                                {
                                    "name": "安达市",
                                    "regionId": 231281
                                },
                                {
                                    "name": "肇东市",
                                    "regionId": 231282
                                },
                                {
                                    "name": "海伦市",
                                    "regionId": 231283
                                }
                            ],
                            "name": "绥化市",
                            "regionId": 231200
                        },
                        {
                            "counties": [
                                {
                                    "name": "漠河市",
                                    "regionId": 232701
                                },
                                {
                                    "name": "呼玛县",
                                    "regionId": 232721
                                },
                                {
                                    "name": "塔河县",
                                    "regionId": 232722
                                },
                                {
                                    "name": "松岭区",
                                    "regionId": 232790
                                },
                                {
                                    "name": "呼中区",
                                    "regionId": 232791
                                },
                                {
                                    "name": "加格达奇区",
                                    "regionId": 232792
                                },
                                {
                                    "name": "新林区",
                                    "regionId": 232793
                                }
                            ],
                            "name": "大兴安岭地区",
                            "regionId": 232700
                        }
                    ],
                    "name": "黑龙江省",
                    "regionId": 230000
                }
            ]
        },
        {
            "api": 1,
            "part": "华东",
            "provinces": [
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "黄浦区",
                                    "regionId": 310101
                                },
                                {
                                    "name": "徐汇区",
                                    "regionId": 310104
                                },
                                {
                                    "name": "长宁区",
                                    "regionId": 310105
                                },
                                {
                                    "name": "静安区",
                                    "regionId": 310106
                                },
                                {
                                    "name": "普陀区",
                                    "regionId": 310107
                                },
                                {
                                    "name": "虹口区",
                                    "regionId": 310109
                                },
                                {
                                    "name": "杨浦区",
                                    "regionId": 310110
                                },
                                {
                                    "name": "闵行区",
                                    "regionId": 310112
                                },
                                {
                                    "name": "宝山区",
                                    "regionId": 310113
                                },
                                {
                                    "name": "嘉定区",
                                    "regionId": 310114
                                },
                                {
                                    "name": "浦东新区",
                                    "regionId": 310115
                                },
                                {
                                    "name": "金山区",
                                    "regionId": 310116
                                },
                                {
                                    "name": "松江区",
                                    "regionId": 310117
                                },
                                {
                                    "name": "青浦区",
                                    "regionId": 310118
                                },
                                {
                                    "name": "奉贤区",
                                    "regionId": 310120
                                },
                                {
                                    "name": "崇明区",
                                    "regionId": 310151
                                }
                            ],
                            "name": "上海市",
                            "regionId": 310100
                        }
                    ],
                    "name": "上海市",
                    "regionId": 310000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "玄武区",
                                    "regionId": 320102
                                },
                                {
                                    "name": "秦淮区",
                                    "regionId": 320104
                                },
                                {
                                    "name": "建邺区",
                                    "regionId": 320105
                                },
                                {
                                    "name": "鼓楼区",
                                    "regionId": 320106
                                },
                                {
                                    "name": "浦口区",
                                    "regionId": 320111
                                },
                                {
                                    "name": "栖霞区",
                                    "regionId": 320113
                                },
                                {
                                    "name": "雨花台区",
                                    "regionId": 320114
                                },
                                {
                                    "name": "江宁区",
                                    "regionId": 320115
                                },
                                {
                                    "name": "六合区",
                                    "regionId": 320116
                                },
                                {
                                    "name": "溧水区",
                                    "regionId": 320117
                                },
                                {
                                    "name": "高淳区",
                                    "regionId": 320118
                                }
                            ],
                            "name": "南京市",
                            "regionId": 320100
                        },
                        {
                            "counties": [
                                {
                                    "name": "锡山区",
                                    "regionId": 320205
                                },
                                {
                                    "name": "惠山区",
                                    "regionId": 320206
                                },
                                {
                                    "name": "滨湖区",
                                    "regionId": 320211
                                },
                                {
                                    "name": "梁溪区",
                                    "regionId": 320213
                                },
                                {
                                    "name": "新吴区",
                                    "regionId": 320214
                                },
                                {
                                    "name": "江阴市",
                                    "regionId": 320281
                                },
                                {
                                    "name": "宜兴市",
                                    "regionId": 320282
                                }
                            ],
                            "name": "无锡市",
                            "regionId": 320200
                        },
                        {
                            "counties": [
                                {
                                    "name": "鼓楼区",
                                    "regionId": 320302
                                },
                                {
                                    "name": "云龙区",
                                    "regionId": 320303
                                },
                                {
                                    "name": "贾汪区",
                                    "regionId": 320305
                                },
                                {
                                    "name": "泉山区",
                                    "regionId": 320311
                                },
                                {
                                    "name": "铜山区",
                                    "regionId": 320312
                                },
                                {
                                    "name": "丰县",
                                    "regionId": 320321
                                },
                                {
                                    "name": "沛县",
                                    "regionId": 320322
                                },
                                {
                                    "name": "睢宁县",
                                    "regionId": 320324
                                },
                                {
                                    "name": "徐州经济技术开发区",
                                    "regionId": 320371
                                },
                                {
                                    "name": "新沂市",
                                    "regionId": 320381
                                },
                                {
                                    "name": "邳州市",
                                    "regionId": 320382
                                },
                                {
                                    "name": "工业园区",
                                    "regionId": 320391
                                }
                            ],
                            "name": "徐州市",
                            "regionId": 320300
                        },
                        {
                            "counties": [
                                {
                                    "name": "天宁区",
                                    "regionId": 320402
                                },
                                {
                                    "name": "钟楼区",
                                    "regionId": 320404
                                },
                                {
                                    "name": "新北区",
                                    "regionId": 320411
                                },
                                {
                                    "name": "武进区",
                                    "regionId": 320412
                                },
                                {
                                    "name": "金坛区",
                                    "regionId": 320413
                                },
                                {
                                    "name": "溧阳市",
                                    "regionId": 320481
                                }
                            ],
                            "name": "常州市",
                            "regionId": 320400
                        },
                        {
                            "counties": [
                                {
                                    "name": "虎丘区",
                                    "regionId": 320505
                                },
                                {
                                    "name": "吴中区",
                                    "regionId": 320506
                                },
                                {
                                    "name": "相城区",
                                    "regionId": 320507
                                },
                                {
                                    "name": "姑苏区",
                                    "regionId": 320508
                                },
                                {
                                    "name": "吴江区",
                                    "regionId": 320509
                                },
                                {
                                    "name": "苏州工业园区",
                                    "regionId": 320571
                                },
                                {
                                    "name": "常熟市",
                                    "regionId": 320581
                                },
                                {
                                    "name": "张家港市",
                                    "regionId": 320582
                                },
                                {
                                    "name": "昆山市",
                                    "regionId": 320583
                                },
                                {
                                    "name": "太仓市",
                                    "regionId": 320585
                                },
                                {
                                    "name": "工业园区",
                                    "regionId": 320590
                                },
                                {
                                    "name": "高新区",
                                    "regionId": 320591
                                }
                            ],
                            "name": "苏州市",
                            "regionId": 320500
                        },
                        {
                            "counties": [
                                {
                                    "name": "通州区",
                                    "regionId": 320612
                                },
                                {
                                    "name": "崇川区",
                                    "regionId": 320613
                                },
                                {
                                    "name": "海门区",
                                    "regionId": 320614
                                },
                                {
                                    "name": "如东县",
                                    "regionId": 320623
                                },
                                {
                                    "name": "启东市",
                                    "regionId": 320681
                                },
                                {
                                    "name": "如皋市",
                                    "regionId": 320682
                                },
                                {
                                    "name": "海安市",
                                    "regionId": 320685
                                },
                                {
                                    "name": "高新区",
                                    "regionId": 320691
                                }
                            ],
                            "name": "南通市",
                            "regionId": 320600
                        },
                        {
                            "counties": [
                                {
                                    "name": "连云区",
                                    "regionId": 320703
                                },
                                {
                                    "name": "海州区",
                                    "regionId": 320706
                                },
                                {
                                    "name": "赣榆区",
                                    "regionId": 320707
                                },
                                {
                                    "name": "东海县",
                                    "regionId": 320722
                                },
                                {
                                    "name": "灌云县",
                                    "regionId": 320723
                                },
                                {
                                    "name": "灌南县",
                                    "regionId": 320724
                                },
                                {
                                    "name": "连云港经济技术开发区",
                                    "regionId": 320771
                                }
                            ],
                            "name": "连云港市",
                            "regionId": 320700
                        },
                        {
                            "counties": [
                                {
                                    "name": "淮安区",
                                    "regionId": 320803
                                },
                                {
                                    "name": "淮阴区",
                                    "regionId": 320804
                                },
                                {
                                    "name": "清江浦区",
                                    "regionId": 320812
                                },
                                {
                                    "name": "洪泽区",
                                    "regionId": 320813
                                },
                                {
                                    "name": "涟水县",
                                    "regionId": 320826
                                },
                                {
                                    "name": "盱眙县",
                                    "regionId": 320830
                                },
                                {
                                    "name": "金湖县",
                                    "regionId": 320831
                                }
                            ],
                            "name": "淮安市",
                            "regionId": 320800
                        },
                        {
                            "counties": [
                                {
                                    "name": "亭湖区",
                                    "regionId": 320902
                                },
                                {
                                    "name": "盐都区",
                                    "regionId": 320903
                                },
                                {
                                    "name": "大丰区",
                                    "regionId": 320904
                                },
                                {
                                    "name": "响水县",
                                    "regionId": 320921
                                },
                                {
                                    "name": "滨海县",
                                    "regionId": 320922
                                },
                                {
                                    "name": "阜宁县",
                                    "regionId": 320923
                                },
                                {
                                    "name": "射阳县",
                                    "regionId": 320924
                                },
                                {
                                    "name": "建湖县",
                                    "regionId": 320925
                                },
                                {
                                    "name": "盐城经济技术开发区",
                                    "regionId": 320971
                                },
                                {
                                    "name": "东台市",
                                    "regionId": 320981
                                }
                            ],
                            "name": "盐城市",
                            "regionId": 320900
                        },
                        {
                            "counties": [
                                {
                                    "name": "广陵区",
                                    "regionId": 321002
                                },
                                {
                                    "name": "邗江区",
                                    "regionId": 321003
                                },
                                {
                                    "name": "江都区",
                                    "regionId": 321012
                                },
                                {
                                    "name": "宝应县",
                                    "regionId": 321023
                                },
                                {
                                    "name": "扬州经济技术开发区",
                                    "regionId": 321071
                                },
                                {
                                    "name": "仪征市",
                                    "regionId": 321081
                                },
                                {
                                    "name": "高邮市",
                                    "regionId": 321084
                                },
                                {
                                    "name": "经济开发区",
                                    "regionId": 321090
                                }
                            ],
                            "name": "扬州市",
                            "regionId": 321000
                        },
                        {
                            "counties": [
                                {
                                    "name": "京口区",
                                    "regionId": 321102
                                },
                                {
                                    "name": "润州区",
                                    "regionId": 321111
                                },
                                {
                                    "name": "丹徒区",
                                    "regionId": 321112
                                },
                                {
                                    "name": "镇江新区",
                                    "regionId": 321150
                                },
                                {
                                    "name": "丹阳市",
                                    "regionId": 321181
                                },
                                {
                                    "name": "扬中市",
                                    "regionId": 321182
                                },
                                {
                                    "name": "句容市",
                                    "regionId": 321183
                                }
                            ],
                            "name": "镇江市",
                            "regionId": 321100
                        },
                        {
                            "counties": [
                                {
                                    "name": "海陵区",
                                    "regionId": 321202
                                },
                                {
                                    "name": "高港区",
                                    "regionId": 321203
                                },
                                {
                                    "name": "姜堰区",
                                    "regionId": 321204
                                },
                                {
                                    "name": "泰州医药高新技术产业开发区",
                                    "regionId": 321271
                                },
                                {
                                    "name": "兴化市",
                                    "regionId": 321281
                                },
                                {
                                    "name": "靖江市",
                                    "regionId": 321282
                                },
                                {
                                    "name": "泰兴市",
                                    "regionId": 321283
                                }
                            ],
                            "name": "泰州市",
                            "regionId": 321200
                        },
                        {
                            "counties": [
                                {
                                    "name": "宿城区",
                                    "regionId": 321302
                                },
                                {
                                    "name": "宿豫区",
                                    "regionId": 321311
                                },
                                {
                                    "name": "沭阳县",
                                    "regionId": 321322
                                },
                                {
                                    "name": "泗阳县",
                                    "regionId": 321323
                                },
                                {
                                    "name": "泗洪县",
                                    "regionId": 321324
                                },
                                {
                                    "name": "宿迁经济技术开发区",
                                    "regionId": 321371
                                }
                            ],
                            "name": "宿迁市",
                            "regionId": 321300
                        }
                    ],
                    "name": "江苏省",
                    "regionId": 320000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "上城区",
                                    "regionId": 330102
                                },
                                {
                                    "name": "拱墅区",
                                    "regionId": 330105
                                },
                                {
                                    "name": "西湖区",
                                    "regionId": 330106
                                },
                                {
                                    "name": "滨江区",
                                    "regionId": 330108
                                },
                                {
                                    "name": "萧山区",
                                    "regionId": 330109
                                },
                                {
                                    "name": "余杭区",
                                    "regionId": 330110
                                },
                                {
                                    "name": "富阳区",
                                    "regionId": 330111
                                },
                                {
                                    "name": "临安区",
                                    "regionId": 330112
                                },
                                {
                                    "name": "临平区",
                                    "regionId": 330113
                                },
                                {
                                    "name": "钱塘区",
                                    "regionId": 330114
                                },
                                {
                                    "name": "桐庐县",
                                    "regionId": 330122
                                },
                                {
                                    "name": "淳安县",
                                    "regionId": 330127
                                },
                                {
                                    "name": "建德市",
                                    "regionId": 330182
                                }
                            ],
                            "name": "杭州市",
                            "regionId": 330100
                        },
                        {
                            "counties": [
                                {
                                    "name": "海曙区",
                                    "regionId": 330203
                                },
                                {
                                    "name": "江北区",
                                    "regionId": 330205
                                },
                                {
                                    "name": "北仑区",
                                    "regionId": 330206
                                },
                                {
                                    "name": "镇海区",
                                    "regionId": 330211
                                },
                                {
                                    "name": "鄞州区",
                                    "regionId": 330212
                                },
                                {
                                    "name": "奉化区",
                                    "regionId": 330213
                                },
                                {
                                    "name": "象山县",
                                    "regionId": 330225
                                },
                                {
                                    "name": "宁海县",
                                    "regionId": 330226
                                },
                                {
                                    "name": "余姚市",
                                    "regionId": 330281
                                },
                                {
                                    "name": "慈溪市",
                                    "regionId": 330282
                                }
                            ],
                            "name": "宁波市",
                            "regionId": 330200
                        },
                        {
                            "counties": [
                                {
                                    "name": "鹿城区",
                                    "regionId": 330302
                                },
                                {
                                    "name": "龙湾区",
                                    "regionId": 330303
                                },
                                {
                                    "name": "瓯海区",
                                    "regionId": 330304
                                },
                                {
                                    "name": "洞头区",
                                    "regionId": 330305
                                },
                                {
                                    "name": "永嘉县",
                                    "regionId": 330324
                                },
                                {
                                    "name": "平阳县",
                                    "regionId": 330326
                                },
                                {
                                    "name": "苍南县",
                                    "regionId": 330327
                                },
                                {
                                    "name": "文成县",
                                    "regionId": 330328
                                },
                                {
                                    "name": "泰顺县",
                                    "regionId": 330329
                                },
                                {
                                    "name": "瑞安市",
                                    "regionId": 330381
                                },
                                {
                                    "name": "乐清市",
                                    "regionId": 330382
                                },
                                {
                                    "name": "龙港市",
                                    "regionId": 330383
                                }
                            ],
                            "name": "温州市",
                            "regionId": 330300
                        },
                        {
                            "counties": [
                                {
                                    "name": "南湖区",
                                    "regionId": 330402
                                },
                                {
                                    "name": "秀洲区",
                                    "regionId": 330411
                                },
                                {
                                    "name": "嘉善县",
                                    "regionId": 330421
                                },
                                {
                                    "name": "海盐县",
                                    "regionId": 330424
                                },
                                {
                                    "name": "海宁市",
                                    "regionId": 330481
                                },
                                {
                                    "name": "平湖市",
                                    "regionId": 330482
                                },
                                {
                                    "name": "桐乡市",
                                    "regionId": 330483
                                }
                            ],
                            "name": "嘉兴市",
                            "regionId": 330400
                        },
                        {
                            "counties": [
                                {
                                    "name": "吴兴区",
                                    "regionId": 330502
                                },
                                {
                                    "name": "南浔区",
                                    "regionId": 330503
                                },
                                {
                                    "name": "德清县",
                                    "regionId": 330521
                                },
                                {
                                    "name": "长兴县",
                                    "regionId": 330522
                                },
                                {
                                    "name": "安吉县",
                                    "regionId": 330523
                                }
                            ],
                            "name": "湖州市",
                            "regionId": 330500
                        },
                        {
                            "counties": [
                                {
                                    "name": "越城区",
                                    "regionId": 330602
                                },
                                {
                                    "name": "柯桥区",
                                    "regionId": 330603
                                },
                                {
                                    "name": "上虞区",
                                    "regionId": 330604
                                },
                                {
                                    "name": "新昌县",
                                    "regionId": 330624
                                },
                                {
                                    "name": "诸暨市",
                                    "regionId": 330681
                                },
                                {
                                    "name": "嵊州市",
                                    "regionId": 330683
                                }
                            ],
                            "name": "绍兴市",
                            "regionId": 330600
                        },
                        {
                            "counties": [
                                {
                                    "name": "婺城区",
                                    "regionId": 330702
                                },
                                {
                                    "name": "金东区",
                                    "regionId": 330703
                                },
                                {
                                    "name": "武义县",
                                    "regionId": 330723
                                },
                                {
                                    "name": "浦江县",
                                    "regionId": 330726
                                },
                                {
                                    "name": "磐安县",
                                    "regionId": 330727
                                },
                                {
                                    "name": "兰溪市",
                                    "regionId": 330781
                                },
                                {
                                    "name": "义乌市",
                                    "regionId": 330782
                                },
                                {
                                    "name": "东阳市",
                                    "regionId": 330783
                                },
                                {
                                    "name": "永康市",
                                    "regionId": 330784
                                }
                            ],
                            "name": "金华市",
                            "regionId": 330700
                        },
                        {
                            "counties": [
                                {
                                    "name": "柯城区",
                                    "regionId": 330802
                                },
                                {
                                    "name": "衢江区",
                                    "regionId": 330803
                                },
                                {
                                    "name": "常山县",
                                    "regionId": 330822
                                },
                                {
                                    "name": "开化县",
                                    "regionId": 330824
                                },
                                {
                                    "name": "龙游县",
                                    "regionId": 330825
                                },
                                {
                                    "name": "江山市",
                                    "regionId": 330881
                                }
                            ],
                            "name": "衢州市",
                            "regionId": 330800
                        },
                        {
                            "counties": [
                                {
                                    "name": "定海区",
                                    "regionId": 330902
                                },
                                {
                                    "name": "普陀区",
                                    "regionId": 330903
                                },
                                {
                                    "name": "岱山县",
                                    "regionId": 330921
                                },
                                {
                                    "name": "嵊泗县",
                                    "regionId": 330922
                                }
                            ],
                            "name": "舟山市",
                            "regionId": 330900
                        },
                        {
                            "counties": [
                                {
                                    "name": "椒江区",
                                    "regionId": 331002
                                },
                                {
                                    "name": "黄岩区",
                                    "regionId": 331003
                                },
                                {
                                    "name": "路桥区",
                                    "regionId": 331004
                                },
                                {
                                    "name": "三门县",
                                    "regionId": 331022
                                },
                                {
                                    "name": "天台县",
                                    "regionId": 331023
                                },
                                {
                                    "name": "仙居县",
                                    "regionId": 331024
                                },
                                {
                                    "name": "温岭市",
                                    "regionId": 331081
                                },
                                {
                                    "name": "临海市",
                                    "regionId": 331082
                                },
                                {
                                    "name": "玉环市",
                                    "regionId": 331083
                                }
                            ],
                            "name": "台州市",
                            "regionId": 331000
                        },
                        {
                            "counties": [
                                {
                                    "name": "莲都区",
                                    "regionId": 331102
                                },
                                {
                                    "name": "青田县",
                                    "regionId": 331121
                                },
                                {
                                    "name": "缙云县",
                                    "regionId": 331122
                                },
                                {
                                    "name": "遂昌县",
                                    "regionId": 331123
                                },
                                {
                                    "name": "松阳县",
                                    "regionId": 331124
                                },
                                {
                                    "name": "云和县",
                                    "regionId": 331125
                                },
                                {
                                    "name": "庆元县",
                                    "regionId": 331126
                                },
                                {
                                    "name": "景宁畲族自治县",
                                    "regionId": 331127
                                },
                                {
                                    "name": "龙泉市",
                                    "regionId": 331181
                                }
                            ],
                            "name": "丽水市",
                            "regionId": 331100
                        }
                    ],
                    "name": "浙江省",
                    "regionId": 330000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "瑶海区",
                                    "regionId": 340102
                                },
                                {
                                    "name": "庐阳区",
                                    "regionId": 340103
                                },
                                {
                                    "name": "蜀山区",
                                    "regionId": 340104
                                },
                                {
                                    "name": "包河区",
                                    "regionId": 340111
                                },
                                {
                                    "name": "长丰县",
                                    "regionId": 340121
                                },
                                {
                                    "name": "肥东县",
                                    "regionId": 340122
                                },
                                {
                                    "name": "肥西县",
                                    "regionId": 340123
                                },
                                {
                                    "name": "庐江县",
                                    "regionId": 340124
                                },
                                {
                                    "name": "合肥高新技术产业开发区",
                                    "regionId": 340171
                                },
                                {
                                    "name": "合肥经济技术开发区",
                                    "regionId": 340172
                                },
                                {
                                    "name": "合肥新站高新技术产业开发区",
                                    "regionId": 340173
                                },
                                {
                                    "name": "巢湖市",
                                    "regionId": 340181
                                },
                                {
                                    "name": "高新技术开发区",
                                    "regionId": 340190
                                },
                                {
                                    "name": "经济技术开发区",
                                    "regionId": 340191
                                }
                            ],
                            "name": "合肥市",
                            "regionId": 340100
                        },
                        {
                            "counties": [
                                {
                                    "name": "镜湖区",
                                    "regionId": 340202
                                },
                                {
                                    "name": "鸠江区",
                                    "regionId": 340207
                                },
                                {
                                    "name": "弋江区",
                                    "regionId": 340209
                                },
                                {
                                    "name": "湾沚区",
                                    "regionId": 340210
                                },
                                {
                                    "name": "繁昌区",
                                    "regionId": 340212
                                },
                                {
                                    "name": "南陵县",
                                    "regionId": 340223
                                },
                                {
                                    "name": "无为市",
                                    "regionId": 340281
                                }
                            ],
                            "name": "芜湖市",
                            "regionId": 340200
                        },
                        {
                            "counties": [
                                {
                                    "name": "龙子湖区",
                                    "regionId": 340302
                                },
                                {
                                    "name": "蚌山区",
                                    "regionId": 340303
                                },
                                {
                                    "name": "禹会区",
                                    "regionId": 340304
                                },
                                {
                                    "name": "淮上区",
                                    "regionId": 340311
                                },
                                {
                                    "name": "怀远县",
                                    "regionId": 340321
                                },
                                {
                                    "name": "五河县",
                                    "regionId": 340322
                                },
                                {
                                    "name": "固镇县",
                                    "regionId": 340323
                                },
                                {
                                    "name": "蚌埠市高新技术开发区",
                                    "regionId": 340371
                                },
                                {
                                    "name": "蚌埠市经济开发区",
                                    "regionId": 340372
                                }
                            ],
                            "name": "蚌埠市",
                            "regionId": 340300
                        },
                        {
                            "counties": [
                                {
                                    "name": "大通区",
                                    "regionId": 340402
                                },
                                {
                                    "name": "田家庵区",
                                    "regionId": 340403
                                },
                                {
                                    "name": "谢家集区",
                                    "regionId": 340404
                                },
                                {
                                    "name": "八公山区",
                                    "regionId": 340405
                                },
                                {
                                    "name": "潘集区",
                                    "regionId": 340406
                                },
                                {
                                    "name": "凤台县",
                                    "regionId": 340421
                                },
                                {
                                    "name": "寿县",
                                    "regionId": 340422
                                }
                            ],
                            "name": "淮南市",
                            "regionId": 340400
                        },
                        {
                            "counties": [
                                {
                                    "name": "花山区",
                                    "regionId": 340503
                                },
                                {
                                    "name": "雨山区",
                                    "regionId": 340504
                                },
                                {
                                    "name": "博望区",
                                    "regionId": 340506
                                },
                                {
                                    "name": "当涂县",
                                    "regionId": 340521
                                },
                                {
                                    "name": "含山县",
                                    "regionId": 340522
                                },
                                {
                                    "name": "和县",
                                    "regionId": 340523
                                }
                            ],
                            "name": "马鞍山市",
                            "regionId": 340500
                        },
                        {
                            "counties": [
                                {
                                    "name": "杜集区",
                                    "regionId": 340602
                                },
                                {
                                    "name": "相山区",
                                    "regionId": 340603
                                },
                                {
                                    "name": "烈山区",
                                    "regionId": 340604
                                },
                                {
                                    "name": "濉溪县",
                                    "regionId": 340621
                                }
                            ],
                            "name": "淮北市",
                            "regionId": 340600
                        },
                        {
                            "counties": [
                                {
                                    "name": "铜官区",
                                    "regionId": 340705
                                },
                                {
                                    "name": "义安区",
                                    "regionId": 340706
                                },
                                {
                                    "name": "郊区",
                                    "regionId": 340711
                                },
                                {
                                    "name": "枞阳县",
                                    "regionId": 340722
                                }
                            ],
                            "name": "铜陵市",
                            "regionId": 340700
                        },
                        {
                            "counties": [
                                {
                                    "name": "迎江区",
                                    "regionId": 340802
                                },
                                {
                                    "name": "大观区",
                                    "regionId": 340803
                                },
                                {
                                    "name": "宜秀区",
                                    "regionId": 340811
                                },
                                {
                                    "name": "怀宁县",
                                    "regionId": 340822
                                },
                                {
                                    "name": "太湖县",
                                    "regionId": 340825
                                },
                                {
                                    "name": "宿松县",
                                    "regionId": 340826
                                },
                                {
                                    "name": "望江县",
                                    "regionId": 340827
                                },
                                {
                                    "name": "岳西县",
                                    "regionId": 340828
                                },
                                {
                                    "name": "桐城市",
                                    "regionId": 340881
                                },
                                {
                                    "name": "潜山市",
                                    "regionId": 340882
                                }
                            ],
                            "name": "安庆市",
                            "regionId": 340800
                        },
                        {
                            "counties": [
                                {
                                    "name": "屯溪区",
                                    "regionId": 341002
                                },
                                {
                                    "name": "黄山区",
                                    "regionId": 341003
                                },
                                {
                                    "name": "徽州区",
                                    "regionId": 341004
                                },
                                {
                                    "name": "歙县",
                                    "regionId": 341021
                                },
                                {
                                    "name": "休宁县",
                                    "regionId": 341022
                                },
                                {
                                    "name": "黟县",
                                    "regionId": 341023
                                },
                                {
                                    "name": "祁门县",
                                    "regionId": 341024
                                }
                            ],
                            "name": "黄山市",
                            "regionId": 341000
                        },
                        {
                            "counties": [
                                {
                                    "name": "琅琊区",
                                    "regionId": 341102
                                },
                                {
                                    "name": "南谯区",
                                    "regionId": 341103
                                },
                                {
                                    "name": "来安县",
                                    "regionId": 341122
                                },
                                {
                                    "name": "全椒县",
                                    "regionId": 341124
                                },
                                {
                                    "name": "定远县",
                                    "regionId": 341125
                                },
                                {
                                    "name": "凤阳县",
                                    "regionId": 341126
                                },
                                {
                                    "name": "天长市",
                                    "regionId": 341181
                                },
                                {
                                    "name": "明光市",
                                    "regionId": 341182
                                }
                            ],
                            "name": "滁州市",
                            "regionId": 341100
                        },
                        {
                            "counties": [
                                {
                                    "name": "颍州区",
                                    "regionId": 341202
                                },
                                {
                                    "name": "颍东区",
                                    "regionId": 341203
                                },
                                {
                                    "name": "颍泉区",
                                    "regionId": 341204
                                },
                                {
                                    "name": "临泉县",
                                    "regionId": 341221
                                },
                                {
                                    "name": "太和县",
                                    "regionId": 341222
                                },
                                {
                                    "name": "阜南县",
                                    "regionId": 341225
                                },
                                {
                                    "name": "颍上县",
                                    "regionId": 341226
                                },
                                {
                                    "name": "阜阳合肥现代产业园区",
                                    "regionId": 341271
                                },
                                {
                                    "name": "界首市",
                                    "regionId": 341282
                                }
                            ],
                            "name": "阜阳市",
                            "regionId": 341200
                        },
                        {
                            "counties": [
                                {
                                    "name": "埇桥区",
                                    "regionId": 341302
                                },
                                {
                                    "name": "砀山县",
                                    "regionId": 341321
                                },
                                {
                                    "name": "萧县",
                                    "regionId": 341322
                                },
                                {
                                    "name": "灵璧县",
                                    "regionId": 341323
                                },
                                {
                                    "name": "泗县",
                                    "regionId": 341324
                                },
                                {
                                    "name": "宿州马鞍山现代产业园区",
                                    "regionId": 341371
                                },
                                {
                                    "name": "宿州经济技术开发区",
                                    "regionId": 341372
                                },
                                {
                                    "name": "经济开发区",
                                    "regionId": 341390
                                }
                            ],
                            "name": "宿州市",
                            "regionId": 341300
                        },
                        {
                            "counties": [
                                {
                                    "name": "金安区",
                                    "regionId": 341502
                                },
                                {
                                    "name": "裕安区",
                                    "regionId": 341503
                                },
                                {
                                    "name": "叶集区",
                                    "regionId": 341504
                                },
                                {
                                    "name": "霍邱县",
                                    "regionId": 341522
                                },
                                {
                                    "name": "舒城县",
                                    "regionId": 341523
                                },
                                {
                                    "name": "金寨县",
                                    "regionId": 341524
                                },
                                {
                                    "name": "霍山县",
                                    "regionId": 341525
                                }
                            ],
                            "name": "六安市",
                            "regionId": 341500
                        },
                        {
                            "counties": [
                                {
                                    "name": "谯城区",
                                    "regionId": 341602
                                },
                                {
                                    "name": "涡阳县",
                                    "regionId": 341621
                                },
                                {
                                    "name": "蒙城县",
                                    "regionId": 341622
                                },
                                {
                                    "name": "利辛县",
                                    "regionId": 341623
                                }
                            ],
                            "name": "亳州市",
                            "regionId": 341600
                        },
                        {
                            "counties": [
                                {
                                    "name": "贵池区",
                                    "regionId": 341702
                                },
                                {
                                    "name": "东至县",
                                    "regionId": 341721
                                },
                                {
                                    "name": "石台县",
                                    "regionId": 341722
                                },
                                {
                                    "name": "青阳县",
                                    "regionId": 341723
                                }
                            ],
                            "name": "池州市",
                            "regionId": 341700
                        },
                        {
                            "counties": [
                                {
                                    "name": "宣州区",
                                    "regionId": 341802
                                },
                                {
                                    "name": "郎溪县",
                                    "regionId": 341821
                                },
                                {
                                    "name": "泾县",
                                    "regionId": 341823
                                },
                                {
                                    "name": "绩溪县",
                                    "regionId": 341824
                                },
                                {
                                    "name": "旌德县",
                                    "regionId": 341825
                                },
                                {
                                    "name": "宣城市经济开发区",
                                    "regionId": 341871
                                },
                                {
                                    "name": "宁国市",
                                    "regionId": 341881
                                },
                                {
                                    "name": "广德市",
                                    "regionId": 341882
                                }
                            ],
                            "name": "宣城市",
                            "regionId": 341800
                        }
                    ],
                    "name": "安徽省",
                    "regionId": 340000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "东湖区",
                                    "regionId": 360102
                                },
                                {
                                    "name": "西湖区",
                                    "regionId": 360103
                                },
                                {
                                    "name": "青云谱区",
                                    "regionId": 360104
                                },
                                {
                                    "name": "青山湖区",
                                    "regionId": 360111
                                },
                                {
                                    "name": "新建区",
                                    "regionId": 360112
                                },
                                {
                                    "name": "红谷滩区",
                                    "regionId": 360113
                                },
                                {
                                    "name": "南昌县",
                                    "regionId": 360121
                                },
                                {
                                    "name": "安义县",
                                    "regionId": 360123
                                },
                                {
                                    "name": "进贤县",
                                    "regionId": 360124
                                },
                                {
                                    "name": "经济技术开发区",
                                    "regionId": 360190
                                },
                                {
                                    "name": "高新区",
                                    "regionId": 360192
                                }
                            ],
                            "name": "南昌市",
                            "regionId": 360100
                        },
                        {
                            "counties": [
                                {
                                    "name": "昌江区",
                                    "regionId": 360202
                                },
                                {
                                    "name": "珠山区",
                                    "regionId": 360203
                                },
                                {
                                    "name": "浮梁县",
                                    "regionId": 360222
                                },
                                {
                                    "name": "乐平市",
                                    "regionId": 360281
                                }
                            ],
                            "name": "景德镇市",
                            "regionId": 360200
                        },
                        {
                            "counties": [
                                {
                                    "name": "安源区",
                                    "regionId": 360302
                                },
                                {
                                    "name": "湘东区",
                                    "regionId": 360313
                                },
                                {
                                    "name": "莲花县",
                                    "regionId": 360321
                                },
                                {
                                    "name": "上栗县",
                                    "regionId": 360322
                                },
                                {
                                    "name": "芦溪县",
                                    "regionId": 360323
                                }
                            ],
                            "name": "萍乡市",
                            "regionId": 360300
                        },
                        {
                            "counties": [
                                {
                                    "name": "濂溪区",
                                    "regionId": 360402
                                },
                                {
                                    "name": "浔阳区",
                                    "regionId": 360403
                                },
                                {
                                    "name": "柴桑区",
                                    "regionId": 360404
                                },
                                {
                                    "name": "武宁县",
                                    "regionId": 360423
                                },
                                {
                                    "name": "修水县",
                                    "regionId": 360424
                                },
                                {
                                    "name": "永修县",
                                    "regionId": 360425
                                },
                                {
                                    "name": "德安县",
                                    "regionId": 360426
                                },
                                {
                                    "name": "都昌县",
                                    "regionId": 360428
                                },
                                {
                                    "name": "湖口县",
                                    "regionId": 360429
                                },
                                {
                                    "name": "彭泽县",
                                    "regionId": 360430
                                },
                                {
                                    "name": "瑞昌市",
                                    "regionId": 360481
                                },
                                {
                                    "name": "共青城市",
                                    "regionId": 360482
                                },
                                {
                                    "name": "庐山市",
                                    "regionId": 360483
                                },
                                {
                                    "name": "经济技术开发区",
                                    "regionId": 360490
                                }
                            ],
                            "name": "九江市",
                            "regionId": 360400
                        },
                        {
                            "counties": [
                                {
                                    "name": "渝水区",
                                    "regionId": 360502
                                },
                                {
                                    "name": "分宜县",
                                    "regionId": 360521
                                }
                            ],
                            "name": "新余市",
                            "regionId": 360500
                        },
                        {
                            "counties": [
                                {
                                    "name": "月湖区",
                                    "regionId": 360602
                                },
                                {
                                    "name": "余江区",
                                    "regionId": 360603
                                },
                                {
                                    "name": "贵溪市",
                                    "regionId": 360681
                                }
                            ],
                            "name": "鹰潭市",
                            "regionId": 360600
                        },
                        {
                            "counties": [
                                {
                                    "name": "章贡区",
                                    "regionId": 360702
                                },
                                {
                                    "name": "南康区",
                                    "regionId": 360703
                                },
                                {
                                    "name": "赣县区",
                                    "regionId": 360704
                                },
                                {
                                    "name": "信丰县",
                                    "regionId": 360722
                                },
                                {
                                    "name": "大余县",
                                    "regionId": 360723
                                },
                                {
                                    "name": "上犹县",
                                    "regionId": 360724
                                },
                                {
                                    "name": "崇义县",
                                    "regionId": 360725
                                },
                                {
                                    "name": "安远县",
                                    "regionId": 360726
                                },
                                {
                                    "name": "定南县",
                                    "regionId": 360728
                                },
                                {
                                    "name": "全南县",
                                    "regionId": 360729
                                },
                                {
                                    "name": "宁都县",
                                    "regionId": 360730
                                },
                                {
                                    "name": "于都县",
                                    "regionId": 360731
                                },
                                {
                                    "name": "兴国县",
                                    "regionId": 360732
                                },
                                {
                                    "name": "会昌县",
                                    "regionId": 360733
                                },
                                {
                                    "name": "寻乌县",
                                    "regionId": 360734
                                },
                                {
                                    "name": "石城县",
                                    "regionId": 360735
                                },
                                {
                                    "name": "瑞金市",
                                    "regionId": 360781
                                },
                                {
                                    "name": "龙南市",
                                    "regionId": 360783
                                }
                            ],
                            "name": "赣州市",
                            "regionId": 360700
                        },
                        {
                            "counties": [
                                {
                                    "name": "吉州区",
                                    "regionId": 360802
                                },
                                {
                                    "name": "青原区",
                                    "regionId": 360803
                                },
                                {
                                    "name": "吉安县",
                                    "regionId": 360821
                                },
                                {
                                    "name": "吉水县",
                                    "regionId": 360822
                                },
                                {
                                    "name": "峡江县",
                                    "regionId": 360823
                                },
                                {
                                    "name": "新干县",
                                    "regionId": 360824
                                },
                                {
                                    "name": "永丰县",
                                    "regionId": 360825
                                },
                                {
                                    "name": "泰和县",
                                    "regionId": 360826
                                },
                                {
                                    "name": "遂川县",
                                    "regionId": 360827
                                },
                                {
                                    "name": "万安县",
                                    "regionId": 360828
                                },
                                {
                                    "name": "安福县",
                                    "regionId": 360829
                                },
                                {
                                    "name": "永新县",
                                    "regionId": 360830
                                },
                                {
                                    "name": "井冈山市",
                                    "regionId": 360881
                                }
                            ],
                            "name": "吉安市",
                            "regionId": 360800
                        },
                        {
                            "counties": [
                                {
                                    "name": "袁州区",
                                    "regionId": 360902
                                },
                                {
                                    "name": "奉新县",
                                    "regionId": 360921
                                },
                                {
                                    "name": "万载县",
                                    "regionId": 360922
                                },
                                {
                                    "name": "上高县",
                                    "regionId": 360923
                                },
                                {
                                    "name": "宜丰县",
                                    "regionId": 360924
                                },
                                {
                                    "name": "靖安县",
                                    "regionId": 360925
                                },
                                {
                                    "name": "铜鼓县",
                                    "regionId": 360926
                                },
                                {
                                    "name": "丰城市",
                                    "regionId": 360981
                                },
                                {
                                    "name": "樟树市",
                                    "regionId": 360982
                                },
                                {
                                    "name": "高安市",
                                    "regionId": 360983
                                }
                            ],
                            "name": "宜春市",
                            "regionId": 360900
                        },
                        {
                            "counties": [
                                {
                                    "name": "临川区",
                                    "regionId": 361002
                                },
                                {
                                    "name": "东乡区",
                                    "regionId": 361003
                                },
                                {
                                    "name": "南城县",
                                    "regionId": 361021
                                },
                                {
                                    "name": "黎川县",
                                    "regionId": 361022
                                },
                                {
                                    "name": "南丰县",
                                    "regionId": 361023
                                },
                                {
                                    "name": "崇仁县",
                                    "regionId": 361024
                                },
                                {
                                    "name": "乐安县",
                                    "regionId": 361025
                                },
                                {
                                    "name": "宜黄县",
                                    "regionId": 361026
                                },
                                {
                                    "name": "金溪县",
                                    "regionId": 361027
                                },
                                {
                                    "name": "资溪县",
                                    "regionId": 361028
                                },
                                {
                                    "name": "广昌县",
                                    "regionId": 361030
                                }
                            ],
                            "name": "抚州市",
                            "regionId": 361000
                        },
                        {
                            "counties": [
                                {
                                    "name": "信州区",
                                    "regionId": 361102
                                },
                                {
                                    "name": "广丰区",
                                    "regionId": 361103
                                },
                                {
                                    "name": "广信区",
                                    "regionId": 361104
                                },
                                {
                                    "name": "玉山县",
                                    "regionId": 361123
                                },
                                {
                                    "name": "铅山县",
                                    "regionId": 361124
                                },
                                {
                                    "name": "横峰县",
                                    "regionId": 361125
                                },
                                {
                                    "name": "弋阳县",
                                    "regionId": 361126
                                },
                                {
                                    "name": "余干县",
                                    "regionId": 361127
                                },
                                {
                                    "name": "鄱阳县",
                                    "regionId": 361128
                                },
                                {
                                    "name": "万年县",
                                    "regionId": 361129
                                },
                                {
                                    "name": "婺源县",
                                    "regionId": 361130
                                },
                                {
                                    "name": "德兴市",
                                    "regionId": 361181
                                }
                            ],
                            "name": "上饶市",
                            "regionId": 361100
                        }
                    ],
                    "name": "江西省",
                    "regionId": 360000
                }
            ]
        },
        {
            "api": 2,
            "part": "华中",
            "provinces": [
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "中原区",
                                    "regionId": 410102
                                },
                                {
                                    "name": "二七区",
                                    "regionId": 410103
                                },
                                {
                                    "name": "管城回族区",
                                    "regionId": 410104
                                },
                                {
                                    "name": "金水区",
                                    "regionId": 410105
                                },
                                {
                                    "name": "上街区",
                                    "regionId": 410106
                                },
                                {
                                    "name": "惠济区",
                                    "regionId": 410108
                                },
                                {
                                    "name": "中牟县",
                                    "regionId": 410122
                                },
                                {
                                    "name": "郑州经济技术开发区",
                                    "regionId": 410171
                                },
                                {
                                    "name": "郑州高新技术产业开发区",
                                    "regionId": 410172
                                },
                                {
                                    "name": "郑州航空港经济综合实验区",
                                    "regionId": 410173
                                },
                                {
                                    "name": "巩义市",
                                    "regionId": 410181
                                },
                                {
                                    "name": "荥阳市",
                                    "regionId": 410182
                                },
                                {
                                    "name": "新密市",
                                    "regionId": 410183
                                },
                                {
                                    "name": "新郑市",
                                    "regionId": 410184
                                },
                                {
                                    "name": "登封市",
                                    "regionId": 410185
                                },
                                {
                                    "name": "高新技术开发区",
                                    "regionId": 410190
                                },
                                {
                                    "name": "经济技术开发区",
                                    "regionId": 410191
                                }
                            ],
                            "name": "郑州市",
                            "regionId": 410100
                        },
                        {
                            "counties": [
                                {
                                    "name": "龙亭区",
                                    "regionId": 410202
                                },
                                {
                                    "name": "顺河回族区",
                                    "regionId": 410203
                                },
                                {
                                    "name": "鼓楼区",
                                    "regionId": 410204
                                },
                                {
                                    "name": "禹王台区",
                                    "regionId": 410205
                                },
                                {
                                    "name": "祥符区",
                                    "regionId": 410212
                                },
                                {
                                    "name": "杞县",
                                    "regionId": 410221
                                },
                                {
                                    "name": "通许县",
                                    "regionId": 410222
                                },
                                {
                                    "name": "尉氏县",
                                    "regionId": 410223
                                },
                                {
                                    "name": "兰考县",
                                    "regionId": 410225
                                }
                            ],
                            "name": "开封市",
                            "regionId": 410200
                        },
                        {
                            "counties": [
                                {
                                    "name": "老城区",
                                    "regionId": 410302
                                },
                                {
                                    "name": "西工区",
                                    "regionId": 410303
                                },
                                {
                                    "name": "瀍河回族区",
                                    "regionId": 410304
                                },
                                {
                                    "name": "涧西区",
                                    "regionId": 410305
                                },
                                {
                                    "name": "吉利区",
                                    "regionId": 410306
                                },
                                {
                                    "name": "偃师区",
                                    "regionId": 410307
                                },
                                {
                                    "name": "孟津区",
                                    "regionId": 410308
                                },
                                {
                                    "name": "洛龙区",
                                    "regionId": 410311
                                },
                                {
                                    "name": "新安县",
                                    "regionId": 410323
                                },
                                {
                                    "name": "栾川县",
                                    "regionId": 410324
                                },
                                {
                                    "name": "嵩县",
                                    "regionId": 410325
                                },
                                {
                                    "name": "汝阳县",
                                    "regionId": 410326
                                },
                                {
                                    "name": "宜阳县",
                                    "regionId": 410327
                                },
                                {
                                    "name": "洛宁县",
                                    "regionId": 410328
                                },
                                {
                                    "name": "伊川县",
                                    "regionId": 410329
                                }
                            ],
                            "name": "洛阳市",
                            "regionId": 410300
                        },
                        {
                            "counties": [
                                {
                                    "name": "新华区",
                                    "regionId": 410402
                                },
                                {
                                    "name": "卫东区",
                                    "regionId": 410403
                                },
                                {
                                    "name": "石龙区",
                                    "regionId": 410404
                                },
                                {
                                    "name": "湛河区",
                                    "regionId": 410411
                                },
                                {
                                    "name": "宝丰县",
                                    "regionId": 410421
                                },
                                {
                                    "name": "叶县",
                                    "regionId": 410422
                                },
                                {
                                    "name": "鲁山县",
                                    "regionId": 410423
                                },
                                {
                                    "name": "郏县",
                                    "regionId": 410425
                                },
                                {
                                    "name": "平顶山高新技术产业开发区",
                                    "regionId": 410471
                                },
                                {
                                    "name": "舞钢市",
                                    "regionId": 410481
                                },
                                {
                                    "name": "汝州市",
                                    "regionId": 410482
                                }
                            ],
                            "name": "平顶山市",
                            "regionId": 410400
                        },
                        {
                            "counties": [
                                {
                                    "name": "文峰区",
                                    "regionId": 410502
                                },
                                {
                                    "name": "北关区",
                                    "regionId": 410503
                                },
                                {
                                    "name": "殷都区",
                                    "regionId": 410505
                                },
                                {
                                    "name": "龙安区",
                                    "regionId": 410506
                                },
                                {
                                    "name": "安阳县",
                                    "regionId": 410522
                                },
                                {
                                    "name": "汤阴县",
                                    "regionId": 410523
                                },
                                {
                                    "name": "滑县",
                                    "regionId": 410526
                                },
                                {
                                    "name": "内黄县",
                                    "regionId": 410527
                                },
                                {
                                    "name": "林州市",
                                    "regionId": 410581
                                },
                                {
                                    "name": "开发区",
                                    "regionId": 410590
                                }
                            ],
                            "name": "安阳市",
                            "regionId": 410500
                        },
                        {
                            "counties": [
                                {
                                    "name": "鹤山区",
                                    "regionId": 410602
                                },
                                {
                                    "name": "山城区",
                                    "regionId": 410603
                                },
                                {
                                    "name": "淇滨区",
                                    "regionId": 410611
                                },
                                {
                                    "name": "浚县",
                                    "regionId": 410621
                                },
                                {
                                    "name": "淇县",
                                    "regionId": 410622
                                }
                            ],
                            "name": "鹤壁市",
                            "regionId": 410600
                        },
                        {
                            "counties": [
                                {
                                    "name": "红旗区",
                                    "regionId": 410702
                                },
                                {
                                    "name": "卫滨区",
                                    "regionId": 410703
                                },
                                {
                                    "name": "凤泉区",
                                    "regionId": 410704
                                },
                                {
                                    "name": "牧野区",
                                    "regionId": 410711
                                },
                                {
                                    "name": "新乡县",
                                    "regionId": 410721
                                },
                                {
                                    "name": "获嘉县",
                                    "regionId": 410724
                                },
                                {
                                    "name": "原阳县",
                                    "regionId": 410725
                                },
                                {
                                    "name": "延津县",
                                    "regionId": 410726
                                },
                                {
                                    "name": "封丘县",
                                    "regionId": 410727
                                },
                                {
                                    "name": "新乡高新技术产业开发区",
                                    "regionId": 410771
                                },
                                {
                                    "name": "新乡经济技术开发区",
                                    "regionId": 410772
                                },
                                {
                                    "name": "卫辉市",
                                    "regionId": 410781
                                },
                                {
                                    "name": "辉县市",
                                    "regionId": 410782
                                },
                                {
                                    "name": "长垣市",
                                    "regionId": 410783
                                }
                            ],
                            "name": "新乡市",
                            "regionId": 410700
                        },
                        {
                            "counties": [
                                {
                                    "name": "解放区",
                                    "regionId": 410802
                                },
                                {
                                    "name": "中站区",
                                    "regionId": 410803
                                },
                                {
                                    "name": "马村区",
                                    "regionId": 410804
                                },
                                {
                                    "name": "山阳区",
                                    "regionId": 410811
                                },
                                {
                                    "name": "修武县",
                                    "regionId": 410821
                                },
                                {
                                    "name": "博爱县",
                                    "regionId": 410822
                                },
                                {
                                    "name": "武陟县",
                                    "regionId": 410823
                                },
                                {
                                    "name": "温县",
                                    "regionId": 410825
                                },
                                {
                                    "name": "焦作城乡一体化示范区",
                                    "regionId": 410871
                                },
                                {
                                    "name": "沁阳市",
                                    "regionId": 410882
                                },
                                {
                                    "name": "孟州市",
                                    "regionId": 410883
                                }
                            ],
                            "name": "焦作市",
                            "regionId": 410800
                        },
                        {
                            "counties": [
                                {
                                    "name": "华龙区",
                                    "regionId": 410902
                                },
                                {
                                    "name": "清丰县",
                                    "regionId": 410922
                                },
                                {
                                    "name": "南乐县",
                                    "regionId": 410923
                                },
                                {
                                    "name": "范县",
                                    "regionId": 410926
                                },
                                {
                                    "name": "台前县",
                                    "regionId": 410927
                                },
                                {
                                    "name": "濮阳县",
                                    "regionId": 410928
                                },
                                {
                                    "name": "河南濮阳工业园区",
                                    "regionId": 410971
                                }
                            ],
                            "name": "濮阳市",
                            "regionId": 410900
                        },
                        {
                            "counties": [
                                {
                                    "name": "魏都区",
                                    "regionId": 411002
                                },
                                {
                                    "name": "建安区",
                                    "regionId": 411003
                                },
                                {
                                    "name": "鄢陵县",
                                    "regionId": 411024
                                },
                                {
                                    "name": "襄城县",
                                    "regionId": 411025
                                },
                                {
                                    "name": "许昌经济技术开发区",
                                    "regionId": 411071
                                },
                                {
                                    "name": "禹州市",
                                    "regionId": 411081
                                },
                                {
                                    "name": "长葛市",
                                    "regionId": 411082
                                }
                            ],
                            "name": "许昌市",
                            "regionId": 411000
                        },
                        {
                            "counties": [
                                {
                                    "name": "源汇区",
                                    "regionId": 411102
                                },
                                {
                                    "name": "郾城区",
                                    "regionId": 411103
                                },
                                {
                                    "name": "召陵区",
                                    "regionId": 411104
                                },
                                {
                                    "name": "舞阳县",
                                    "regionId": 411121
                                },
                                {
                                    "name": "临颍县",
                                    "regionId": 411122
                                },
                                {
                                    "name": "漯河经济技术开发区",
                                    "regionId": 411171
                                }
                            ],
                            "name": "漯河市",
                            "regionId": 411100
                        },
                        {
                            "counties": [
                                {
                                    "name": "湖滨区",
                                    "regionId": 411202
                                },
                                {
                                    "name": "陕州区",
                                    "regionId": 411203
                                },
                                {
                                    "name": "渑池县",
                                    "regionId": 411221
                                },
                                {
                                    "name": "卢氏县",
                                    "regionId": 411224
                                },
                                {
                                    "name": "河南三门峡经济开发区",
                                    "regionId": 411271
                                },
                                {
                                    "name": "义马市",
                                    "regionId": 411281
                                },
                                {
                                    "name": "灵宝市",
                                    "regionId": 411282
                                }
                            ],
                            "name": "三门峡市",
                            "regionId": 411200
                        },
                        {
                            "counties": [
                                {
                                    "name": "宛城区",
                                    "regionId": 411302
                                },
                                {
                                    "name": "卧龙区",
                                    "regionId": 411303
                                },
                                {
                                    "name": "南召县",
                                    "regionId": 411321
                                },
                                {
                                    "name": "方城县",
                                    "regionId": 411322
                                },
                                {
                                    "name": "西峡县",
                                    "regionId": 411323
                                },
                                {
                                    "name": "镇平县",
                                    "regionId": 411324
                                },
                                {
                                    "name": "内乡县",
                                    "regionId": 411325
                                },
                                {
                                    "name": "淅川县",
                                    "regionId": 411326
                                },
                                {
                                    "name": "社旗县",
                                    "regionId": 411327
                                },
                                {
                                    "name": "唐河县",
                                    "regionId": 411328
                                },
                                {
                                    "name": "新野县",
                                    "regionId": 411329
                                },
                                {
                                    "name": "桐柏县",
                                    "regionId": 411330
                                },
                                {
                                    "name": "南阳市城乡一体化示范区",
                                    "regionId": 411372
                                },
                                {
                                    "name": "邓州市",
                                    "regionId": 411381
                                }
                            ],
                            "name": "南阳市",
                            "regionId": 411300
                        },
                        {
                            "counties": [
                                {
                                    "name": "梁园区",
                                    "regionId": 411402
                                },
                                {
                                    "name": "睢阳区",
                                    "regionId": 411403
                                },
                                {
                                    "name": "民权县",
                                    "regionId": 411421
                                },
                                {
                                    "name": "睢县",
                                    "regionId": 411422
                                },
                                {
                                    "name": "宁陵县",
                                    "regionId": 411423
                                },
                                {
                                    "name": "柘城县",
                                    "regionId": 411424
                                },
                                {
                                    "name": "虞城县",
                                    "regionId": 411425
                                },
                                {
                                    "name": "夏邑县",
                                    "regionId": 411426
                                },
                                {
                                    "name": "永城市",
                                    "regionId": 411481
                                }
                            ],
                            "name": "商丘市",
                            "regionId": 411400
                        },
                        {
                            "counties": [
                                {
                                    "name": "浉河区",
                                    "regionId": 411502
                                },
                                {
                                    "name": "平桥区",
                                    "regionId": 411503
                                },
                                {
                                    "name": "罗山县",
                                    "regionId": 411521
                                },
                                {
                                    "name": "光山县",
                                    "regionId": 411522
                                },
                                {
                                    "name": "新县",
                                    "regionId": 411523
                                },
                                {
                                    "name": "商城县",
                                    "regionId": 411524
                                },
                                {
                                    "name": "固始县",
                                    "regionId": 411525
                                },
                                {
                                    "name": "潢川县",
                                    "regionId": 411526
                                },
                                {
                                    "name": "淮滨县",
                                    "regionId": 411527
                                },
                                {
                                    "name": "息县",
                                    "regionId": 411528
                                }
                            ],
                            "name": "信阳市",
                            "regionId": 411500
                        },
                        {
                            "counties": [
                                {
                                    "name": "川汇区",
                                    "regionId": 411602
                                },
                                {
                                    "name": "淮阳区",
                                    "regionId": 411603
                                },
                                {
                                    "name": "扶沟县",
                                    "regionId": 411621
                                },
                                {
                                    "name": "西华县",
                                    "regionId": 411622
                                },
                                {
                                    "name": "商水县",
                                    "regionId": 411623
                                },
                                {
                                    "name": "沈丘县",
                                    "regionId": 411624
                                },
                                {
                                    "name": "郸城县",
                                    "regionId": 411625
                                },
                                {
                                    "name": "太康县",
                                    "regionId": 411627
                                },
                                {
                                    "name": "鹿邑县",
                                    "regionId": 411628
                                },
                                {
                                    "name": "河南周口经济开发区",
                                    "regionId": 411671
                                },
                                {
                                    "name": "项城市",
                                    "regionId": 411681
                                },
                                {
                                    "name": "经济开发区",
                                    "regionId": 411690
                                }
                            ],
                            "name": "周口市",
                            "regionId": 411600
                        },
                        {
                            "counties": [
                                {
                                    "name": "驿城区",
                                    "regionId": 411702
                                },
                                {
                                    "name": "西平县",
                                    "regionId": 411721
                                },
                                {
                                    "name": "上蔡县",
                                    "regionId": 411722
                                },
                                {
                                    "name": "平舆县",
                                    "regionId": 411723
                                },
                                {
                                    "name": "正阳县",
                                    "regionId": 411724
                                },
                                {
                                    "name": "确山县",
                                    "regionId": 411725
                                },
                                {
                                    "name": "泌阳县",
                                    "regionId": 411726
                                },
                                {
                                    "name": "汝南县",
                                    "regionId": 411727
                                },
                                {
                                    "name": "遂平县",
                                    "regionId": 411728
                                },
                                {
                                    "name": "新蔡县",
                                    "regionId": 411729
                                }
                            ],
                            "name": "驻马店市",
                            "regionId": 411700
                        },
                        {
                            "counties": [
                                {
                                    "name": "济源市",
                                    "regionId": 419001
                                }
                            ],
                            "name": "省直辖县",
                            "regionId": 419000
                        }
                    ],
                    "name": "河南省",
                    "regionId": 410000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "江岸区",
                                    "regionId": 420102
                                },
                                {
                                    "name": "江汉区",
                                    "regionId": 420103
                                },
                                {
                                    "name": "硚口区",
                                    "regionId": 420104
                                },
                                {
                                    "name": "汉阳区",
                                    "regionId": 420105
                                },
                                {
                                    "name": "武昌区",
                                    "regionId": 420106
                                },
                                {
                                    "name": "青山区",
                                    "regionId": 420107
                                },
                                {
                                    "name": "洪山区",
                                    "regionId": 420111
                                },
                                {
                                    "name": "东西湖区",
                                    "regionId": 420112
                                },
                                {
                                    "name": "汉南区",
                                    "regionId": 420113
                                },
                                {
                                    "name": "蔡甸区",
                                    "regionId": 420114
                                },
                                {
                                    "name": "江夏区",
                                    "regionId": 420115
                                },
                                {
                                    "name": "黄陂区",
                                    "regionId": 420116
                                },
                                {
                                    "name": "新洲区",
                                    "regionId": 420117
                                }
                            ],
                            "name": "武汉市",
                            "regionId": 420100
                        },
                        {
                            "counties": [
                                {
                                    "name": "黄石港区",
                                    "regionId": 420202
                                },
                                {
                                    "name": "西塞山区",
                                    "regionId": 420203
                                },
                                {
                                    "name": "下陆区",
                                    "regionId": 420204
                                },
                                {
                                    "name": "铁山区",
                                    "regionId": 420205
                                },
                                {
                                    "name": "阳新县",
                                    "regionId": 420222
                                },
                                {
                                    "name": "大冶市",
                                    "regionId": 420281
                                }
                            ],
                            "name": "黄石市",
                            "regionId": 420200
                        },
                        {
                            "counties": [
                                {
                                    "name": "茅箭区",
                                    "regionId": 420302
                                },
                                {
                                    "name": "张湾区",
                                    "regionId": 420303
                                },
                                {
                                    "name": "郧阳区",
                                    "regionId": 420304
                                },
                                {
                                    "name": "郧西县",
                                    "regionId": 420322
                                },
                                {
                                    "name": "竹山县",
                                    "regionId": 420323
                                },
                                {
                                    "name": "竹溪县",
                                    "regionId": 420324
                                },
                                {
                                    "name": "房县",
                                    "regionId": 420325
                                },
                                {
                                    "name": "丹江口市",
                                    "regionId": 420381
                                }
                            ],
                            "name": "十堰市",
                            "regionId": 420300
                        },
                        {
                            "counties": [
                                {
                                    "name": "西陵区",
                                    "regionId": 420502
                                },
                                {
                                    "name": "伍家岗区",
                                    "regionId": 420503
                                },
                                {
                                    "name": "点军区",
                                    "regionId": 420504
                                },
                                {
                                    "name": "猇亭区",
                                    "regionId": 420505
                                },
                                {
                                    "name": "夷陵区",
                                    "regionId": 420506
                                },
                                {
                                    "name": "远安县",
                                    "regionId": 420525
                                },
                                {
                                    "name": "兴山县",
                                    "regionId": 420526
                                },
                                {
                                    "name": "秭归县",
                                    "regionId": 420527
                                },
                                {
                                    "name": "长阳土家族自治县",
                                    "regionId": 420528
                                },
                                {
                                    "name": "五峰土家族自治县",
                                    "regionId": 420529
                                },
                                {
                                    "name": "宜都市",
                                    "regionId": 420581
                                },
                                {
                                    "name": "当阳市",
                                    "regionId": 420582
                                },
                                {
                                    "name": "枝江市",
                                    "regionId": 420583
                                },
                                {
                                    "name": "经济开发区",
                                    "regionId": 420590
                                }
                            ],
                            "name": "宜昌市",
                            "regionId": 420500
                        },
                        {
                            "counties": [
                                {
                                    "name": "襄城区",
                                    "regionId": 420602
                                },
                                {
                                    "name": "樊城区",
                                    "regionId": 420606
                                },
                                {
                                    "name": "襄州区",
                                    "regionId": 420607
                                },
                                {
                                    "name": "南漳县",
                                    "regionId": 420624
                                },
                                {
                                    "name": "谷城县",
                                    "regionId": 420625
                                },
                                {
                                    "name": "保康县",
                                    "regionId": 420626
                                },
                                {
                                    "name": "老河口市",
                                    "regionId": 420682
                                },
                                {
                                    "name": "枣阳市",
                                    "regionId": 420683
                                },
                                {
                                    "name": "宜城市",
                                    "regionId": 420684
                                }
                            ],
                            "name": "襄阳市",
                            "regionId": 420600
                        },
                        {
                            "counties": [
                                {
                                    "name": "梁子湖区",
                                    "regionId": 420702
                                },
                                {
                                    "name": "华容区",
                                    "regionId": 420703
                                },
                                {
                                    "name": "鄂城区",
                                    "regionId": 420704
                                }
                            ],
                            "name": "鄂州市",
                            "regionId": 420700
                        },
                        {
                            "counties": [
                                {
                                    "name": "东宝区",
                                    "regionId": 420802
                                },
                                {
                                    "name": "掇刀区",
                                    "regionId": 420804
                                },
                                {
                                    "name": "沙洋县",
                                    "regionId": 420822
                                },
                                {
                                    "name": "钟祥市",
                                    "regionId": 420881
                                },
                                {
                                    "name": "京山市",
                                    "regionId": 420882
                                }
                            ],
                            "name": "荆门市",
                            "regionId": 420800
                        },
                        {
                            "counties": [
                                {
                                    "name": "孝南区",
                                    "regionId": 420902
                                },
                                {
                                    "name": "孝昌县",
                                    "regionId": 420921
                                },
                                {
                                    "name": "大悟县",
                                    "regionId": 420922
                                },
                                {
                                    "name": "云梦县",
                                    "regionId": 420923
                                },
                                {
                                    "name": "应城市",
                                    "regionId": 420981
                                },
                                {
                                    "name": "安陆市",
                                    "regionId": 420982
                                },
                                {
                                    "name": "汉川市",
                                    "regionId": 420984
                                }
                            ],
                            "name": "孝感市",
                            "regionId": 420900
                        },
                        {
                            "counties": [
                                {
                                    "name": "沙市区",
                                    "regionId": 421002
                                },
                                {
                                    "name": "荆州区",
                                    "regionId": 421003
                                },
                                {
                                    "name": "公安县",
                                    "regionId": 421022
                                },
                                {
                                    "name": "江陵县",
                                    "regionId": 421024
                                },
                                {
                                    "name": "石首市",
                                    "regionId": 421081
                                },
                                {
                                    "name": "洪湖市",
                                    "regionId": 421083
                                },
                                {
                                    "name": "松滋市",
                                    "regionId": 421087
                                },
                                {
                                    "name": "监利市",
                                    "regionId": 421088
                                }
                            ],
                            "name": "荆州市",
                            "regionId": 421000
                        },
                        {
                            "counties": [
                                {
                                    "name": "黄州区",
                                    "regionId": 421102
                                },
                                {
                                    "name": "团风县",
                                    "regionId": 421121
                                },
                                {
                                    "name": "红安县",
                                    "regionId": 421122
                                },
                                {
                                    "name": "罗田县",
                                    "regionId": 421123
                                },
                                {
                                    "name": "英山县",
                                    "regionId": 421124
                                },
                                {
                                    "name": "浠水县",
                                    "regionId": 421125
                                },
                                {
                                    "name": "蕲春县",
                                    "regionId": 421126
                                },
                                {
                                    "name": "黄梅县",
                                    "regionId": 421127
                                },
                                {
                                    "name": "龙感湖管理区",
                                    "regionId": 421171
                                },
                                {
                                    "name": "麻城市",
                                    "regionId": 421181
                                },
                                {
                                    "name": "武穴市",
                                    "regionId": 421182
                                }
                            ],
                            "name": "黄冈市",
                            "regionId": 421100
                        },
                        {
                            "counties": [
                                {
                                    "name": "咸安区",
                                    "regionId": 421202
                                },
                                {
                                    "name": "嘉鱼县",
                                    "regionId": 421221
                                },
                                {
                                    "name": "通城县",
                                    "regionId": 421222
                                },
                                {
                                    "name": "崇阳县",
                                    "regionId": 421223
                                },
                                {
                                    "name": "通山县",
                                    "regionId": 421224
                                },
                                {
                                    "name": "赤壁市",
                                    "regionId": 421281
                                }
                            ],
                            "name": "咸宁市",
                            "regionId": 421200
                        },
                        {
                            "counties": [
                                {
                                    "name": "曾都区",
                                    "regionId": 421303
                                },
                                {
                                    "name": "随县",
                                    "regionId": 421321
                                },
                                {
                                    "name": "广水市",
                                    "regionId": 421381
                                }
                            ],
                            "name": "随州市",
                            "regionId": 421300
                        },
                        {
                            "counties": [
                                {
                                    "name": "恩施市",
                                    "regionId": 422801
                                },
                                {
                                    "name": "利川市",
                                    "regionId": 422802
                                },
                                {
                                    "name": "建始县",
                                    "regionId": 422822
                                },
                                {
                                    "name": "巴东县",
                                    "regionId": 422823
                                },
                                {
                                    "name": "宣恩县",
                                    "regionId": 422825
                                },
                                {
                                    "name": "咸丰县",
                                    "regionId": 422826
                                },
                                {
                                    "name": "来凤县",
                                    "regionId": 422827
                                },
                                {
                                    "name": "鹤峰县",
                                    "regionId": 422828
                                }
                            ],
                            "name": "恩施土家族苗族自治州",
                            "regionId": 422800
                        },
                        {
                            "counties": [
                                {
                                    "name": "仙桃市",
                                    "regionId": 429004
                                },
                                {
                                    "name": "潜江市",
                                    "regionId": 429005
                                },
                                {
                                    "name": "天门市",
                                    "regionId": 429006
                                },
                                {
                                    "name": "神农架林区",
                                    "regionId": 429021
                                }
                            ],
                            "name": "省直辖县",
                            "regionId": 429000
                        }
                    ],
                    "name": "湖北省",
                    "regionId": 420000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "芙蓉区",
                                    "regionId": 430102
                                },
                                {
                                    "name": "天心区",
                                    "regionId": 430103
                                },
                                {
                                    "name": "岳麓区",
                                    "regionId": 430104
                                },
                                {
                                    "name": "开福区",
                                    "regionId": 430105
                                },
                                {
                                    "name": "雨花区",
                                    "regionId": 430111
                                },
                                {
                                    "name": "望城区",
                                    "regionId": 430112
                                },
                                {
                                    "name": "长沙县",
                                    "regionId": 430121
                                },
                                {
                                    "name": "浏阳市",
                                    "regionId": 430181
                                },
                                {
                                    "name": "宁乡市",
                                    "regionId": 430182
                                }
                            ],
                            "name": "长沙市",
                            "regionId": 430100
                        },
                        {
                            "counties": [
                                {
                                    "name": "荷塘区",
                                    "regionId": 430202
                                },
                                {
                                    "name": "芦淞区",
                                    "regionId": 430203
                                },
                                {
                                    "name": "石峰区",
                                    "regionId": 430204
                                },
                                {
                                    "name": "天元区",
                                    "regionId": 430211
                                },
                                {
                                    "name": "渌口区",
                                    "regionId": 430212
                                },
                                {
                                    "name": "攸县",
                                    "regionId": 430223
                                },
                                {
                                    "name": "茶陵县",
                                    "regionId": 430224
                                },
                                {
                                    "name": "炎陵县",
                                    "regionId": 430225
                                },
                                {
                                    "name": "云龙示范区",
                                    "regionId": 430271
                                },
                                {
                                    "name": "醴陵市",
                                    "regionId": 430281
                                }
                            ],
                            "name": "株洲市",
                            "regionId": 430200
                        },
                        {
                            "counties": [
                                {
                                    "name": "雨湖区",
                                    "regionId": 430302
                                },
                                {
                                    "name": "岳塘区",
                                    "regionId": 430304
                                },
                                {
                                    "name": "湘潭县",
                                    "regionId": 430321
                                },
                                {
                                    "name": "湘潭九华示范区",
                                    "regionId": 430373
                                },
                                {
                                    "name": "湘乡市",
                                    "regionId": 430381
                                },
                                {
                                    "name": "韶山市",
                                    "regionId": 430382
                                }
                            ],
                            "name": "湘潭市",
                            "regionId": 430300
                        },
                        {
                            "counties": [
                                {
                                    "name": "珠晖区",
                                    "regionId": 430405
                                },
                                {
                                    "name": "雁峰区",
                                    "regionId": 430406
                                },
                                {
                                    "name": "石鼓区",
                                    "regionId": 430407
                                },
                                {
                                    "name": "蒸湘区",
                                    "regionId": 430408
                                },
                                {
                                    "name": "南岳区",
                                    "regionId": 430412
                                },
                                {
                                    "name": "衡阳县",
                                    "regionId": 430421
                                },
                                {
                                    "name": "衡南县",
                                    "regionId": 430422
                                },
                                {
                                    "name": "衡山县",
                                    "regionId": 430423
                                },
                                {
                                    "name": "衡东县",
                                    "regionId": 430424
                                },
                                {
                                    "name": "祁东县",
                                    "regionId": 430426
                                },
                                {
                                    "name": "耒阳市",
                                    "regionId": 430481
                                },
                                {
                                    "name": "常宁市",
                                    "regionId": 430482
                                }
                            ],
                            "name": "衡阳市",
                            "regionId": 430400
                        },
                        {
                            "counties": [
                                {
                                    "name": "双清区",
                                    "regionId": 430502
                                },
                                {
                                    "name": "大祥区",
                                    "regionId": 430503
                                },
                                {
                                    "name": "北塔区",
                                    "regionId": 430511
                                },
                                {
                                    "name": "新邵县",
                                    "regionId": 430522
                                },
                                {
                                    "name": "邵阳县",
                                    "regionId": 430523
                                },
                                {
                                    "name": "隆回县",
                                    "regionId": 430524
                                },
                                {
                                    "name": "洞口县",
                                    "regionId": 430525
                                },
                                {
                                    "name": "绥宁县",
                                    "regionId": 430527
                                },
                                {
                                    "name": "新宁县",
                                    "regionId": 430528
                                },
                                {
                                    "name": "城步苗族自治县",
                                    "regionId": 430529
                                },
                                {
                                    "name": "武冈市",
                                    "regionId": 430581
                                },
                                {
                                    "name": "邵东市",
                                    "regionId": 430582
                                }
                            ],
                            "name": "邵阳市",
                            "regionId": 430500
                        },
                        {
                            "counties": [
                                {
                                    "name": "岳阳楼区",
                                    "regionId": 430602
                                },
                                {
                                    "name": "云溪区",
                                    "regionId": 430603
                                },
                                {
                                    "name": "君山区",
                                    "regionId": 430611
                                },
                                {
                                    "name": "岳阳县",
                                    "regionId": 430621
                                },
                                {
                                    "name": "华容县",
                                    "regionId": 430623
                                },
                                {
                                    "name": "湘阴县",
                                    "regionId": 430624
                                },
                                {
                                    "name": "平江县",
                                    "regionId": 430626
                                },
                                {
                                    "name": "汨罗市",
                                    "regionId": 430681
                                },
                                {
                                    "name": "临湘市",
                                    "regionId": 430682
                                }
                            ],
                            "name": "岳阳市",
                            "regionId": 430600
                        },
                        {
                            "counties": [
                                {
                                    "name": "武陵区",
                                    "regionId": 430702
                                },
                                {
                                    "name": "鼎城区",
                                    "regionId": 430703
                                },
                                {
                                    "name": "安乡县",
                                    "regionId": 430721
                                },
                                {
                                    "name": "汉寿县",
                                    "regionId": 430722
                                },
                                {
                                    "name": "澧县",
                                    "regionId": 430723
                                },
                                {
                                    "name": "临澧县",
                                    "regionId": 430724
                                },
                                {
                                    "name": "桃源县",
                                    "regionId": 430725
                                },
                                {
                                    "name": "石门县",
                                    "regionId": 430726
                                },
                                {
                                    "name": "津市市",
                                    "regionId": 430781
                                }
                            ],
                            "name": "常德市",
                            "regionId": 430700
                        },
                        {
                            "counties": [
                                {
                                    "name": "永定区",
                                    "regionId": 430802
                                },
                                {
                                    "name": "武陵源区",
                                    "regionId": 430811
                                },
                                {
                                    "name": "慈利县",
                                    "regionId": 430821
                                },
                                {
                                    "name": "桑植县",
                                    "regionId": 430822
                                }
                            ],
                            "name": "张家界市",
                            "regionId": 430800
                        },
                        {
                            "counties": [
                                {
                                    "name": "资阳区",
                                    "regionId": 430902
                                },
                                {
                                    "name": "赫山区",
                                    "regionId": 430903
                                },
                                {
                                    "name": "南县",
                                    "regionId": 430921
                                },
                                {
                                    "name": "桃江县",
                                    "regionId": 430922
                                },
                                {
                                    "name": "安化县",
                                    "regionId": 430923
                                },
                                {
                                    "name": "益阳市大通湖管理区",
                                    "regionId": 430971
                                },
                                {
                                    "name": "沅江市",
                                    "regionId": 430981
                                }
                            ],
                            "name": "益阳市",
                            "regionId": 430900
                        },
                        {
                            "counties": [
                                {
                                    "name": "北湖区",
                                    "regionId": 431002
                                },
                                {
                                    "name": "苏仙区",
                                    "regionId": 431003
                                },
                                {
                                    "name": "桂阳县",
                                    "regionId": 431021
                                },
                                {
                                    "name": "宜章县",
                                    "regionId": 431022
                                },
                                {
                                    "name": "永兴县",
                                    "regionId": 431023
                                },
                                {
                                    "name": "嘉禾县",
                                    "regionId": 431024
                                },
                                {
                                    "name": "临武县",
                                    "regionId": 431025
                                },
                                {
                                    "name": "汝城县",
                                    "regionId": 431026
                                },
                                {
                                    "name": "桂东县",
                                    "regionId": 431027
                                },
                                {
                                    "name": "安仁县",
                                    "regionId": 431028
                                },
                                {
                                    "name": "资兴市",
                                    "regionId": 431081
                                }
                            ],
                            "name": "郴州市",
                            "regionId": 431000
                        },
                        {
                            "counties": [
                                {
                                    "name": "零陵区",
                                    "regionId": 431102
                                },
                                {
                                    "name": "冷水滩区",
                                    "regionId": 431103
                                },
                                {
                                    "name": "东安县",
                                    "regionId": 431122
                                },
                                {
                                    "name": "双牌县",
                                    "regionId": 431123
                                },
                                {
                                    "name": "道县",
                                    "regionId": 431124
                                },
                                {
                                    "name": "江永县",
                                    "regionId": 431125
                                },
                                {
                                    "name": "宁远县",
                                    "regionId": 431126
                                },
                                {
                                    "name": "蓝山县",
                                    "regionId": 431127
                                },
                                {
                                    "name": "新田县",
                                    "regionId": 431128
                                },
                                {
                                    "name": "江华瑶族自治县",
                                    "regionId": 431129
                                },
                                {
                                    "name": "祁阳市",
                                    "regionId": 431181
                                }
                            ],
                            "name": "永州市",
                            "regionId": 431100
                        },
                        {
                            "counties": [
                                {
                                    "name": "鹤城区",
                                    "regionId": 431202
                                },
                                {
                                    "name": "中方县",
                                    "regionId": 431221
                                },
                                {
                                    "name": "沅陵县",
                                    "regionId": 431222
                                },
                                {
                                    "name": "辰溪县",
                                    "regionId": 431223
                                },
                                {
                                    "name": "溆浦县",
                                    "regionId": 431224
                                },
                                {
                                    "name": "会同县",
                                    "regionId": 431225
                                },
                                {
                                    "name": "麻阳苗族自治县",
                                    "regionId": 431226
                                },
                                {
                                    "name": "新晃侗族自治县",
                                    "regionId": 431227
                                },
                                {
                                    "name": "芷江侗族自治县",
                                    "regionId": 431228
                                },
                                {
                                    "name": "靖州苗族侗族自治县",
                                    "regionId": 431229
                                },
                                {
                                    "name": "通道侗族自治县",
                                    "regionId": 431230
                                },
                                {
                                    "name": "怀化市洪江管理区",
                                    "regionId": 431271
                                },
                                {
                                    "name": "洪江市",
                                    "regionId": 431281
                                }
                            ],
                            "name": "怀化市",
                            "regionId": 431200
                        },
                        {
                            "counties": [
                                {
                                    "name": "娄星区",
                                    "regionId": 431302
                                },
                                {
                                    "name": "双峰县",
                                    "regionId": 431321
                                },
                                {
                                    "name": "新化县",
                                    "regionId": 431322
                                },
                                {
                                    "name": "冷水江市",
                                    "regionId": 431381
                                },
                                {
                                    "name": "涟源市",
                                    "regionId": 431382
                                }
                            ],
                            "name": "娄底市",
                            "regionId": 431300
                        },
                        {
                            "counties": [
                                {
                                    "name": "吉首市",
                                    "regionId": 433101
                                },
                                {
                                    "name": "泸溪县",
                                    "regionId": 433122
                                },
                                {
                                    "name": "凤凰县",
                                    "regionId": 433123
                                },
                                {
                                    "name": "花垣县",
                                    "regionId": 433124
                                },
                                {
                                    "name": "保靖县",
                                    "regionId": 433125
                                },
                                {
                                    "name": "古丈县",
                                    "regionId": 433126
                                },
                                {
                                    "name": "永顺县",
                                    "regionId": 433127
                                },
                                {
                                    "name": "龙山县",
                                    "regionId": 433130
                                }
                            ],
                            "name": "湘西土家族苗族自治州",
                            "regionId": 433100
                        }
                    ],
                    "name": "湖南省",
                    "regionId": 430000
                }
            ]
        },
        {
            "api": 3,
            "part": "华南",
            "provinces": [
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "鼓楼区",
                                    "regionId": 350102
                                },
                                {
                                    "name": "台江区",
                                    "regionId": 350103
                                },
                                {
                                    "name": "仓山区",
                                    "regionId": 350104
                                },
                                {
                                    "name": "马尾区",
                                    "regionId": 350105
                                },
                                {
                                    "name": "晋安区",
                                    "regionId": 350111
                                },
                                {
                                    "name": "长乐区",
                                    "regionId": 350112
                                },
                                {
                                    "name": "闽侯县",
                                    "regionId": 350121
                                },
                                {
                                    "name": "连江县",
                                    "regionId": 350122
                                },
                                {
                                    "name": "罗源县",
                                    "regionId": 350123
                                },
                                {
                                    "name": "闽清县",
                                    "regionId": 350124
                                },
                                {
                                    "name": "永泰县",
                                    "regionId": 350125
                                },
                                {
                                    "name": "平潭县",
                                    "regionId": 350128
                                },
                                {
                                    "name": "福清市",
                                    "regionId": 350181
                                }
                            ],
                            "name": "福州市",
                            "regionId": 350100
                        },
                        {
                            "counties": [
                                {
                                    "name": "思明区",
                                    "regionId": 350203
                                },
                                {
                                    "name": "海沧区",
                                    "regionId": 350205
                                },
                                {
                                    "name": "湖里区",
                                    "regionId": 350206
                                },
                                {
                                    "name": "集美区",
                                    "regionId": 350211
                                },
                                {
                                    "name": "同安区",
                                    "regionId": 350212
                                },
                                {
                                    "name": "翔安区",
                                    "regionId": 350213
                                }
                            ],
                            "name": "厦门市",
                            "regionId": 350200
                        },
                        {
                            "counties": [
                                {
                                    "name": "城厢区",
                                    "regionId": 350302
                                },
                                {
                                    "name": "涵江区",
                                    "regionId": 350303
                                },
                                {
                                    "name": "荔城区",
                                    "regionId": 350304
                                },
                                {
                                    "name": "秀屿区",
                                    "regionId": 350305
                                },
                                {
                                    "name": "仙游县",
                                    "regionId": 350322
                                }
                            ],
                            "name": "莆田市",
                            "regionId": 350300
                        },
                        {
                            "counties": [
                                {
                                    "name": "三元区",
                                    "regionId": 350404
                                },
                                {
                                    "name": "沙县区",
                                    "regionId": 350405
                                },
                                {
                                    "name": "明溪县",
                                    "regionId": 350421
                                },
                                {
                                    "name": "清流县",
                                    "regionId": 350423
                                },
                                {
                                    "name": "宁化县",
                                    "regionId": 350424
                                },
                                {
                                    "name": "大田县",
                                    "regionId": 350425
                                },
                                {
                                    "name": "尤溪县",
                                    "regionId": 350426
                                },
                                {
                                    "name": "将乐县",
                                    "regionId": 350428
                                },
                                {
                                    "name": "泰宁县",
                                    "regionId": 350429
                                },
                                {
                                    "name": "建宁县",
                                    "regionId": 350430
                                },
                                {
                                    "name": "永安市",
                                    "regionId": 350481
                                }
                            ],
                            "name": "三明市",
                            "regionId": 350400
                        },
                        {
                            "counties": [
                                {
                                    "name": "鲤城区",
                                    "regionId": 350502
                                },
                                {
                                    "name": "丰泽区",
                                    "regionId": 350503
                                },
                                {
                                    "name": "洛江区",
                                    "regionId": 350504
                                },
                                {
                                    "name": "泉港区",
                                    "regionId": 350505
                                },
                                {
                                    "name": "惠安县",
                                    "regionId": 350521
                                },
                                {
                                    "name": "安溪县",
                                    "regionId": 350524
                                },
                                {
                                    "name": "永春县",
                                    "regionId": 350525
                                },
                                {
                                    "name": "德化县",
                                    "regionId": 350526
                                },
                                {
                                    "name": "金门县",
                                    "regionId": 350527
                                },
                                {
                                    "name": "石狮市",
                                    "regionId": 350581
                                },
                                {
                                    "name": "晋江市",
                                    "regionId": 350582
                                },
                                {
                                    "name": "南安市",
                                    "regionId": 350583
                                }
                            ],
                            "name": "泉州市",
                            "regionId": 350500
                        },
                        {
                            "counties": [
                                {
                                    "name": "芗城区",
                                    "regionId": 350602
                                },
                                {
                                    "name": "龙文区",
                                    "regionId": 350603
                                },
                                {
                                    "name": "龙海区",
                                    "regionId": 350604
                                },
                                {
                                    "name": "长泰区",
                                    "regionId": 350605
                                },
                                {
                                    "name": "云霄县",
                                    "regionId": 350622
                                },
                                {
                                    "name": "漳浦县",
                                    "regionId": 350623
                                },
                                {
                                    "name": "诏安县",
                                    "regionId": 350624
                                },
                                {
                                    "name": "东山县",
                                    "regionId": 350626
                                },
                                {
                                    "name": "南靖县",
                                    "regionId": 350627
                                },
                                {
                                    "name": "平和县",
                                    "regionId": 350628
                                },
                                {
                                    "name": "华安县",
                                    "regionId": 350629
                                }
                            ],
                            "name": "漳州市",
                            "regionId": 350600
                        },
                        {
                            "counties": [
                                {
                                    "name": "延平区",
                                    "regionId": 350702
                                },
                                {
                                    "name": "建阳区",
                                    "regionId": 350703
                                },
                                {
                                    "name": "顺昌县",
                                    "regionId": 350721
                                },
                                {
                                    "name": "浦城县",
                                    "regionId": 350722
                                },
                                {
                                    "name": "光泽县",
                                    "regionId": 350723
                                },
                                {
                                    "name": "松溪县",
                                    "regionId": 350724
                                },
                                {
                                    "name": "政和县",
                                    "regionId": 350725
                                },
                                {
                                    "name": "邵武市",
                                    "regionId": 350781
                                },
                                {
                                    "name": "武夷山市",
                                    "regionId": 350782
                                },
                                {
                                    "name": "建瓯市",
                                    "regionId": 350783
                                }
                            ],
                            "name": "南平市",
                            "regionId": 350700
                        },
                        {
                            "counties": [
                                {
                                    "name": "新罗区",
                                    "regionId": 350802
                                },
                                {
                                    "name": "永定区",
                                    "regionId": 350803
                                },
                                {
                                    "name": "长汀县",
                                    "regionId": 350821
                                },
                                {
                                    "name": "上杭县",
                                    "regionId": 350823
                                },
                                {
                                    "name": "武平县",
                                    "regionId": 350824
                                },
                                {
                                    "name": "连城县",
                                    "regionId": 350825
                                },
                                {
                                    "name": "漳平市",
                                    "regionId": 350881
                                }
                            ],
                            "name": "龙岩市",
                            "regionId": 350800
                        },
                        {
                            "counties": [
                                {
                                    "name": "蕉城区",
                                    "regionId": 350902
                                },
                                {
                                    "name": "霞浦县",
                                    "regionId": 350921
                                },
                                {
                                    "name": "古田县",
                                    "regionId": 350922
                                },
                                {
                                    "name": "屏南县",
                                    "regionId": 350923
                                },
                                {
                                    "name": "寿宁县",
                                    "regionId": 350924
                                },
                                {
                                    "name": "周宁县",
                                    "regionId": 350925
                                },
                                {
                                    "name": "柘荣县",
                                    "regionId": 350926
                                },
                                {
                                    "name": "福安市",
                                    "regionId": 350981
                                },
                                {
                                    "name": "福鼎市",
                                    "regionId": 350982
                                }
                            ],
                            "name": "宁德市",
                            "regionId": 350900
                        }
                    ],
                    "name": "福建省",
                    "regionId": 350000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "荔湾区",
                                    "regionId": 440103
                                },
                                {
                                    "name": "越秀区",
                                    "regionId": 440104
                                },
                                {
                                    "name": "海珠区",
                                    "regionId": 440105
                                },
                                {
                                    "name": "天河区",
                                    "regionId": 440106
                                },
                                {
                                    "name": "白云区",
                                    "regionId": 440111
                                },
                                {
                                    "name": "黄埔区",
                                    "regionId": 440112
                                },
                                {
                                    "name": "番禺区",
                                    "regionId": 440113
                                },
                                {
                                    "name": "花都区",
                                    "regionId": 440114
                                },
                                {
                                    "name": "南沙区",
                                    "regionId": 440115
                                },
                                {
                                    "name": "从化区",
                                    "regionId": 440117
                                },
                                {
                                    "name": "增城区",
                                    "regionId": 440118
                                }
                            ],
                            "name": "广州市",
                            "regionId": 440100
                        },
                        {
                            "counties": [
                                {
                                    "name": "武江区",
                                    "regionId": 440203
                                },
                                {
                                    "name": "浈江区",
                                    "regionId": 440204
                                },
                                {
                                    "name": "曲江区",
                                    "regionId": 440205
                                },
                                {
                                    "name": "始兴县",
                                    "regionId": 440222
                                },
                                {
                                    "name": "仁化县",
                                    "regionId": 440224
                                },
                                {
                                    "name": "翁源县",
                                    "regionId": 440229
                                },
                                {
                                    "name": "乳源瑶族自治县",
                                    "regionId": 440232
                                },
                                {
                                    "name": "新丰县",
                                    "regionId": 440233
                                },
                                {
                                    "name": "乐昌市",
                                    "regionId": 440281
                                },
                                {
                                    "name": "南雄市",
                                    "regionId": 440282
                                }
                            ],
                            "name": "韶关市",
                            "regionId": 440200
                        },
                        {
                            "counties": [
                                {
                                    "name": "罗湖区",
                                    "regionId": 440303
                                },
                                {
                                    "name": "福田区",
                                    "regionId": 440304
                                },
                                {
                                    "name": "南山区",
                                    "regionId": 440305
                                },
                                {
                                    "name": "宝安区",
                                    "regionId": 440306
                                },
                                {
                                    "name": "龙岗区",
                                    "regionId": 440307
                                },
                                {
                                    "name": "盐田区",
                                    "regionId": 440308
                                },
                                {
                                    "name": "龙华区",
                                    "regionId": 440309
                                },
                                {
                                    "name": "坪山区",
                                    "regionId": 440310
                                },
                                {
                                    "name": "光明区",
                                    "regionId": 440311
                                }
                            ],
                            "name": "深圳市",
                            "regionId": 440300
                        },
                        {
                            "counties": [
                                {
                                    "name": "香洲区",
                                    "regionId": 440402
                                },
                                {
                                    "name": "斗门区",
                                    "regionId": 440403
                                },
                                {
                                    "name": "金湾区",
                                    "regionId": 440404
                                }
                            ],
                            "name": "珠海市",
                            "regionId": 440400
                        },
                        {
                            "counties": [
                                {
                                    "name": "龙湖区",
                                    "regionId": 440507
                                },
                                {
                                    "name": "金平区",
                                    "regionId": 440511
                                },
                                {
                                    "name": "濠江区",
                                    "regionId": 440512
                                },
                                {
                                    "name": "潮阳区",
                                    "regionId": 440513
                                },
                                {
                                    "name": "潮南区",
                                    "regionId": 440514
                                },
                                {
                                    "name": "澄海区",
                                    "regionId": 440515
                                },
                                {
                                    "name": "南澳县",
                                    "regionId": 440523
                                }
                            ],
                            "name": "汕头市",
                            "regionId": 440500
                        },
                        {
                            "counties": [
                                {
                                    "name": "禅城区",
                                    "regionId": 440604
                                },
                                {
                                    "name": "南海区",
                                    "regionId": 440605
                                },
                                {
                                    "name": "顺德区",
                                    "regionId": 440606
                                },
                                {
                                    "name": "三水区",
                                    "regionId": 440607
                                },
                                {
                                    "name": "高明区",
                                    "regionId": 440608
                                }
                            ],
                            "name": "佛山市",
                            "regionId": 440600
                        },
                        {
                            "counties": [
                                {
                                    "name": "蓬江区",
                                    "regionId": 440703
                                },
                                {
                                    "name": "江海区",
                                    "regionId": 440704
                                },
                                {
                                    "name": "新会区",
                                    "regionId": 440705
                                },
                                {
                                    "name": "台山市",
                                    "regionId": 440781
                                },
                                {
                                    "name": "开平市",
                                    "regionId": 440783
                                },
                                {
                                    "name": "鹤山市",
                                    "regionId": 440784
                                },
                                {
                                    "name": "恩平市",
                                    "regionId": 440785
                                }
                            ],
                            "name": "江门市",
                            "regionId": 440700
                        },
                        {
                            "counties": [
                                {
                                    "name": "赤坎区",
                                    "regionId": 440802
                                },
                                {
                                    "name": "霞山区",
                                    "regionId": 440803
                                },
                                {
                                    "name": "坡头区",
                                    "regionId": 440804
                                },
                                {
                                    "name": "麻章区",
                                    "regionId": 440811
                                },
                                {
                                    "name": "遂溪县",
                                    "regionId": 440823
                                },
                                {
                                    "name": "徐闻县",
                                    "regionId": 440825
                                },
                                {
                                    "name": "廉江市",
                                    "regionId": 440881
                                },
                                {
                                    "name": "雷州市",
                                    "regionId": 440882
                                },
                                {
                                    "name": "吴川市",
                                    "regionId": 440883
                                },
                                {
                                    "name": "经济技术开发区",
                                    "regionId": 440890
                                }
                            ],
                            "name": "湛江市",
                            "regionId": 440800
                        },
                        {
                            "counties": [
                                {
                                    "name": "茂南区",
                                    "regionId": 440902
                                },
                                {
                                    "name": "电白区",
                                    "regionId": 440904
                                },
                                {
                                    "name": "高州市",
                                    "regionId": 440981
                                },
                                {
                                    "name": "化州市",
                                    "regionId": 440982
                                },
                                {
                                    "name": "信宜市",
                                    "regionId": 440983
                                }
                            ],
                            "name": "茂名市",
                            "regionId": 440900
                        },
                        {
                            "counties": [
                                {
                                    "name": "端州区",
                                    "regionId": 441202
                                },
                                {
                                    "name": "鼎湖区",
                                    "regionId": 441203
                                },
                                {
                                    "name": "高要区",
                                    "regionId": 441204
                                },
                                {
                                    "name": "广宁县",
                                    "regionId": 441223
                                },
                                {
                                    "name": "怀集县",
                                    "regionId": 441224
                                },
                                {
                                    "name": "封开县",
                                    "regionId": 441225
                                },
                                {
                                    "name": "德庆县",
                                    "regionId": 441226
                                },
                                {
                                    "name": "四会市",
                                    "regionId": 441284
                                }
                            ],
                            "name": "肇庆市",
                            "regionId": 441200
                        },
                        {
                            "counties": [
                                {
                                    "name": "惠城区",
                                    "regionId": 441302
                                },
                                {
                                    "name": "惠阳区",
                                    "regionId": 441303
                                },
                                {
                                    "name": "博罗县",
                                    "regionId": 441322
                                },
                                {
                                    "name": "惠东县",
                                    "regionId": 441323
                                },
                                {
                                    "name": "龙门县",
                                    "regionId": 441324
                                }
                            ],
                            "name": "惠州市",
                            "regionId": 441300
                        },
                        {
                            "counties": [
                                {
                                    "name": "梅江区",
                                    "regionId": 441402
                                },
                                {
                                    "name": "梅县区",
                                    "regionId": 441403
                                },
                                {
                                    "name": "大埔县",
                                    "regionId": 441422
                                },
                                {
                                    "name": "丰顺县",
                                    "regionId": 441423
                                },
                                {
                                    "name": "五华县",
                                    "regionId": 441424
                                },
                                {
                                    "name": "平远县",
                                    "regionId": 441426
                                },
                                {
                                    "name": "蕉岭县",
                                    "regionId": 441427
                                },
                                {
                                    "name": "兴宁市",
                                    "regionId": 441481
                                }
                            ],
                            "name": "梅州市",
                            "regionId": 441400
                        },
                        {
                            "counties": [
                                {
                                    "name": "城区",
                                    "regionId": 441502
                                },
                                {
                                    "name": "海丰县",
                                    "regionId": 441521
                                },
                                {
                                    "name": "陆河县",
                                    "regionId": 441523
                                },
                                {
                                    "name": "陆丰市",
                                    "regionId": 441581
                                }
                            ],
                            "name": "汕尾市",
                            "regionId": 441500
                        },
                        {
                            "counties": [
                                {
                                    "name": "源城区",
                                    "regionId": 441602
                                },
                                {
                                    "name": "紫金县",
                                    "regionId": 441621
                                },
                                {
                                    "name": "龙川县",
                                    "regionId": 441622
                                },
                                {
                                    "name": "连平县",
                                    "regionId": 441623
                                },
                                {
                                    "name": "和平县",
                                    "regionId": 441624
                                },
                                {
                                    "name": "东源县",
                                    "regionId": 441625
                                }
                            ],
                            "name": "河源市",
                            "regionId": 441600
                        },
                        {
                            "counties": [
                                {
                                    "name": "江城区",
                                    "regionId": 441702
                                },
                                {
                                    "name": "阳东区",
                                    "regionId": 441704
                                },
                                {
                                    "name": "阳西县",
                                    "regionId": 441721
                                },
                                {
                                    "name": "阳春市",
                                    "regionId": 441781
                                }
                            ],
                            "name": "阳江市",
                            "regionId": 441700
                        },
                        {
                            "counties": [
                                {
                                    "name": "清城区",
                                    "regionId": 441802
                                },
                                {
                                    "name": "清新区",
                                    "regionId": 441803
                                },
                                {
                                    "name": "佛冈县",
                                    "regionId": 441821
                                },
                                {
                                    "name": "阳山县",
                                    "regionId": 441823
                                },
                                {
                                    "name": "连山壮族瑶族自治县",
                                    "regionId": 441825
                                },
                                {
                                    "name": "连南瑶族自治县",
                                    "regionId": 441826
                                },
                                {
                                    "name": "英德市",
                                    "regionId": 441881
                                },
                                {
                                    "name": "连州市",
                                    "regionId": 441882
                                }
                            ],
                            "name": "清远市",
                            "regionId": 441800
                        },
                        {
                            "counties": [
                                {
                                    "name": "中堂镇",
                                    "regionId": 441901
                                },
                                {
                                    "name": "南城街道",
                                    "regionId": 441903
                                },
                                {
                                    "name": "长安镇",
                                    "regionId": 441904
                                },
                                {
                                    "name": "东坑镇",
                                    "regionId": 441905
                                },
                                {
                                    "name": "樟木头镇",
                                    "regionId": 441906
                                },
                                {
                                    "name": "莞城街道",
                                    "regionId": 441907
                                },
                                {
                                    "name": "石龙镇",
                                    "regionId": 441908
                                },
                                {
                                    "name": "桥头镇",
                                    "regionId": 441909
                                },
                                {
                                    "name": "万江街道",
                                    "regionId": 441910
                                },
                                {
                                    "name": "麻涌镇",
                                    "regionId": 441911
                                },
                                {
                                    "name": "虎门镇",
                                    "regionId": 441912
                                },
                                {
                                    "name": "谢岗镇",
                                    "regionId": 441913
                                },
                                {
                                    "name": "石碣镇",
                                    "regionId": 441914
                                },
                                {
                                    "name": "茶山镇",
                                    "regionId": 441915
                                },
                                {
                                    "name": "东城街道",
                                    "regionId": 441916
                                },
                                {
                                    "name": "洪梅镇",
                                    "regionId": 441917
                                },
                                {
                                    "name": "道滘镇",
                                    "regionId": 441918
                                },
                                {
                                    "name": "高埗镇",
                                    "regionId": 441919
                                },
                                {
                                    "name": "企石镇",
                                    "regionId": 441920
                                },
                                {
                                    "name": "凤岗镇",
                                    "regionId": 441921
                                },
                                {
                                    "name": "大岭山镇",
                                    "regionId": 441922
                                },
                                {
                                    "name": "松山湖",
                                    "regionId": 441923
                                },
                                {
                                    "name": "清溪镇",
                                    "regionId": 441924
                                },
                                {
                                    "name": "望牛墩镇",
                                    "regionId": 441925
                                },
                                {
                                    "name": "厚街镇",
                                    "regionId": 441926
                                },
                                {
                                    "name": "常平镇",
                                    "regionId": 441927
                                },
                                {
                                    "name": "寮步镇",
                                    "regionId": 441928
                                },
                                {
                                    "name": "石排镇",
                                    "regionId": 441929
                                },
                                {
                                    "name": "横沥镇",
                                    "regionId": 441930
                                },
                                {
                                    "name": "塘厦镇",
                                    "regionId": 441931
                                },
                                {
                                    "name": "黄江镇",
                                    "regionId": 441932
                                },
                                {
                                    "name": "大朗镇",
                                    "regionId": 441933
                                },
                                {
                                    "name": "东莞港",
                                    "regionId": 441934
                                },
                                {
                                    "name": "东莞生态园",
                                    "regionId": 441935
                                },
                                {
                                    "name": "沙田镇",
                                    "regionId": 441990
                                }
                            ],
                            "name": "东莞市",
                            "regionId": 441900
                        },
                        {
                            "counties": [
                                {
                                    "name": "南头镇",
                                    "regionId": 442001
                                },
                                {
                                    "name": "神湾镇",
                                    "regionId": 442002
                                },
                                {
                                    "name": "东凤镇",
                                    "regionId": 442003
                                },
                                {
                                    "name": "五桂山街道",
                                    "regionId": 442004
                                },
                                {
                                    "name": "黄圃镇",
                                    "regionId": 442005
                                },
                                {
                                    "name": "小榄镇",
                                    "regionId": 442006
                                },
                                {
                                    "name": "石岐街道",
                                    "regionId": 442007
                                },
                                {
                                    "name": "横栏镇",
                                    "regionId": 442008
                                },
                                {
                                    "name": "三角镇",
                                    "regionId": 442009
                                },
                                {
                                    "name": "三乡镇",
                                    "regionId": 442010
                                },
                                {
                                    "name": "港口镇",
                                    "regionId": 442011
                                },
                                {
                                    "name": "沙溪镇",
                                    "regionId": 442012
                                },
                                {
                                    "name": "板芙镇",
                                    "regionId": 442013
                                },
                                {
                                    "name": "东升镇",
                                    "regionId": 442015
                                },
                                {
                                    "name": "阜沙镇",
                                    "regionId": 442016
                                },
                                {
                                    "name": "民众镇",
                                    "regionId": 442017
                                },
                                {
                                    "name": "东区街道",
                                    "regionId": 442018
                                },
                                {
                                    "name": "火炬开发区街道办事处",
                                    "regionId": 442019
                                },
                                {
                                    "name": "西区街道",
                                    "regionId": 442020
                                },
                                {
                                    "name": "南区街道",
                                    "regionId": 442021
                                },
                                {
                                    "name": "古镇镇",
                                    "regionId": 442022
                                },
                                {
                                    "name": "坦洲镇",
                                    "regionId": 442023
                                },
                                {
                                    "name": "大涌镇",
                                    "regionId": 442024
                                },
                                {
                                    "name": "南朗镇",
                                    "regionId": 442025
                                }
                            ],
                            "name": "中山市",
                            "regionId": 442000
                        },
                        {
                            "counties": [
                                {
                                    "name": "湘桥区",
                                    "regionId": 445102
                                },
                                {
                                    "name": "潮安区",
                                    "regionId": 445103
                                },
                                {
                                    "name": "饶平县",
                                    "regionId": 445122
                                }
                            ],
                            "name": "潮州市",
                            "regionId": 445100
                        },
                        {
                            "counties": [
                                {
                                    "name": "榕城区",
                                    "regionId": 445202
                                },
                                {
                                    "name": "揭东区",
                                    "regionId": 445203
                                },
                                {
                                    "name": "揭西县",
                                    "regionId": 445222
                                },
                                {
                                    "name": "惠来县",
                                    "regionId": 445224
                                },
                                {
                                    "name": "普宁市",
                                    "regionId": 445281
                                }
                            ],
                            "name": "揭阳市",
                            "regionId": 445200
                        },
                        {
                            "counties": [
                                {
                                    "name": "云城区",
                                    "regionId": 445302
                                },
                                {
                                    "name": "云安区",
                                    "regionId": 445303
                                },
                                {
                                    "name": "新兴县",
                                    "regionId": 445321
                                },
                                {
                                    "name": "郁南县",
                                    "regionId": 445322
                                },
                                {
                                    "name": "罗定市",
                                    "regionId": 445381
                                }
                            ],
                            "name": "云浮市",
                            "regionId": 445300
                        }
                    ],
                    "name": "广东省",
                    "regionId": 440000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "兴宁区",
                                    "regionId": 450102
                                },
                                {
                                    "name": "青秀区",
                                    "regionId": 450103
                                },
                                {
                                    "name": "江南区",
                                    "regionId": 450105
                                },
                                {
                                    "name": "西乡塘区",
                                    "regionId": 450107
                                },
                                {
                                    "name": "良庆区",
                                    "regionId": 450108
                                },
                                {
                                    "name": "邕宁区",
                                    "regionId": 450109
                                },
                                {
                                    "name": "武鸣区",
                                    "regionId": 450110
                                },
                                {
                                    "name": "隆安县",
                                    "regionId": 450123
                                },
                                {
                                    "name": "马山县",
                                    "regionId": 450124
                                },
                                {
                                    "name": "上林县",
                                    "regionId": 450125
                                },
                                {
                                    "name": "宾阳县",
                                    "regionId": 450126
                                },
                                {
                                    "name": "横州市",
                                    "regionId": 450181
                                }
                            ],
                            "name": "南宁市",
                            "regionId": 450100
                        },
                        {
                            "counties": [
                                {
                                    "name": "城中区",
                                    "regionId": 450202
                                },
                                {
                                    "name": "鱼峰区",
                                    "regionId": 450203
                                },
                                {
                                    "name": "柳南区",
                                    "regionId": 450204
                                },
                                {
                                    "name": "柳北区",
                                    "regionId": 450205
                                },
                                {
                                    "name": "柳江区",
                                    "regionId": 450206
                                },
                                {
                                    "name": "柳城县",
                                    "regionId": 450222
                                },
                                {
                                    "name": "鹿寨县",
                                    "regionId": 450223
                                },
                                {
                                    "name": "融安县",
                                    "regionId": 450224
                                },
                                {
                                    "name": "融水苗族自治县",
                                    "regionId": 450225
                                },
                                {
                                    "name": "三江侗族自治县",
                                    "regionId": 450226
                                }
                            ],
                            "name": "柳州市",
                            "regionId": 450200
                        },
                        {
                            "counties": [
                                {
                                    "name": "秀峰区",
                                    "regionId": 450302
                                },
                                {
                                    "name": "叠彩区",
                                    "regionId": 450303
                                },
                                {
                                    "name": "象山区",
                                    "regionId": 450304
                                },
                                {
                                    "name": "七星区",
                                    "regionId": 450305
                                },
                                {
                                    "name": "雁山区",
                                    "regionId": 450311
                                },
                                {
                                    "name": "临桂区",
                                    "regionId": 450312
                                },
                                {
                                    "name": "阳朔县",
                                    "regionId": 450321
                                },
                                {
                                    "name": "灵川县",
                                    "regionId": 450323
                                },
                                {
                                    "name": "全州县",
                                    "regionId": 450324
                                },
                                {
                                    "name": "兴安县",
                                    "regionId": 450325
                                },
                                {
                                    "name": "永福县",
                                    "regionId": 450326
                                },
                                {
                                    "name": "灌阳县",
                                    "regionId": 450327
                                },
                                {
                                    "name": "龙胜各族自治县",
                                    "regionId": 450328
                                },
                                {
                                    "name": "资源县",
                                    "regionId": 450329
                                },
                                {
                                    "name": "平乐县",
                                    "regionId": 450330
                                },
                                {
                                    "name": "恭城瑶族自治县",
                                    "regionId": 450332
                                },
                                {
                                    "name": "荔浦市",
                                    "regionId": 450381
                                }
                            ],
                            "name": "桂林市",
                            "regionId": 450300
                        },
                        {
                            "counties": [
                                {
                                    "name": "万秀区",
                                    "regionId": 450403
                                },
                                {
                                    "name": "长洲区",
                                    "regionId": 450405
                                },
                                {
                                    "name": "龙圩区",
                                    "regionId": 450406
                                },
                                {
                                    "name": "苍梧县",
                                    "regionId": 450421
                                },
                                {
                                    "name": "藤县",
                                    "regionId": 450422
                                },
                                {
                                    "name": "蒙山县",
                                    "regionId": 450423
                                },
                                {
                                    "name": "岑溪市",
                                    "regionId": 450481
                                }
                            ],
                            "name": "梧州市",
                            "regionId": 450400
                        },
                        {
                            "counties": [
                                {
                                    "name": "海城区",
                                    "regionId": 450502
                                },
                                {
                                    "name": "银海区",
                                    "regionId": 450503
                                },
                                {
                                    "name": "铁山港区",
                                    "regionId": 450512
                                },
                                {
                                    "name": "合浦县",
                                    "regionId": 450521
                                }
                            ],
                            "name": "北海市",
                            "regionId": 450500
                        },
                        {
                            "counties": [
                                {
                                    "name": "港口区",
                                    "regionId": 450602
                                },
                                {
                                    "name": "防城区",
                                    "regionId": 450603
                                },
                                {
                                    "name": "上思县",
                                    "regionId": 450621
                                },
                                {
                                    "name": "东兴市",
                                    "regionId": 450681
                                }
                            ],
                            "name": "防城港市",
                            "regionId": 450600
                        },
                        {
                            "counties": [
                                {
                                    "name": "钦南区",
                                    "regionId": 450702
                                },
                                {
                                    "name": "钦北区",
                                    "regionId": 450703
                                },
                                {
                                    "name": "灵山县",
                                    "regionId": 450721
                                },
                                {
                                    "name": "浦北县",
                                    "regionId": 450722
                                }
                            ],
                            "name": "钦州市",
                            "regionId": 450700
                        },
                        {
                            "counties": [
                                {
                                    "name": "港北区",
                                    "regionId": 450802
                                },
                                {
                                    "name": "港南区",
                                    "regionId": 450803
                                },
                                {
                                    "name": "覃塘区",
                                    "regionId": 450804
                                },
                                {
                                    "name": "平南县",
                                    "regionId": 450821
                                },
                                {
                                    "name": "桂平市",
                                    "regionId": 450881
                                }
                            ],
                            "name": "贵港市",
                            "regionId": 450800
                        },
                        {
                            "counties": [
                                {
                                    "name": "玉州区",
                                    "regionId": 450902
                                },
                                {
                                    "name": "福绵区",
                                    "regionId": 450903
                                },
                                {
                                    "name": "容县",
                                    "regionId": 450921
                                },
                                {
                                    "name": "陆川县",
                                    "regionId": 450922
                                },
                                {
                                    "name": "博白县",
                                    "regionId": 450923
                                },
                                {
                                    "name": "兴业县",
                                    "regionId": 450924
                                },
                                {
                                    "name": "北流市",
                                    "regionId": 450981
                                }
                            ],
                            "name": "玉林市",
                            "regionId": 450900
                        },
                        {
                            "counties": [
                                {
                                    "name": "右江区",
                                    "regionId": 451002
                                },
                                {
                                    "name": "田阳区",
                                    "regionId": 451003
                                },
                                {
                                    "name": "田东县",
                                    "regionId": 451022
                                },
                                {
                                    "name": "德保县",
                                    "regionId": 451024
                                },
                                {
                                    "name": "那坡县",
                                    "regionId": 451026
                                },
                                {
                                    "name": "凌云县",
                                    "regionId": 451027
                                },
                                {
                                    "name": "乐业县",
                                    "regionId": 451028
                                },
                                {
                                    "name": "田林县",
                                    "regionId": 451029
                                },
                                {
                                    "name": "西林县",
                                    "regionId": 451030
                                },
                                {
                                    "name": "隆林各族自治县",
                                    "regionId": 451031
                                },
                                {
                                    "name": "靖西市",
                                    "regionId": 451081
                                },
                                {
                                    "name": "平果市",
                                    "regionId": 451082
                                }
                            ],
                            "name": "百色市",
                            "regionId": 451000
                        },
                        {
                            "counties": [
                                {
                                    "name": "八步区",
                                    "regionId": 451102
                                },
                                {
                                    "name": "平桂区",
                                    "regionId": 451103
                                },
                                {
                                    "name": "昭平县",
                                    "regionId": 451121
                                },
                                {
                                    "name": "钟山县",
                                    "regionId": 451122
                                },
                                {
                                    "name": "富川瑶族自治县",
                                    "regionId": 451123
                                }
                            ],
                            "name": "贺州市",
                            "regionId": 451100
                        },
                        {
                            "counties": [
                                {
                                    "name": "金城江区",
                                    "regionId": 451202
                                },
                                {
                                    "name": "宜州区",
                                    "regionId": 451203
                                },
                                {
                                    "name": "南丹县",
                                    "regionId": 451221
                                },
                                {
                                    "name": "天峨县",
                                    "regionId": 451222
                                },
                                {
                                    "name": "凤山县",
                                    "regionId": 451223
                                },
                                {
                                    "name": "东兰县",
                                    "regionId": 451224
                                },
                                {
                                    "name": "罗城仫佬族自治县",
                                    "regionId": 451225
                                },
                                {
                                    "name": "环江毛南族自治县",
                                    "regionId": 451226
                                },
                                {
                                    "name": "巴马瑶族自治县",
                                    "regionId": 451227
                                },
                                {
                                    "name": "都安瑶族自治县",
                                    "regionId": 451228
                                },
                                {
                                    "name": "大化瑶族自治县",
                                    "regionId": 451229
                                }
                            ],
                            "name": "河池市",
                            "regionId": 451200
                        },
                        {
                            "counties": [
                                {
                                    "name": "兴宾区",
                                    "regionId": 451302
                                },
                                {
                                    "name": "忻城县",
                                    "regionId": 451321
                                },
                                {
                                    "name": "象州县",
                                    "regionId": 451322
                                },
                                {
                                    "name": "武宣县",
                                    "regionId": 451323
                                },
                                {
                                    "name": "金秀瑶族自治县",
                                    "regionId": 451324
                                },
                                {
                                    "name": "合山市",
                                    "regionId": 451381
                                }
                            ],
                            "name": "来宾市",
                            "regionId": 451300
                        },
                        {
                            "counties": [
                                {
                                    "name": "江州区",
                                    "regionId": 451402
                                },
                                {
                                    "name": "扶绥县",
                                    "regionId": 451421
                                },
                                {
                                    "name": "宁明县",
                                    "regionId": 451422
                                },
                                {
                                    "name": "龙州县",
                                    "regionId": 451423
                                },
                                {
                                    "name": "大新县",
                                    "regionId": 451424
                                },
                                {
                                    "name": "天等县",
                                    "regionId": 451425
                                },
                                {
                                    "name": "凭祥市",
                                    "regionId": 451481
                                }
                            ],
                            "name": "崇左市",
                            "regionId": 451400
                        }
                    ],
                    "name": "广西壮族自治区",
                    "regionId": 450000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "秀英区",
                                    "regionId": 460105
                                },
                                {
                                    "name": "龙华区",
                                    "regionId": 460106
                                },
                                {
                                    "name": "琼山区",
                                    "regionId": 460107
                                },
                                {
                                    "name": "美兰区",
                                    "regionId": 460108
                                }
                            ],
                            "name": "海口市",
                            "regionId": 460100
                        },
                        {
                            "counties": [
                                {
                                    "name": "海棠区",
                                    "regionId": 460202
                                },
                                {
                                    "name": "吉阳区",
                                    "regionId": 460203
                                },
                                {
                                    "name": "天涯区",
                                    "regionId": 460204
                                },
                                {
                                    "name": "崖州区",
                                    "regionId": 460205
                                }
                            ],
                            "name": "三亚市",
                            "regionId": 460200
                        },
                        {
                            "counties": [
                                {
                                    "name": "西沙群岛",
                                    "regionId": 460321
                                },
                                {
                                    "name": "南沙群岛",
                                    "regionId": 460322
                                },
                                {
                                    "name": "中沙群岛的岛礁及其海域",
                                    "regionId": 460323
                                }
                            ],
                            "name": "三沙市",
                            "regionId": 460300
                        },
                        {
                            "counties": [
                                {
                                    "name": "那大镇",
                                    "regionId": 460401
                                },
                                {
                                    "name": "和庆镇",
                                    "regionId": 460402
                                },
                                {
                                    "name": "南丰镇",
                                    "regionId": 460403
                                },
                                {
                                    "name": "大成镇",
                                    "regionId": 460404
                                },
                                {
                                    "name": "雅星镇",
                                    "regionId": 460405
                                },
                                {
                                    "name": "兰洋镇",
                                    "regionId": 460406
                                },
                                {
                                    "name": "光村镇",
                                    "regionId": 460407
                                },
                                {
                                    "name": "木棠镇",
                                    "regionId": 460408
                                },
                                {
                                    "name": "海头镇",
                                    "regionId": 460409
                                },
                                {
                                    "name": "峨蔓镇",
                                    "regionId": 460410
                                },
                                {
                                    "name": "王五镇",
                                    "regionId": 460411
                                },
                                {
                                    "name": "白马井镇",
                                    "regionId": 460412
                                },
                                {
                                    "name": "中和镇",
                                    "regionId": 460413
                                },
                                {
                                    "name": "排浦镇",
                                    "regionId": 460414
                                },
                                {
                                    "name": "东成镇",
                                    "regionId": 460415
                                },
                                {
                                    "name": "新州镇",
                                    "regionId": 460416
                                },
                                {
                                    "name": "洋浦经济开发区",
                                    "regionId": 460417
                                },
                                {
                                    "name": "华南热作学院",
                                    "regionId": 460418
                                }
                            ],
                            "name": "儋州市",
                            "regionId": 460400
                        },
                        {
                            "counties": [
                                {
                                    "name": "五指山市",
                                    "regionId": 469001
                                },
                                {
                                    "name": "琼海市",
                                    "regionId": 469002
                                },
                                {
                                    "name": "文昌市",
                                    "regionId": 469005
                                },
                                {
                                    "name": "万宁市",
                                    "regionId": 469006
                                },
                                {
                                    "name": "东方市",
                                    "regionId": 469007
                                },
                                {
                                    "name": "定安县",
                                    "regionId": 469021
                                },
                                {
                                    "name": "屯昌县",
                                    "regionId": 469022
                                },
                                {
                                    "name": "澄迈县",
                                    "regionId": 469023
                                },
                                {
                                    "name": "临高县",
                                    "regionId": 469024
                                },
                                {
                                    "name": "白沙黎族自治县",
                                    "regionId": 469025
                                },
                                {
                                    "name": "昌江黎族自治县",
                                    "regionId": 469026
                                },
                                {
                                    "name": "乐东黎族自治县",
                                    "regionId": 469027
                                },
                                {
                                    "name": "陵水黎族自治县",
                                    "regionId": 469028
                                },
                                {
                                    "name": "保亭黎族苗族自治县",
                                    "regionId": 469029
                                },
                                {
                                    "name": "琼中黎族苗族自治县",
                                    "regionId": 469030
                                }
                            ],
                            "name": "省直辖县",
                            "regionId": 469000
                        }
                    ],
                    "name": "海南省",
                    "regionId": 460000
                }
            ]
        },
        {
            "api": 4,
            "part": "华北",
            "provinces": [
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "东城区",
                                    "regionId": 110101
                                },
                                {
                                    "name": "西城区",
                                    "regionId": 110102
                                },
                                {
                                    "name": "朝阳区",
                                    "regionId": 110105
                                },
                                {
                                    "name": "丰台区",
                                    "regionId": 110106
                                },
                                {
                                    "name": "石景山区",
                                    "regionId": 110107
                                },
                                {
                                    "name": "海淀区",
                                    "regionId": 110108
                                },
                                {
                                    "name": "门头沟区",
                                    "regionId": 110109
                                },
                                {
                                    "name": "房山区",
                                    "regionId": 110111
                                },
                                {
                                    "name": "通州区",
                                    "regionId": 110112
                                },
                                {
                                    "name": "顺义区",
                                    "regionId": 110113
                                },
                                {
                                    "name": "昌平区",
                                    "regionId": 110114
                                },
                                {
                                    "name": "大兴区",
                                    "regionId": 110115
                                },
                                {
                                    "name": "怀柔区",
                                    "regionId": 110116
                                },
                                {
                                    "name": "平谷区",
                                    "regionId": 110117
                                },
                                {
                                    "name": "密云区",
                                    "regionId": 110118
                                },
                                {
                                    "name": "延庆区",
                                    "regionId": 110119
                                }
                            ],
                            "name": "北京市",
                            "regionId": 110100
                        }
                    ],
                    "name": "北京市",
                    "regionId": 110000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "和平区",
                                    "regionId": 120101
                                },
                                {
                                    "name": "河东区",
                                    "regionId": 120102
                                },
                                {
                                    "name": "河西区",
                                    "regionId": 120103
                                },
                                {
                                    "name": "南开区",
                                    "regionId": 120104
                                },
                                {
                                    "name": "河北区",
                                    "regionId": 120105
                                },
                                {
                                    "name": "红桥区",
                                    "regionId": 120106
                                },
                                {
                                    "name": "东丽区",
                                    "regionId": 120110
                                },
                                {
                                    "name": "西青区",
                                    "regionId": 120111
                                },
                                {
                                    "name": "津南区",
                                    "regionId": 120112
                                },
                                {
                                    "name": "北辰区",
                                    "regionId": 120113
                                },
                                {
                                    "name": "武清区",
                                    "regionId": 120114
                                },
                                {
                                    "name": "宝坻区",
                                    "regionId": 120115
                                },
                                {
                                    "name": "滨海新区",
                                    "regionId": 120116
                                },
                                {
                                    "name": "宁河区",
                                    "regionId": 120117
                                },
                                {
                                    "name": "静海区",
                                    "regionId": 120118
                                },
                                {
                                    "name": "蓟州区",
                                    "regionId": 120119
                                }
                            ],
                            "name": "天津市",
                            "regionId": 120100
                        }
                    ],
                    "name": "天津市",
                    "regionId": 120000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "长安区",
                                    "regionId": 130102
                                },
                                {
                                    "name": "桥西区",
                                    "regionId": 130104
                                },
                                {
                                    "name": "新华区",
                                    "regionId": 130105
                                },
                                {
                                    "name": "井陉矿区",
                                    "regionId": 130107
                                },
                                {
                                    "name": "裕华区",
                                    "regionId": 130108
                                },
                                {
                                    "name": "藁城区",
                                    "regionId": 130109
                                },
                                {
                                    "name": "鹿泉区",
                                    "regionId": 130110
                                },
                                {
                                    "name": "栾城区",
                                    "regionId": 130111
                                },
                                {
                                    "name": "井陉县",
                                    "regionId": 130121
                                },
                                {
                                    "name": "正定县",
                                    "regionId": 130123
                                },
                                {
                                    "name": "行唐县",
                                    "regionId": 130125
                                },
                                {
                                    "name": "灵寿县",
                                    "regionId": 130126
                                },
                                {
                                    "name": "高邑县",
                                    "regionId": 130127
                                },
                                {
                                    "name": "深泽县",
                                    "regionId": 130128
                                },
                                {
                                    "name": "赞皇县",
                                    "regionId": 130129
                                },
                                {
                                    "name": "无极县",
                                    "regionId": 130130
                                },
                                {
                                    "name": "平山县",
                                    "regionId": 130131
                                },
                                {
                                    "name": "元氏县",
                                    "regionId": 130132
                                },
                                {
                                    "name": "赵县",
                                    "regionId": 130133
                                },
                                {
                                    "name": "石家庄高新技术产业开发区",
                                    "regionId": 130171
                                },
                                {
                                    "name": "石家庄循环化工园区",
                                    "regionId": 130172
                                },
                                {
                                    "name": "辛集市",
                                    "regionId": 130181
                                },
                                {
                                    "name": "晋州市",
                                    "regionId": 130183
                                },
                                {
                                    "name": "新乐市",
                                    "regionId": 130184
                                }
                            ],
                            "name": "石家庄市",
                            "regionId": 130100
                        },
                        {
                            "counties": [
                                {
                                    "name": "路南区",
                                    "regionId": 130202
                                },
                                {
                                    "name": "路北区",
                                    "regionId": 130203
                                },
                                {
                                    "name": "古冶区",
                                    "regionId": 130204
                                },
                                {
                                    "name": "开平区",
                                    "regionId": 130205
                                },
                                {
                                    "name": "丰南区",
                                    "regionId": 130207
                                },
                                {
                                    "name": "丰润区",
                                    "regionId": 130208
                                },
                                {
                                    "name": "曹妃甸区",
                                    "regionId": 130209
                                },
                                {
                                    "name": "滦南县",
                                    "regionId": 130224
                                },
                                {
                                    "name": "乐亭县",
                                    "regionId": 130225
                                },
                                {
                                    "name": "迁西县",
                                    "regionId": 130227
                                },
                                {
                                    "name": "玉田县",
                                    "regionId": 130229
                                },
                                {
                                    "name": "唐山高新技术产业开发区",
                                    "regionId": 130273
                                },
                                {
                                    "name": "河北唐山海港经济开发区",
                                    "regionId": 130274
                                },
                                {
                                    "name": "遵化市",
                                    "regionId": 130281
                                },
                                {
                                    "name": "迁安市",
                                    "regionId": 130283
                                },
                                {
                                    "name": "滦州市",
                                    "regionId": 130284
                                }
                            ],
                            "name": "唐山市",
                            "regionId": 130200
                        },
                        {
                            "counties": [
                                {
                                    "name": "海港区",
                                    "regionId": 130302
                                },
                                {
                                    "name": "山海关区",
                                    "regionId": 130303
                                },
                                {
                                    "name": "北戴河区",
                                    "regionId": 130304
                                },
                                {
                                    "name": "抚宁区",
                                    "regionId": 130306
                                },
                                {
                                    "name": "青龙满族自治县",
                                    "regionId": 130321
                                },
                                {
                                    "name": "昌黎县",
                                    "regionId": 130322
                                },
                                {
                                    "name": "卢龙县",
                                    "regionId": 130324
                                },
                                {
                                    "name": "秦皇岛市经济技术开发区",
                                    "regionId": 130371
                                },
                                {
                                    "name": "北戴河新区",
                                    "regionId": 130372
                                },
                                {
                                    "name": "经济技术开发区",
                                    "regionId": 130390
                                }
                            ],
                            "name": "秦皇岛市",
                            "regionId": 130300
                        },
                        {
                            "counties": [
                                {
                                    "name": "邯山区",
                                    "regionId": 130402
                                },
                                {
                                    "name": "丛台区",
                                    "regionId": 130403
                                },
                                {
                                    "name": "复兴区",
                                    "regionId": 130404
                                },
                                {
                                    "name": "峰峰矿区",
                                    "regionId": 130406
                                },
                                {
                                    "name": "肥乡区",
                                    "regionId": 130407
                                },
                                {
                                    "name": "永年区",
                                    "regionId": 130408
                                },
                                {
                                    "name": "临漳县",
                                    "regionId": 130423
                                },
                                {
                                    "name": "成安县",
                                    "regionId": 130424
                                },
                                {
                                    "name": "大名县",
                                    "regionId": 130425
                                },
                                {
                                    "name": "涉县",
                                    "regionId": 130426
                                },
                                {
                                    "name": "磁县",
                                    "regionId": 130427
                                },
                                {
                                    "name": "邱县",
                                    "regionId": 130430
                                },
                                {
                                    "name": "鸡泽县",
                                    "regionId": 130431
                                },
                                {
                                    "name": "广平县",
                                    "regionId": 130432
                                },
                                {
                                    "name": "馆陶县",
                                    "regionId": 130433
                                },
                                {
                                    "name": "魏县",
                                    "regionId": 130434
                                },
                                {
                                    "name": "曲周县",
                                    "regionId": 130435
                                },
                                {
                                    "name": "邯郸经济技术开发区",
                                    "regionId": 130471
                                },
                                {
                                    "name": "邯郸冀南新区",
                                    "regionId": 130473
                                },
                                {
                                    "name": "武安市",
                                    "regionId": 130481
                                }
                            ],
                            "name": "邯郸市",
                            "regionId": 130400
                        },
                        {
                            "counties": [
                                {
                                    "name": "襄都区",
                                    "regionId": 130502
                                },
                                {
                                    "name": "信都区",
                                    "regionId": 130503
                                },
                                {
                                    "name": "任泽区",
                                    "regionId": 130505
                                },
                                {
                                    "name": "南和区",
                                    "regionId": 130506
                                },
                                {
                                    "name": "临城县",
                                    "regionId": 130522
                                },
                                {
                                    "name": "内丘县",
                                    "regionId": 130523
                                },
                                {
                                    "name": "柏乡县",
                                    "regionId": 130524
                                },
                                {
                                    "name": "隆尧县",
                                    "regionId": 130525
                                },
                                {
                                    "name": "宁晋县",
                                    "regionId": 130528
                                },
                                {
                                    "name": "巨鹿县",
                                    "regionId": 130529
                                },
                                {
                                    "name": "新河县",
                                    "regionId": 130530
                                },
                                {
                                    "name": "广宗县",
                                    "regionId": 130531
                                },
                                {
                                    "name": "平乡县",
                                    "regionId": 130532
                                },
                                {
                                    "name": "威县",
                                    "regionId": 130533
                                },
                                {
                                    "name": "清河县",
                                    "regionId": 130534
                                },
                                {
                                    "name": "临西县",
                                    "regionId": 130535
                                },
                                {
                                    "name": "河北邢台经济开发区",
                                    "regionId": 130571
                                },
                                {
                                    "name": "南宫市",
                                    "regionId": 130581
                                },
                                {
                                    "name": "沙河市",
                                    "regionId": 130582
                                }
                            ],
                            "name": "邢台市",
                            "regionId": 130500
                        },
                        {
                            "counties": [
                                {
                                    "name": "竞秀区",
                                    "regionId": 130602
                                },
                                {
                                    "name": "莲池区",
                                    "regionId": 130606
                                },
                                {
                                    "name": "满城区",
                                    "regionId": 130607
                                },
                                {
                                    "name": "清苑区",
                                    "regionId": 130608
                                },
                                {
                                    "name": "徐水区",
                                    "regionId": 130609
                                },
                                {
                                    "name": "涞水县",
                                    "regionId": 130623
                                },
                                {
                                    "name": "阜平县",
                                    "regionId": 130624
                                },
                                {
                                    "name": "定兴县",
                                    "regionId": 130626
                                },
                                {
                                    "name": "唐县",
                                    "regionId": 130627
                                },
                                {
                                    "name": "高阳县",
                                    "regionId": 130628
                                },
                                {
                                    "name": "容城县",
                                    "regionId": 130629
                                },
                                {
                                    "name": "涞源县",
                                    "regionId": 130630
                                },
                                {
                                    "name": "望都县",
                                    "regionId": 130631
                                },
                                {
                                    "name": "安新县",
                                    "regionId": 130632
                                },
                                {
                                    "name": "易县",
                                    "regionId": 130633
                                },
                                {
                                    "name": "曲阳县",
                                    "regionId": 130634
                                },
                                {
                                    "name": "蠡县",
                                    "regionId": 130635
                                },
                                {
                                    "name": "顺平县",
                                    "regionId": 130636
                                },
                                {
                                    "name": "博野县",
                                    "regionId": 130637
                                },
                                {
                                    "name": "雄县",
                                    "regionId": 130638
                                },
                                {
                                    "name": "保定高新技术产业开发区",
                                    "regionId": 130671
                                },
                                {
                                    "name": "保定白沟新城",
                                    "regionId": 130672
                                },
                                {
                                    "name": "涿州市",
                                    "regionId": 130681
                                },
                                {
                                    "name": "定州市",
                                    "regionId": 130682
                                },
                                {
                                    "name": "安国市",
                                    "regionId": 130683
                                },
                                {
                                    "name": "高碑店市",
                                    "regionId": 130684
                                }
                            ],
                            "name": "保定市",
                            "regionId": 130600
                        },
                        {
                            "counties": [
                                {
                                    "name": "桥东区",
                                    "regionId": 130702
                                },
                                {
                                    "name": "桥西区",
                                    "regionId": 130703
                                },
                                {
                                    "name": "宣化区",
                                    "regionId": 130705
                                },
                                {
                                    "name": "下花园区",
                                    "regionId": 130706
                                },
                                {
                                    "name": "万全区",
                                    "regionId": 130708
                                },
                                {
                                    "name": "崇礼区",
                                    "regionId": 130709
                                },
                                {
                                    "name": "张北县",
                                    "regionId": 130722
                                },
                                {
                                    "name": "康保县",
                                    "regionId": 130723
                                },
                                {
                                    "name": "沽源县",
                                    "regionId": 130724
                                },
                                {
                                    "name": "尚义县",
                                    "regionId": 130725
                                },
                                {
                                    "name": "蔚县",
                                    "regionId": 130726
                                },
                                {
                                    "name": "阳原县",
                                    "regionId": 130727
                                },
                                {
                                    "name": "怀安县",
                                    "regionId": 130728
                                },
                                {
                                    "name": "怀来县",
                                    "regionId": 130730
                                },
                                {
                                    "name": "涿鹿县",
                                    "regionId": 130731
                                },
                                {
                                    "name": "赤城县",
                                    "regionId": 130732
                                },
                                {
                                    "name": "张家口市察北管理区",
                                    "regionId": 130772
                                }
                            ],
                            "name": "张家口市",
                            "regionId": 130700
                        },
                        {
                            "counties": [
                                {
                                    "name": "双桥区",
                                    "regionId": 130802
                                },
                                {
                                    "name": "双滦区",
                                    "regionId": 130803
                                },
                                {
                                    "name": "鹰手营子矿区",
                                    "regionId": 130804
                                },
                                {
                                    "name": "承德县",
                                    "regionId": 130821
                                },
                                {
                                    "name": "兴隆县",
                                    "regionId": 130822
                                },
                                {
                                    "name": "滦平县",
                                    "regionId": 130824
                                },
                                {
                                    "name": "隆化县",
                                    "regionId": 130825
                                },
                                {
                                    "name": "丰宁满族自治县",
                                    "regionId": 130826
                                },
                                {
                                    "name": "宽城满族自治县",
                                    "regionId": 130827
                                },
                                {
                                    "name": "围场满族蒙古族自治县",
                                    "regionId": 130828
                                },
                                {
                                    "name": "承德高新技术产业开发区",
                                    "regionId": 130871
                                },
                                {
                                    "name": "平泉市",
                                    "regionId": 130881
                                }
                            ],
                            "name": "承德市",
                            "regionId": 130800
                        },
                        {
                            "counties": [
                                {
                                    "name": "新华区",
                                    "regionId": 130902
                                },
                                {
                                    "name": "运河区",
                                    "regionId": 130903
                                },
                                {
                                    "name": "沧县",
                                    "regionId": 130921
                                },
                                {
                                    "name": "青县",
                                    "regionId": 130922
                                },
                                {
                                    "name": "东光县",
                                    "regionId": 130923
                                },
                                {
                                    "name": "海兴县",
                                    "regionId": 130924
                                },
                                {
                                    "name": "盐山县",
                                    "regionId": 130925
                                },
                                {
                                    "name": "肃宁县",
                                    "regionId": 130926
                                },
                                {
                                    "name": "南皮县",
                                    "regionId": 130927
                                },
                                {
                                    "name": "吴桥县",
                                    "regionId": 130928
                                },
                                {
                                    "name": "献县",
                                    "regionId": 130929
                                },
                                {
                                    "name": "孟村回族自治县",
                                    "regionId": 130930
                                },
                                {
                                    "name": "河北沧州经济开发区",
                                    "regionId": 130971
                                },
                                {
                                    "name": "沧州高新技术产业开发区",
                                    "regionId": 130972
                                },
                                {
                                    "name": "沧州渤海新区",
                                    "regionId": 130973
                                },
                                {
                                    "name": "泊头市",
                                    "regionId": 130981
                                },
                                {
                                    "name": "任丘市",
                                    "regionId": 130982
                                },
                                {
                                    "name": "黄骅市",
                                    "regionId": 130983
                                },
                                {
                                    "name": "河间市",
                                    "regionId": 130984
                                }
                            ],
                            "name": "沧州市",
                            "regionId": 130900
                        },
                        {
                            "counties": [
                                {
                                    "name": "安次区",
                                    "regionId": 131002
                                },
                                {
                                    "name": "广阳区",
                                    "regionId": 131003
                                },
                                {
                                    "name": "固安县",
                                    "regionId": 131022
                                },
                                {
                                    "name": "永清县",
                                    "regionId": 131023
                                },
                                {
                                    "name": "香河县",
                                    "regionId": 131024
                                },
                                {
                                    "name": "大城县",
                                    "regionId": 131025
                                },
                                {
                                    "name": "文安县",
                                    "regionId": 131026
                                },
                                {
                                    "name": "大厂回族自治县",
                                    "regionId": 131028
                                },
                                {
                                    "name": "廊坊经济技术开发区",
                                    "regionId": 131071
                                },
                                {
                                    "name": "霸州市",
                                    "regionId": 131081
                                },
                                {
                                    "name": "三河市",
                                    "regionId": 131082
                                },
                                {
                                    "name": "开发区",
                                    "regionId": 131090
                                }
                            ],
                            "name": "廊坊市",
                            "regionId": 131000
                        },
                        {
                            "counties": [
                                {
                                    "name": "桃城区",
                                    "regionId": 131102
                                },
                                {
                                    "name": "冀州区",
                                    "regionId": 131103
                                },
                                {
                                    "name": "枣强县",
                                    "regionId": 131121
                                },
                                {
                                    "name": "武邑县",
                                    "regionId": 131122
                                },
                                {
                                    "name": "武强县",
                                    "regionId": 131123
                                },
                                {
                                    "name": "饶阳县",
                                    "regionId": 131124
                                },
                                {
                                    "name": "安平县",
                                    "regionId": 131125
                                },
                                {
                                    "name": "故城县",
                                    "regionId": 131126
                                },
                                {
                                    "name": "景县",
                                    "regionId": 131127
                                },
                                {
                                    "name": "阜城县",
                                    "regionId": 131128
                                },
                                {
                                    "name": "河北衡水经济开发区",
                                    "regionId": 131171
                                },
                                {
                                    "name": "衡水滨湖新区",
                                    "regionId": 131172
                                },
                                {
                                    "name": "深州市",
                                    "regionId": 131182
                                }
                            ],
                            "name": "衡水市",
                            "regionId": 131100
                        }
                    ],
                    "name": "河北省",
                    "regionId": 130000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "小店区",
                                    "regionId": 140105
                                },
                                {
                                    "name": "迎泽区",
                                    "regionId": 140106
                                },
                                {
                                    "name": "杏花岭区",
                                    "regionId": 140107
                                },
                                {
                                    "name": "尖草坪区",
                                    "regionId": 140108
                                },
                                {
                                    "name": "万柏林区",
                                    "regionId": 140109
                                },
                                {
                                    "name": "晋源区",
                                    "regionId": 140110
                                },
                                {
                                    "name": "清徐县",
                                    "regionId": 140121
                                },
                                {
                                    "name": "阳曲县",
                                    "regionId": 140122
                                },
                                {
                                    "name": "娄烦县",
                                    "regionId": 140123
                                },
                                {
                                    "name": "古交市",
                                    "regionId": 140181
                                }
                            ],
                            "name": "太原市",
                            "regionId": 140100
                        },
                        {
                            "counties": [
                                {
                                    "name": "新荣区",
                                    "regionId": 140212
                                },
                                {
                                    "name": "平城区",
                                    "regionId": 140213
                                },
                                {
                                    "name": "云冈区",
                                    "regionId": 140214
                                },
                                {
                                    "name": "云州区",
                                    "regionId": 140215
                                },
                                {
                                    "name": "阳高县",
                                    "regionId": 140221
                                },
                                {
                                    "name": "天镇县",
                                    "regionId": 140222
                                },
                                {
                                    "name": "广灵县",
                                    "regionId": 140223
                                },
                                {
                                    "name": "灵丘县",
                                    "regionId": 140224
                                },
                                {
                                    "name": "浑源县",
                                    "regionId": 140225
                                },
                                {
                                    "name": "左云县",
                                    "regionId": 140226
                                },
                                {
                                    "name": "山西大同经济开发区",
                                    "regionId": 140271
                                }
                            ],
                            "name": "大同市",
                            "regionId": 140200
                        },
                        {
                            "counties": [
                                {
                                    "name": "城区",
                                    "regionId": 140302
                                },
                                {
                                    "name": "矿区",
                                    "regionId": 140303
                                },
                                {
                                    "name": "郊区",
                                    "regionId": 140311
                                },
                                {
                                    "name": "平定县",
                                    "regionId": 140321
                                },
                                {
                                    "name": "盂县",
                                    "regionId": 140322
                                }
                            ],
                            "name": "阳泉市",
                            "regionId": 140300
                        },
                        {
                            "counties": [
                                {
                                    "name": "潞州区",
                                    "regionId": 140403
                                },
                                {
                                    "name": "上党区",
                                    "regionId": 140404
                                },
                                {
                                    "name": "屯留区",
                                    "regionId": 140405
                                },
                                {
                                    "name": "潞城区",
                                    "regionId": 140406
                                },
                                {
                                    "name": "襄垣县",
                                    "regionId": 140423
                                },
                                {
                                    "name": "平顺县",
                                    "regionId": 140425
                                },
                                {
                                    "name": "黎城县",
                                    "regionId": 140426
                                },
                                {
                                    "name": "壶关县",
                                    "regionId": 140427
                                },
                                {
                                    "name": "长子县",
                                    "regionId": 140428
                                },
                                {
                                    "name": "武乡县",
                                    "regionId": 140429
                                },
                                {
                                    "name": "沁县",
                                    "regionId": 140430
                                },
                                {
                                    "name": "沁源县",
                                    "regionId": 140431
                                },
                                {
                                    "name": "山西长治高新技术产业园区",
                                    "regionId": 140471
                                }
                            ],
                            "name": "长治市",
                            "regionId": 140400
                        },
                        {
                            "counties": [
                                {
                                    "name": "城区",
                                    "regionId": 140502
                                },
                                {
                                    "name": "沁水县",
                                    "regionId": 140521
                                },
                                {
                                    "name": "阳城县",
                                    "regionId": 140522
                                },
                                {
                                    "name": "陵川县",
                                    "regionId": 140524
                                },
                                {
                                    "name": "泽州县",
                                    "regionId": 140525
                                },
                                {
                                    "name": "高平市",
                                    "regionId": 140581
                                }
                            ],
                            "name": "晋城市",
                            "regionId": 140500
                        },
                        {
                            "counties": [
                                {
                                    "name": "朔城区",
                                    "regionId": 140602
                                },
                                {
                                    "name": "平鲁区",
                                    "regionId": 140603
                                },
                                {
                                    "name": "山阴县",
                                    "regionId": 140621
                                },
                                {
                                    "name": "应县",
                                    "regionId": 140622
                                },
                                {
                                    "name": "右玉县",
                                    "regionId": 140623
                                },
                                {
                                    "name": "山西朔州经济开发区",
                                    "regionId": 140671
                                },
                                {
                                    "name": "怀仁市",
                                    "regionId": 140681
                                }
                            ],
                            "name": "朔州市",
                            "regionId": 140600
                        },
                        {
                            "counties": [
                                {
                                    "name": "榆次区",
                                    "regionId": 140702
                                },
                                {
                                    "name": "太谷区",
                                    "regionId": 140703
                                },
                                {
                                    "name": "榆社县",
                                    "regionId": 140721
                                },
                                {
                                    "name": "左权县",
                                    "regionId": 140722
                                },
                                {
                                    "name": "和顺县",
                                    "regionId": 140723
                                },
                                {
                                    "name": "昔阳县",
                                    "regionId": 140724
                                },
                                {
                                    "name": "寿阳县",
                                    "regionId": 140725
                                },
                                {
                                    "name": "祁县",
                                    "regionId": 140727
                                },
                                {
                                    "name": "平遥县",
                                    "regionId": 140728
                                },
                                {
                                    "name": "灵石县",
                                    "regionId": 140729
                                },
                                {
                                    "name": "介休市",
                                    "regionId": 140781
                                }
                            ],
                            "name": "晋中市",
                            "regionId": 140700
                        },
                        {
                            "counties": [
                                {
                                    "name": "盐湖区",
                                    "regionId": 140802
                                },
                                {
                                    "name": "临猗县",
                                    "regionId": 140821
                                },
                                {
                                    "name": "万荣县",
                                    "regionId": 140822
                                },
                                {
                                    "name": "闻喜县",
                                    "regionId": 140823
                                },
                                {
                                    "name": "稷山县",
                                    "regionId": 140824
                                },
                                {
                                    "name": "新绛县",
                                    "regionId": 140825
                                },
                                {
                                    "name": "绛县",
                                    "regionId": 140826
                                },
                                {
                                    "name": "垣曲县",
                                    "regionId": 140827
                                },
                                {
                                    "name": "夏县",
                                    "regionId": 140828
                                },
                                {
                                    "name": "平陆县",
                                    "regionId": 140829
                                },
                                {
                                    "name": "芮城县",
                                    "regionId": 140830
                                },
                                {
                                    "name": "永济市",
                                    "regionId": 140881
                                },
                                {
                                    "name": "河津市",
                                    "regionId": 140882
                                }
                            ],
                            "name": "运城市",
                            "regionId": 140800
                        },
                        {
                            "counties": [
                                {
                                    "name": "忻府区",
                                    "regionId": 140902
                                },
                                {
                                    "name": "定襄县",
                                    "regionId": 140921
                                },
                                {
                                    "name": "五台县",
                                    "regionId": 140922
                                },
                                {
                                    "name": "代县",
                                    "regionId": 140923
                                },
                                {
                                    "name": "繁峙县",
                                    "regionId": 140924
                                },
                                {
                                    "name": "宁武县",
                                    "regionId": 140925
                                },
                                {
                                    "name": "静乐县",
                                    "regionId": 140926
                                },
                                {
                                    "name": "神池县",
                                    "regionId": 140927
                                },
                                {
                                    "name": "五寨县",
                                    "regionId": 140928
                                },
                                {
                                    "name": "岢岚县",
                                    "regionId": 140929
                                },
                                {
                                    "name": "河曲县",
                                    "regionId": 140930
                                },
                                {
                                    "name": "保德县",
                                    "regionId": 140931
                                },
                                {
                                    "name": "偏关县",
                                    "regionId": 140932
                                },
                                {
                                    "name": "五台山风景名胜区",
                                    "regionId": 140971
                                },
                                {
                                    "name": "原平市",
                                    "regionId": 140981
                                }
                            ],
                            "name": "忻州市",
                            "regionId": 140900
                        },
                        {
                            "counties": [
                                {
                                    "name": "尧都区",
                                    "regionId": 141002
                                },
                                {
                                    "name": "曲沃县",
                                    "regionId": 141021
                                },
                                {
                                    "name": "翼城县",
                                    "regionId": 141022
                                },
                                {
                                    "name": "襄汾县",
                                    "regionId": 141023
                                },
                                {
                                    "name": "洪洞县",
                                    "regionId": 141024
                                },
                                {
                                    "name": "古县",
                                    "regionId": 141025
                                },
                                {
                                    "name": "安泽县",
                                    "regionId": 141026
                                },
                                {
                                    "name": "浮山县",
                                    "regionId": 141027
                                },
                                {
                                    "name": "吉县",
                                    "regionId": 141028
                                },
                                {
                                    "name": "乡宁县",
                                    "regionId": 141029
                                },
                                {
                                    "name": "大宁县",
                                    "regionId": 141030
                                },
                                {
                                    "name": "隰县",
                                    "regionId": 141031
                                },
                                {
                                    "name": "永和县",
                                    "regionId": 141032
                                },
                                {
                                    "name": "蒲县",
                                    "regionId": 141033
                                },
                                {
                                    "name": "汾西县",
                                    "regionId": 141034
                                },
                                {
                                    "name": "侯马市",
                                    "regionId": 141081
                                },
                                {
                                    "name": "霍州市",
                                    "regionId": 141082
                                }
                            ],
                            "name": "临汾市",
                            "regionId": 141000
                        },
                        {
                            "counties": [
                                {
                                    "name": "离石区",
                                    "regionId": 141102
                                },
                                {
                                    "name": "文水县",
                                    "regionId": 141121
                                },
                                {
                                    "name": "交城县",
                                    "regionId": 141122
                                },
                                {
                                    "name": "兴县",
                                    "regionId": 141123
                                },
                                {
                                    "name": "临县",
                                    "regionId": 141124
                                },
                                {
                                    "name": "柳林县",
                                    "regionId": 141125
                                },
                                {
                                    "name": "石楼县",
                                    "regionId": 141126
                                },
                                {
                                    "name": "岚县",
                                    "regionId": 141127
                                },
                                {
                                    "name": "方山县",
                                    "regionId": 141128
                                },
                                {
                                    "name": "中阳县",
                                    "regionId": 141129
                                },
                                {
                                    "name": "交口县",
                                    "regionId": 141130
                                },
                                {
                                    "name": "孝义市",
                                    "regionId": 141181
                                },
                                {
                                    "name": "汾阳市",
                                    "regionId": 141182
                                }
                            ],
                            "name": "吕梁市",
                            "regionId": 141100
                        }
                    ],
                    "name": "山西省",
                    "regionId": 140000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "新城区",
                                    "regionId": 150102
                                },
                                {
                                    "name": "回民区",
                                    "regionId": 150103
                                },
                                {
                                    "name": "玉泉区",
                                    "regionId": 150104
                                },
                                {
                                    "name": "赛罕区",
                                    "regionId": 150105
                                },
                                {
                                    "name": "土默特左旗",
                                    "regionId": 150121
                                },
                                {
                                    "name": "托克托县",
                                    "regionId": 150122
                                },
                                {
                                    "name": "和林格尔县",
                                    "regionId": 150123
                                },
                                {
                                    "name": "清水河县",
                                    "regionId": 150124
                                },
                                {
                                    "name": "武川县",
                                    "regionId": 150125
                                },
                                {
                                    "name": "呼和浩特经济技术开发区",
                                    "regionId": 150172
                                }
                            ],
                            "name": "呼和浩特市",
                            "regionId": 150100
                        },
                        {
                            "counties": [
                                {
                                    "name": "东河区",
                                    "regionId": 150202
                                },
                                {
                                    "name": "昆都仑区",
                                    "regionId": 150203
                                },
                                {
                                    "name": "青山区",
                                    "regionId": 150204
                                },
                                {
                                    "name": "石拐区",
                                    "regionId": 150205
                                },
                                {
                                    "name": "白云鄂博矿区",
                                    "regionId": 150206
                                },
                                {
                                    "name": "九原区",
                                    "regionId": 150207
                                },
                                {
                                    "name": "土默特右旗",
                                    "regionId": 150221
                                },
                                {
                                    "name": "固阳县",
                                    "regionId": 150222
                                },
                                {
                                    "name": "达尔罕茂明安联合旗",
                                    "regionId": 150223
                                },
                                {
                                    "name": "包头稀土高新技术产业开发区",
                                    "regionId": 150271
                                }
                            ],
                            "name": "包头市",
                            "regionId": 150200
                        },
                        {
                            "counties": [
                                {
                                    "name": "海勃湾区",
                                    "regionId": 150302
                                },
                                {
                                    "name": "海南区",
                                    "regionId": 150303
                                },
                                {
                                    "name": "乌达区",
                                    "regionId": 150304
                                }
                            ],
                            "name": "乌海市",
                            "regionId": 150300
                        },
                        {
                            "counties": [
                                {
                                    "name": "红山区",
                                    "regionId": 150402
                                },
                                {
                                    "name": "元宝山区",
                                    "regionId": 150403
                                },
                                {
                                    "name": "松山区",
                                    "regionId": 150404
                                },
                                {
                                    "name": "阿鲁科尔沁旗",
                                    "regionId": 150421
                                },
                                {
                                    "name": "巴林左旗",
                                    "regionId": 150422
                                },
                                {
                                    "name": "巴林右旗",
                                    "regionId": 150423
                                },
                                {
                                    "name": "林西县",
                                    "regionId": 150424
                                },
                                {
                                    "name": "克什克腾旗",
                                    "regionId": 150425
                                },
                                {
                                    "name": "翁牛特旗",
                                    "regionId": 150426
                                },
                                {
                                    "name": "喀喇沁旗",
                                    "regionId": 150428
                                },
                                {
                                    "name": "宁城县",
                                    "regionId": 150429
                                },
                                {
                                    "name": "敖汉旗",
                                    "regionId": 150430
                                }
                            ],
                            "name": "赤峰市",
                            "regionId": 150400
                        },
                        {
                            "counties": [
                                {
                                    "name": "科尔沁区",
                                    "regionId": 150502
                                },
                                {
                                    "name": "科尔沁左翼中旗",
                                    "regionId": 150521
                                },
                                {
                                    "name": "科尔沁左翼后旗",
                                    "regionId": 150522
                                },
                                {
                                    "name": "开鲁县",
                                    "regionId": 150523
                                },
                                {
                                    "name": "库伦旗",
                                    "regionId": 150524
                                },
                                {
                                    "name": "奈曼旗",
                                    "regionId": 150525
                                },
                                {
                                    "name": "扎鲁特旗",
                                    "regionId": 150526
                                },
                                {
                                    "name": "通辽经济技术开发区",
                                    "regionId": 150571
                                },
                                {
                                    "name": "霍林郭勒市",
                                    "regionId": 150581
                                }
                            ],
                            "name": "通辽市",
                            "regionId": 150500
                        },
                        {
                            "counties": [
                                {
                                    "name": "东胜区",
                                    "regionId": 150602
                                },
                                {
                                    "name": "康巴什区",
                                    "regionId": 150603
                                },
                                {
                                    "name": "达拉特旗",
                                    "regionId": 150621
                                },
                                {
                                    "name": "准格尔旗",
                                    "regionId": 150622
                                },
                                {
                                    "name": "鄂托克前旗",
                                    "regionId": 150623
                                },
                                {
                                    "name": "鄂托克旗",
                                    "regionId": 150624
                                },
                                {
                                    "name": "杭锦旗",
                                    "regionId": 150625
                                },
                                {
                                    "name": "乌审旗",
                                    "regionId": 150626
                                },
                                {
                                    "name": "伊金霍洛旗",
                                    "regionId": 150627
                                }
                            ],
                            "name": "鄂尔多斯市",
                            "regionId": 150600
                        },
                        {
                            "counties": [
                                {
                                    "name": "海拉尔区",
                                    "regionId": 150702
                                },
                                {
                                    "name": "扎赉诺尔区",
                                    "regionId": 150703
                                },
                                {
                                    "name": "阿荣旗",
                                    "regionId": 150721
                                },
                                {
                                    "name": "莫力达瓦达斡尔族自治旗",
                                    "regionId": 150722
                                },
                                {
                                    "name": "鄂伦春自治旗",
                                    "regionId": 150723
                                },
                                {
                                    "name": "鄂温克族自治旗",
                                    "regionId": 150724
                                },
                                {
                                    "name": "陈巴尔虎旗",
                                    "regionId": 150725
                                },
                                {
                                    "name": "新巴尔虎左旗",
                                    "regionId": 150726
                                },
                                {
                                    "name": "新巴尔虎右旗",
                                    "regionId": 150727
                                },
                                {
                                    "name": "满洲里市",
                                    "regionId": 150781
                                },
                                {
                                    "name": "牙克石市",
                                    "regionId": 150782
                                },
                                {
                                    "name": "扎兰屯市",
                                    "regionId": 150783
                                },
                                {
                                    "name": "额尔古纳市",
                                    "regionId": 150784
                                },
                                {
                                    "name": "根河市",
                                    "regionId": 150785
                                }
                            ],
                            "name": "呼伦贝尔市",
                            "regionId": 150700
                        },
                        {
                            "counties": [
                                {
                                    "name": "临河区",
                                    "regionId": 150802
                                },
                                {
                                    "name": "五原县",
                                    "regionId": 150821
                                },
                                {
                                    "name": "磴口县",
                                    "regionId": 150822
                                },
                                {
                                    "name": "乌拉特前旗",
                                    "regionId": 150823
                                },
                                {
                                    "name": "乌拉特中旗",
                                    "regionId": 150824
                                },
                                {
                                    "name": "乌拉特后旗",
                                    "regionId": 150825
                                },
                                {
                                    "name": "杭锦后旗",
                                    "regionId": 150826
                                }
                            ],
                            "name": "巴彦淖尔市",
                            "regionId": 150800
                        },
                        {
                            "counties": [
                                {
                                    "name": "集宁区",
                                    "regionId": 150902
                                },
                                {
                                    "name": "卓资县",
                                    "regionId": 150921
                                },
                                {
                                    "name": "化德县",
                                    "regionId": 150922
                                },
                                {
                                    "name": "商都县",
                                    "regionId": 150923
                                },
                                {
                                    "name": "兴和县",
                                    "regionId": 150924
                                },
                                {
                                    "name": "凉城县",
                                    "regionId": 150925
                                },
                                {
                                    "name": "察哈尔右翼前旗",
                                    "regionId": 150926
                                },
                                {
                                    "name": "察哈尔右翼中旗",
                                    "regionId": 150927
                                },
                                {
                                    "name": "察哈尔右翼后旗",
                                    "regionId": 150928
                                },
                                {
                                    "name": "四子王旗",
                                    "regionId": 150929
                                },
                                {
                                    "name": "丰镇市",
                                    "regionId": 150981
                                }
                            ],
                            "name": "乌兰察布市",
                            "regionId": 150900
                        },
                        {
                            "counties": [
                                {
                                    "name": "乌兰浩特市",
                                    "regionId": 152201
                                },
                                {
                                    "name": "阿尔山市",
                                    "regionId": 152202
                                },
                                {
                                    "name": "科尔沁右翼前旗",
                                    "regionId": 152221
                                },
                                {
                                    "name": "科尔沁右翼中旗",
                                    "regionId": 152222
                                },
                                {
                                    "name": "扎赉特旗",
                                    "regionId": 152223
                                },
                                {
                                    "name": "突泉县",
                                    "regionId": 152224
                                }
                            ],
                            "name": "兴安盟",
                            "regionId": 152200
                        },
                        {
                            "counties": [
                                {
                                    "name": "二连浩特市",
                                    "regionId": 152501
                                },
                                {
                                    "name": "锡林浩特市",
                                    "regionId": 152502
                                },
                                {
                                    "name": "阿巴嘎旗",
                                    "regionId": 152522
                                },
                                {
                                    "name": "苏尼特左旗",
                                    "regionId": 152523
                                },
                                {
                                    "name": "苏尼特右旗",
                                    "regionId": 152524
                                },
                                {
                                    "name": "东乌珠穆沁旗",
                                    "regionId": 152525
                                },
                                {
                                    "name": "西乌珠穆沁旗",
                                    "regionId": 152526
                                },
                                {
                                    "name": "太仆寺旗",
                                    "regionId": 152527
                                },
                                {
                                    "name": "镶黄旗",
                                    "regionId": 152528
                                },
                                {
                                    "name": "正镶白旗",
                                    "regionId": 152529
                                },
                                {
                                    "name": "正蓝旗",
                                    "regionId": 152530
                                },
                                {
                                    "name": "多伦县",
                                    "regionId": 152531
                                },
                                {
                                    "name": "乌拉盖管委会",
                                    "regionId": 152571
                                }
                            ],
                            "name": "锡林郭勒盟",
                            "regionId": 152500
                        },
                        {
                            "counties": [
                                {
                                    "name": "阿拉善左旗",
                                    "regionId": 152921
                                },
                                {
                                    "name": "阿拉善右旗",
                                    "regionId": 152922
                                },
                                {
                                    "name": "额济纳旗",
                                    "regionId": 152923
                                },
                                {
                                    "name": "内蒙古阿拉善经济开发区",
                                    "regionId": 152971
                                }
                            ],
                            "name": "阿拉善盟",
                            "regionId": 152900
                        }
                    ],
                    "name": "内蒙古自治区",
                    "regionId": 150000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "历下区",
                                    "regionId": 370102
                                },
                                {
                                    "name": "市中区",
                                    "regionId": 370103
                                },
                                {
                                    "name": "槐荫区",
                                    "regionId": 370104
                                },
                                {
                                    "name": "天桥区",
                                    "regionId": 370105
                                },
                                {
                                    "name": "历城区",
                                    "regionId": 370112
                                },
                                {
                                    "name": "长清区",
                                    "regionId": 370113
                                },
                                {
                                    "name": "章丘区",
                                    "regionId": 370114
                                },
                                {
                                    "name": "济阳区",
                                    "regionId": 370115
                                },
                                {
                                    "name": "莱芜区",
                                    "regionId": 370116
                                },
                                {
                                    "name": "钢城区",
                                    "regionId": 370117
                                },
                                {
                                    "name": "平阴县",
                                    "regionId": 370124
                                },
                                {
                                    "name": "商河县",
                                    "regionId": 370126
                                },
                                {
                                    "name": "济南高新技术产业开发区",
                                    "regionId": 370171
                                },
                                {
                                    "name": "高新区",
                                    "regionId": 370190
                                }
                            ],
                            "name": "济南市",
                            "regionId": 370100
                        },
                        {
                            "counties": [
                                {
                                    "name": "市南区",
                                    "regionId": 370202
                                },
                                {
                                    "name": "市北区",
                                    "regionId": 370203
                                },
                                {
                                    "name": "黄岛区",
                                    "regionId": 370211
                                },
                                {
                                    "name": "崂山区",
                                    "regionId": 370212
                                },
                                {
                                    "name": "李沧区",
                                    "regionId": 370213
                                },
                                {
                                    "name": "城阳区",
                                    "regionId": 370214
                                },
                                {
                                    "name": "即墨区",
                                    "regionId": 370215
                                },
                                {
                                    "name": "青岛高新技术产业开发区",
                                    "regionId": 370271
                                },
                                {
                                    "name": "胶州市",
                                    "regionId": 370281
                                },
                                {
                                    "name": "平度市",
                                    "regionId": 370283
                                },
                                {
                                    "name": "莱西市",
                                    "regionId": 370285
                                },
                                {
                                    "name": "开发区",
                                    "regionId": 370290
                                }
                            ],
                            "name": "青岛市",
                            "regionId": 370200
                        },
                        {
                            "counties": [
                                {
                                    "name": "淄川区",
                                    "regionId": 370302
                                },
                                {
                                    "name": "张店区",
                                    "regionId": 370303
                                },
                                {
                                    "name": "博山区",
                                    "regionId": 370304
                                },
                                {
                                    "name": "临淄区",
                                    "regionId": 370305
                                },
                                {
                                    "name": "周村区",
                                    "regionId": 370306
                                },
                                {
                                    "name": "桓台县",
                                    "regionId": 370321
                                },
                                {
                                    "name": "高青县",
                                    "regionId": 370322
                                },
                                {
                                    "name": "沂源县",
                                    "regionId": 370323
                                }
                            ],
                            "name": "淄博市",
                            "regionId": 370300
                        },
                        {
                            "counties": [
                                {
                                    "name": "市中区",
                                    "regionId": 370402
                                },
                                {
                                    "name": "薛城区",
                                    "regionId": 370403
                                },
                                {
                                    "name": "峄城区",
                                    "regionId": 370404
                                },
                                {
                                    "name": "台儿庄区",
                                    "regionId": 370405
                                },
                                {
                                    "name": "山亭区",
                                    "regionId": 370406
                                },
                                {
                                    "name": "滕州市",
                                    "regionId": 370481
                                }
                            ],
                            "name": "枣庄市",
                            "regionId": 370400
                        },
                        {
                            "counties": [
                                {
                                    "name": "东营区",
                                    "regionId": 370502
                                },
                                {
                                    "name": "河口区",
                                    "regionId": 370503
                                },
                                {
                                    "name": "垦利区",
                                    "regionId": 370505
                                },
                                {
                                    "name": "利津县",
                                    "regionId": 370522
                                },
                                {
                                    "name": "广饶县",
                                    "regionId": 370523
                                },
                                {
                                    "name": "东营经济技术开发区",
                                    "regionId": 370571
                                },
                                {
                                    "name": "东营港经济开发区",
                                    "regionId": 370572
                                }
                            ],
                            "name": "东营市",
                            "regionId": 370500
                        },
                        {
                            "counties": [
                                {
                                    "name": "芝罘区",
                                    "regionId": 370602
                                },
                                {
                                    "name": "福山区",
                                    "regionId": 370611
                                },
                                {
                                    "name": "牟平区",
                                    "regionId": 370612
                                },
                                {
                                    "name": "莱山区",
                                    "regionId": 370613
                                },
                                {
                                    "name": "蓬莱区",
                                    "regionId": 370614
                                },
                                {
                                    "name": "烟台高新技术产业开发区",
                                    "regionId": 370671
                                },
                                {
                                    "name": "烟台经济技术开发区",
                                    "regionId": 370672
                                },
                                {
                                    "name": "龙口市",
                                    "regionId": 370681
                                },
                                {
                                    "name": "莱阳市",
                                    "regionId": 370682
                                },
                                {
                                    "name": "莱州市",
                                    "regionId": 370683
                                },
                                {
                                    "name": "招远市",
                                    "regionId": 370685
                                },
                                {
                                    "name": "栖霞市",
                                    "regionId": 370686
                                },
                                {
                                    "name": "海阳市",
                                    "regionId": 370687
                                },
                                {
                                    "name": "开发区",
                                    "regionId": 370690
                                }
                            ],
                            "name": "烟台市",
                            "regionId": 370600
                        },
                        {
                            "counties": [
                                {
                                    "name": "潍城区",
                                    "regionId": 370702
                                },
                                {
                                    "name": "寒亭区",
                                    "regionId": 370703
                                },
                                {
                                    "name": "坊子区",
                                    "regionId": 370704
                                },
                                {
                                    "name": "奎文区",
                                    "regionId": 370705
                                },
                                {
                                    "name": "临朐县",
                                    "regionId": 370724
                                },
                                {
                                    "name": "昌乐县",
                                    "regionId": 370725
                                },
                                {
                                    "name": "潍坊滨海经济技术开发区",
                                    "regionId": 370772
                                },
                                {
                                    "name": "青州市",
                                    "regionId": 370781
                                },
                                {
                                    "name": "诸城市",
                                    "regionId": 370782
                                },
                                {
                                    "name": "寿光市",
                                    "regionId": 370783
                                },
                                {
                                    "name": "安丘市",
                                    "regionId": 370784
                                },
                                {
                                    "name": "高密市",
                                    "regionId": 370785
                                },
                                {
                                    "name": "昌邑市",
                                    "regionId": 370786
                                },
                                {
                                    "name": "开发区",
                                    "regionId": 370790
                                },
                                {
                                    "name": "高新区",
                                    "regionId": 370791
                                }
                            ],
                            "name": "潍坊市",
                            "regionId": 370700
                        },
                        {
                            "counties": [
                                {
                                    "name": "任城区",
                                    "regionId": 370811
                                },
                                {
                                    "name": "兖州区",
                                    "regionId": 370812
                                },
                                {
                                    "name": "微山县",
                                    "regionId": 370826
                                },
                                {
                                    "name": "鱼台县",
                                    "regionId": 370827
                                },
                                {
                                    "name": "金乡县",
                                    "regionId": 370828
                                },
                                {
                                    "name": "嘉祥县",
                                    "regionId": 370829
                                },
                                {
                                    "name": "汶上县",
                                    "regionId": 370830
                                },
                                {
                                    "name": "泗水县",
                                    "regionId": 370831
                                },
                                {
                                    "name": "梁山县",
                                    "regionId": 370832
                                },
                                {
                                    "name": "济宁高新技术产业开发区",
                                    "regionId": 370871
                                },
                                {
                                    "name": "曲阜市",
                                    "regionId": 370881
                                },
                                {
                                    "name": "邹城市",
                                    "regionId": 370883
                                },
                                {
                                    "name": "高新区",
                                    "regionId": 370890
                                }
                            ],
                            "name": "济宁市",
                            "regionId": 370800
                        },
                        {
                            "counties": [
                                {
                                    "name": "泰山区",
                                    "regionId": 370902
                                },
                                {
                                    "name": "岱岳区",
                                    "regionId": 370911
                                },
                                {
                                    "name": "宁阳县",
                                    "regionId": 370921
                                },
                                {
                                    "name": "东平县",
                                    "regionId": 370923
                                },
                                {
                                    "name": "新泰市",
                                    "regionId": 370982
                                },
                                {
                                    "name": "肥城市",
                                    "regionId": 370983
                                }
                            ],
                            "name": "泰安市",
                            "regionId": 370900
                        },
                        {
                            "counties": [
                                {
                                    "name": "环翠区",
                                    "regionId": 371002
                                },
                                {
                                    "name": "文登区",
                                    "regionId": 371003
                                },
                                {
                                    "name": "威海火炬高技术产业开发区",
                                    "regionId": 371071
                                },
                                {
                                    "name": "威海经济技术开发区",
                                    "regionId": 371072
                                },
                                {
                                    "name": "荣成市",
                                    "regionId": 371082
                                },
                                {
                                    "name": "乳山市",
                                    "regionId": 371083
                                },
                                {
                                    "name": "经济技术开发区",
                                    "regionId": 371091
                                }
                            ],
                            "name": "威海市",
                            "regionId": 371000
                        },
                        {
                            "counties": [
                                {
                                    "name": "东港区",
                                    "regionId": 371102
                                },
                                {
                                    "name": "岚山区",
                                    "regionId": 371103
                                },
                                {
                                    "name": "五莲县",
                                    "regionId": 371121
                                },
                                {
                                    "name": "莒县",
                                    "regionId": 371122
                                },
                                {
                                    "name": "日照经济技术开发区",
                                    "regionId": 371171
                                }
                            ],
                            "name": "日照市",
                            "regionId": 371100
                        },
                        {
                            "counties": [
                                {
                                    "name": "兰山区",
                                    "regionId": 371302
                                },
                                {
                                    "name": "罗庄区",
                                    "regionId": 371311
                                },
                                {
                                    "name": "河东区",
                                    "regionId": 371312
                                },
                                {
                                    "name": "沂南县",
                                    "regionId": 371321
                                },
                                {
                                    "name": "郯城县",
                                    "regionId": 371322
                                },
                                {
                                    "name": "沂水县",
                                    "regionId": 371323
                                },
                                {
                                    "name": "兰陵县",
                                    "regionId": 371324
                                },
                                {
                                    "name": "费县",
                                    "regionId": 371325
                                },
                                {
                                    "name": "平邑县",
                                    "regionId": 371326
                                },
                                {
                                    "name": "莒南县",
                                    "regionId": 371327
                                },
                                {
                                    "name": "蒙阴县",
                                    "regionId": 371328
                                },
                                {
                                    "name": "临沭县",
                                    "regionId": 371329
                                },
                                {
                                    "name": "临沂高新技术产业开发区",
                                    "regionId": 371371
                                }
                            ],
                            "name": "临沂市",
                            "regionId": 371300
                        },
                        {
                            "counties": [
                                {
                                    "name": "德城区",
                                    "regionId": 371402
                                },
                                {
                                    "name": "陵城区",
                                    "regionId": 371403
                                },
                                {
                                    "name": "宁津县",
                                    "regionId": 371422
                                },
                                {
                                    "name": "庆云县",
                                    "regionId": 371423
                                },
                                {
                                    "name": "临邑县",
                                    "regionId": 371424
                                },
                                {
                                    "name": "齐河县",
                                    "regionId": 371425
                                },
                                {
                                    "name": "平原县",
                                    "regionId": 371426
                                },
                                {
                                    "name": "夏津县",
                                    "regionId": 371427
                                },
                                {
                                    "name": "武城县",
                                    "regionId": 371428
                                },
                                {
                                    "name": "德州运河经济开发区",
                                    "regionId": 371472
                                },
                                {
                                    "name": "乐陵市",
                                    "regionId": 371481
                                },
                                {
                                    "name": "禹城市",
                                    "regionId": 371482
                                }
                            ],
                            "name": "德州市",
                            "regionId": 371400
                        },
                        {
                            "counties": [
                                {
                                    "name": "东昌府区",
                                    "regionId": 371502
                                },
                                {
                                    "name": "茌平区",
                                    "regionId": 371503
                                },
                                {
                                    "name": "阳谷县",
                                    "regionId": 371521
                                },
                                {
                                    "name": "莘县",
                                    "regionId": 371522
                                },
                                {
                                    "name": "东阿县",
                                    "regionId": 371524
                                },
                                {
                                    "name": "冠县",
                                    "regionId": 371525
                                },
                                {
                                    "name": "高唐县",
                                    "regionId": 371526
                                },
                                {
                                    "name": "临清市",
                                    "regionId": 371581
                                }
                            ],
                            "name": "聊城市",
                            "regionId": 371500
                        },
                        {
                            "counties": [
                                {
                                    "name": "滨城区",
                                    "regionId": 371602
                                },
                                {
                                    "name": "沾化区",
                                    "regionId": 371603
                                },
                                {
                                    "name": "惠民县",
                                    "regionId": 371621
                                },
                                {
                                    "name": "阳信县",
                                    "regionId": 371622
                                },
                                {
                                    "name": "无棣县",
                                    "regionId": 371623
                                },
                                {
                                    "name": "博兴县",
                                    "regionId": 371625
                                },
                                {
                                    "name": "邹平市",
                                    "regionId": 371681
                                }
                            ],
                            "name": "滨州市",
                            "regionId": 371600
                        },
                        {
                            "counties": [
                                {
                                    "name": "牡丹区",
                                    "regionId": 371702
                                },
                                {
                                    "name": "定陶区",
                                    "regionId": 371703
                                },
                                {
                                    "name": "曹县",
                                    "regionId": 371721
                                },
                                {
                                    "name": "单县",
                                    "regionId": 371722
                                },
                                {
                                    "name": "成武县",
                                    "regionId": 371723
                                },
                                {
                                    "name": "巨野县",
                                    "regionId": 371724
                                },
                                {
                                    "name": "郓城县",
                                    "regionId": 371725
                                },
                                {
                                    "name": "鄄城县",
                                    "regionId": 371726
                                },
                                {
                                    "name": "东明县",
                                    "regionId": 371728
                                },
                                {
                                    "name": "菏泽经济技术开发区",
                                    "regionId": 371771
                                },
                                {
                                    "name": "菏泽高新技术开发区",
                                    "regionId": 371772
                                }
                            ],
                            "name": "菏泽市",
                            "regionId": 371700
                        }
                    ],
                    "name": "山东省",
                    "regionId": 370000
                }
            ]
        },
        {
            "api": 5,
            "part": "西北",
            "provinces": [
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "新城区",
                                    "regionId": 610102
                                },
                                {
                                    "name": "碑林区",
                                    "regionId": 610103
                                },
                                {
                                    "name": "莲湖区",
                                    "regionId": 610104
                                },
                                {
                                    "name": "灞桥区",
                                    "regionId": 610111
                                },
                                {
                                    "name": "未央区",
                                    "regionId": 610112
                                },
                                {
                                    "name": "雁塔区",
                                    "regionId": 610113
                                },
                                {
                                    "name": "阎良区",
                                    "regionId": 610114
                                },
                                {
                                    "name": "临潼区",
                                    "regionId": 610115
                                },
                                {
                                    "name": "长安区",
                                    "regionId": 610116
                                },
                                {
                                    "name": "高陵区",
                                    "regionId": 610117
                                },
                                {
                                    "name": "鄠邑区",
                                    "regionId": 610118
                                },
                                {
                                    "name": "蓝田县",
                                    "regionId": 610122
                                },
                                {
                                    "name": "周至县",
                                    "regionId": 610124
                                }
                            ],
                            "name": "西安市",
                            "regionId": 610100
                        },
                        {
                            "counties": [
                                {
                                    "name": "王益区",
                                    "regionId": 610202
                                },
                                {
                                    "name": "印台区",
                                    "regionId": 610203
                                },
                                {
                                    "name": "耀州区",
                                    "regionId": 610204
                                },
                                {
                                    "name": "宜君县",
                                    "regionId": 610222
                                }
                            ],
                            "name": "铜川市",
                            "regionId": 610200
                        },
                        {
                            "counties": [
                                {
                                    "name": "渭滨区",
                                    "regionId": 610302
                                },
                                {
                                    "name": "金台区",
                                    "regionId": 610303
                                },
                                {
                                    "name": "陈仓区",
                                    "regionId": 610304
                                },
                                {
                                    "name": "凤翔区",
                                    "regionId": 610305
                                },
                                {
                                    "name": "岐山县",
                                    "regionId": 610323
                                },
                                {
                                    "name": "扶风县",
                                    "regionId": 610324
                                },
                                {
                                    "name": "眉县",
                                    "regionId": 610326
                                },
                                {
                                    "name": "陇县",
                                    "regionId": 610327
                                },
                                {
                                    "name": "千阳县",
                                    "regionId": 610328
                                },
                                {
                                    "name": "麟游县",
                                    "regionId": 610329
                                },
                                {
                                    "name": "凤县",
                                    "regionId": 610330
                                },
                                {
                                    "name": "太白县",
                                    "regionId": 610331
                                }
                            ],
                            "name": "宝鸡市",
                            "regionId": 610300
                        },
                        {
                            "counties": [
                                {
                                    "name": "秦都区",
                                    "regionId": 610402
                                },
                                {
                                    "name": "杨陵区",
                                    "regionId": 610403
                                },
                                {
                                    "name": "渭城区",
                                    "regionId": 610404
                                },
                                {
                                    "name": "三原县",
                                    "regionId": 610422
                                },
                                {
                                    "name": "泾阳县",
                                    "regionId": 610423
                                },
                                {
                                    "name": "乾县",
                                    "regionId": 610424
                                },
                                {
                                    "name": "礼泉县",
                                    "regionId": 610425
                                },
                                {
                                    "name": "永寿县",
                                    "regionId": 610426
                                },
                                {
                                    "name": "长武县",
                                    "regionId": 610428
                                },
                                {
                                    "name": "旬邑县",
                                    "regionId": 610429
                                },
                                {
                                    "name": "淳化县",
                                    "regionId": 610430
                                },
                                {
                                    "name": "武功县",
                                    "regionId": 610431
                                },
                                {
                                    "name": "兴平市",
                                    "regionId": 610481
                                },
                                {
                                    "name": "彬州市",
                                    "regionId": 610482
                                }
                            ],
                            "name": "咸阳市",
                            "regionId": 610400
                        },
                        {
                            "counties": [
                                {
                                    "name": "临渭区",
                                    "regionId": 610502
                                },
                                {
                                    "name": "华州区",
                                    "regionId": 610503
                                },
                                {
                                    "name": "潼关县",
                                    "regionId": 610522
                                },
                                {
                                    "name": "大荔县",
                                    "regionId": 610523
                                },
                                {
                                    "name": "合阳县",
                                    "regionId": 610524
                                },
                                {
                                    "name": "澄城县",
                                    "regionId": 610525
                                },
                                {
                                    "name": "蒲城县",
                                    "regionId": 610526
                                },
                                {
                                    "name": "白水县",
                                    "regionId": 610527
                                },
                                {
                                    "name": "富平县",
                                    "regionId": 610528
                                },
                                {
                                    "name": "韩城市",
                                    "regionId": 610581
                                },
                                {
                                    "name": "华阴市",
                                    "regionId": 610582
                                }
                            ],
                            "name": "渭南市",
                            "regionId": 610500
                        },
                        {
                            "counties": [
                                {
                                    "name": "宝塔区",
                                    "regionId": 610602
                                },
                                {
                                    "name": "安塞区",
                                    "regionId": 610603
                                },
                                {
                                    "name": "延长县",
                                    "regionId": 610621
                                },
                                {
                                    "name": "延川县",
                                    "regionId": 610622
                                },
                                {
                                    "name": "志丹县",
                                    "regionId": 610625
                                },
                                {
                                    "name": "吴起县",
                                    "regionId": 610626
                                },
                                {
                                    "name": "甘泉县",
                                    "regionId": 610627
                                },
                                {
                                    "name": "富县",
                                    "regionId": 610628
                                },
                                {
                                    "name": "洛川县",
                                    "regionId": 610629
                                },
                                {
                                    "name": "宜川县",
                                    "regionId": 610630
                                },
                                {
                                    "name": "黄龙县",
                                    "regionId": 610631
                                },
                                {
                                    "name": "黄陵县",
                                    "regionId": 610632
                                },
                                {
                                    "name": "子长市",
                                    "regionId": 610681
                                }
                            ],
                            "name": "延安市",
                            "regionId": 610600
                        },
                        {
                            "counties": [
                                {
                                    "name": "汉台区",
                                    "regionId": 610702
                                },
                                {
                                    "name": "南郑区",
                                    "regionId": 610703
                                },
                                {
                                    "name": "城固县",
                                    "regionId": 610722
                                },
                                {
                                    "name": "洋县",
                                    "regionId": 610723
                                },
                                {
                                    "name": "西乡县",
                                    "regionId": 610724
                                },
                                {
                                    "name": "勉县",
                                    "regionId": 610725
                                },
                                {
                                    "name": "宁强县",
                                    "regionId": 610726
                                },
                                {
                                    "name": "略阳县",
                                    "regionId": 610727
                                },
                                {
                                    "name": "镇巴县",
                                    "regionId": 610728
                                },
                                {
                                    "name": "留坝县",
                                    "regionId": 610729
                                },
                                {
                                    "name": "佛坪县",
                                    "regionId": 610730
                                }
                            ],
                            "name": "汉中市",
                            "regionId": 610700
                        },
                        {
                            "counties": [
                                {
                                    "name": "榆阳区",
                                    "regionId": 610802
                                },
                                {
                                    "name": "横山区",
                                    "regionId": 610803
                                },
                                {
                                    "name": "府谷县",
                                    "regionId": 610822
                                },
                                {
                                    "name": "靖边县",
                                    "regionId": 610824
                                },
                                {
                                    "name": "定边县",
                                    "regionId": 610825
                                },
                                {
                                    "name": "绥德县",
                                    "regionId": 610826
                                },
                                {
                                    "name": "米脂县",
                                    "regionId": 610827
                                },
                                {
                                    "name": "佳县",
                                    "regionId": 610828
                                },
                                {
                                    "name": "吴堡县",
                                    "regionId": 610829
                                },
                                {
                                    "name": "清涧县",
                                    "regionId": 610830
                                },
                                {
                                    "name": "子洲县",
                                    "regionId": 610831
                                },
                                {
                                    "name": "神木市",
                                    "regionId": 610881
                                }
                            ],
                            "name": "榆林市",
                            "regionId": 610800
                        },
                        {
                            "counties": [
                                {
                                    "name": "汉滨区",
                                    "regionId": 610902
                                },
                                {
                                    "name": "汉阴县",
                                    "regionId": 610921
                                },
                                {
                                    "name": "石泉县",
                                    "regionId": 610922
                                },
                                {
                                    "name": "宁陕县",
                                    "regionId": 610923
                                },
                                {
                                    "name": "紫阳县",
                                    "regionId": 610924
                                },
                                {
                                    "name": "岚皋县",
                                    "regionId": 610925
                                },
                                {
                                    "name": "平利县",
                                    "regionId": 610926
                                },
                                {
                                    "name": "镇坪县",
                                    "regionId": 610927
                                },
                                {
                                    "name": "白河县",
                                    "regionId": 610929
                                },
                                {
                                    "name": "旬阳市",
                                    "regionId": 610981
                                }
                            ],
                            "name": "安康市",
                            "regionId": 610900
                        },
                        {
                            "counties": [
                                {
                                    "name": "商州区",
                                    "regionId": 611002
                                },
                                {
                                    "name": "洛南县",
                                    "regionId": 611021
                                },
                                {
                                    "name": "丹凤县",
                                    "regionId": 611022
                                },
                                {
                                    "name": "商南县",
                                    "regionId": 611023
                                },
                                {
                                    "name": "山阳县",
                                    "regionId": 611024
                                },
                                {
                                    "name": "镇安县",
                                    "regionId": 611025
                                },
                                {
                                    "name": "柞水县",
                                    "regionId": 611026
                                }
                            ],
                            "name": "商洛市",
                            "regionId": 611000
                        }
                    ],
                    "name": "陕西省",
                    "regionId": 610000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "城关区",
                                    "regionId": 620102
                                },
                                {
                                    "name": "七里河区",
                                    "regionId": 620103
                                },
                                {
                                    "name": "西固区",
                                    "regionId": 620104
                                },
                                {
                                    "name": "安宁区",
                                    "regionId": 620105
                                },
                                {
                                    "name": "红古区",
                                    "regionId": 620111
                                },
                                {
                                    "name": "永登县",
                                    "regionId": 620121
                                },
                                {
                                    "name": "皋兰县",
                                    "regionId": 620122
                                },
                                {
                                    "name": "榆中县",
                                    "regionId": 620123
                                },
                                {
                                    "name": "兰州新区",
                                    "regionId": 620171
                                }
                            ],
                            "name": "兰州市",
                            "regionId": 620100
                        },
                        {
                            "counties": [
                                {
                                    "name": "市辖区",
                                    "regionId": 620201
                                },
                                {
                                    "name": "雄关区",
                                    "regionId": 620290
                                },
                                {
                                    "name": "长城区",
                                    "regionId": 620291
                                },
                                {
                                    "name": "镜铁区",
                                    "regionId": 620292
                                },
                                {
                                    "name": "新城镇",
                                    "regionId": 620293
                                },
                                {
                                    "name": "峪泉镇",
                                    "regionId": 620294
                                },
                                {
                                    "name": "文殊镇",
                                    "regionId": 620295
                                }
                            ],
                            "name": "嘉峪关市",
                            "regionId": 620200
                        },
                        {
                            "counties": [
                                {
                                    "name": "金川区",
                                    "regionId": 620302
                                },
                                {
                                    "name": "永昌县",
                                    "regionId": 620321
                                }
                            ],
                            "name": "金昌市",
                            "regionId": 620300
                        },
                        {
                            "counties": [
                                {
                                    "name": "白银区",
                                    "regionId": 620402
                                },
                                {
                                    "name": "平川区",
                                    "regionId": 620403
                                },
                                {
                                    "name": "靖远县",
                                    "regionId": 620421
                                },
                                {
                                    "name": "会宁县",
                                    "regionId": 620422
                                },
                                {
                                    "name": "景泰县",
                                    "regionId": 620423
                                }
                            ],
                            "name": "白银市",
                            "regionId": 620400
                        },
                        {
                            "counties": [
                                {
                                    "name": "秦州区",
                                    "regionId": 620502
                                },
                                {
                                    "name": "麦积区",
                                    "regionId": 620503
                                },
                                {
                                    "name": "清水县",
                                    "regionId": 620521
                                },
                                {
                                    "name": "秦安县",
                                    "regionId": 620522
                                },
                                {
                                    "name": "甘谷县",
                                    "regionId": 620523
                                },
                                {
                                    "name": "武山县",
                                    "regionId": 620524
                                },
                                {
                                    "name": "张家川回族自治县",
                                    "regionId": 620525
                                }
                            ],
                            "name": "天水市",
                            "regionId": 620500
                        },
                        {
                            "counties": [
                                {
                                    "name": "凉州区",
                                    "regionId": 620602
                                },
                                {
                                    "name": "民勤县",
                                    "regionId": 620621
                                },
                                {
                                    "name": "古浪县",
                                    "regionId": 620622
                                },
                                {
                                    "name": "天祝藏族自治县",
                                    "regionId": 620623
                                }
                            ],
                            "name": "武威市",
                            "regionId": 620600
                        },
                        {
                            "counties": [
                                {
                                    "name": "甘州区",
                                    "regionId": 620702
                                },
                                {
                                    "name": "肃南裕固族自治县",
                                    "regionId": 620721
                                },
                                {
                                    "name": "民乐县",
                                    "regionId": 620722
                                },
                                {
                                    "name": "临泽县",
                                    "regionId": 620723
                                },
                                {
                                    "name": "高台县",
                                    "regionId": 620724
                                },
                                {
                                    "name": "山丹县",
                                    "regionId": 620725
                                }
                            ],
                            "name": "张掖市",
                            "regionId": 620700
                        },
                        {
                            "counties": [
                                {
                                    "name": "崆峒区",
                                    "regionId": 620802
                                },
                                {
                                    "name": "泾川县",
                                    "regionId": 620821
                                },
                                {
                                    "name": "灵台县",
                                    "regionId": 620822
                                },
                                {
                                    "name": "崇信县",
                                    "regionId": 620823
                                },
                                {
                                    "name": "庄浪县",
                                    "regionId": 620825
                                },
                                {
                                    "name": "静宁县",
                                    "regionId": 620826
                                },
                                {
                                    "name": "华亭市",
                                    "regionId": 620881
                                }
                            ],
                            "name": "平凉市",
                            "regionId": 620800
                        },
                        {
                            "counties": [
                                {
                                    "name": "肃州区",
                                    "regionId": 620902
                                },
                                {
                                    "name": "金塔县",
                                    "regionId": 620921
                                },
                                {
                                    "name": "瓜州县",
                                    "regionId": 620922
                                },
                                {
                                    "name": "肃北蒙古族自治县",
                                    "regionId": 620923
                                },
                                {
                                    "name": "阿克塞哈萨克族自治县",
                                    "regionId": 620924
                                },
                                {
                                    "name": "玉门市",
                                    "regionId": 620981
                                },
                                {
                                    "name": "敦煌市",
                                    "regionId": 620982
                                }
                            ],
                            "name": "酒泉市",
                            "regionId": 620900
                        },
                        {
                            "counties": [
                                {
                                    "name": "西峰区",
                                    "regionId": 621002
                                },
                                {
                                    "name": "庆城县",
                                    "regionId": 621021
                                },
                                {
                                    "name": "环县",
                                    "regionId": 621022
                                },
                                {
                                    "name": "华池县",
                                    "regionId": 621023
                                },
                                {
                                    "name": "合水县",
                                    "regionId": 621024
                                },
                                {
                                    "name": "正宁县",
                                    "regionId": 621025
                                },
                                {
                                    "name": "宁县",
                                    "regionId": 621026
                                },
                                {
                                    "name": "镇原县",
                                    "regionId": 621027
                                }
                            ],
                            "name": "庆阳市",
                            "regionId": 621000
                        },
                        {
                            "counties": [
                                {
                                    "name": "安定区",
                                    "regionId": 621102
                                },
                                {
                                    "name": "通渭县",
                                    "regionId": 621121
                                },
                                {
                                    "name": "陇西县",
                                    "regionId": 621122
                                },
                                {
                                    "name": "渭源县",
                                    "regionId": 621123
                                },
                                {
                                    "name": "临洮县",
                                    "regionId": 621124
                                },
                                {
                                    "name": "漳县",
                                    "regionId": 621125
                                },
                                {
                                    "name": "岷县",
                                    "regionId": 621126
                                }
                            ],
                            "name": "定西市",
                            "regionId": 621100
                        },
                        {
                            "counties": [
                                {
                                    "name": "武都区",
                                    "regionId": 621202
                                },
                                {
                                    "name": "成县",
                                    "regionId": 621221
                                },
                                {
                                    "name": "文县",
                                    "regionId": 621222
                                },
                                {
                                    "name": "宕昌县",
                                    "regionId": 621223
                                },
                                {
                                    "name": "康县",
                                    "regionId": 621224
                                },
                                {
                                    "name": "西和县",
                                    "regionId": 621225
                                },
                                {
                                    "name": "礼县",
                                    "regionId": 621226
                                },
                                {
                                    "name": "徽县",
                                    "regionId": 621227
                                },
                                {
                                    "name": "两当县",
                                    "regionId": 621228
                                }
                            ],
                            "name": "陇南市",
                            "regionId": 621200
                        },
                        {
                            "counties": [
                                {
                                    "name": "临夏市",
                                    "regionId": 622901
                                },
                                {
                                    "name": "临夏县",
                                    "regionId": 622921
                                },
                                {
                                    "name": "康乐县",
                                    "regionId": 622922
                                },
                                {
                                    "name": "永靖县",
                                    "regionId": 622923
                                },
                                {
                                    "name": "广河县",
                                    "regionId": 622924
                                },
                                {
                                    "name": "和政县",
                                    "regionId": 622925
                                },
                                {
                                    "name": "东乡族自治县",
                                    "regionId": 622926
                                },
                                {
                                    "name": "积石山保安族东乡族撒拉族自治县",
                                    "regionId": 622927
                                }
                            ],
                            "name": "临夏回族自治州",
                            "regionId": 622900
                        },
                        {
                            "counties": [
                                {
                                    "name": "合作市",
                                    "regionId": 623001
                                },
                                {
                                    "name": "临潭县",
                                    "regionId": 623021
                                },
                                {
                                    "name": "卓尼县",
                                    "regionId": 623022
                                },
                                {
                                    "name": "舟曲县",
                                    "regionId": 623023
                                },
                                {
                                    "name": "迭部县",
                                    "regionId": 623024
                                },
                                {
                                    "name": "玛曲县",
                                    "regionId": 623025
                                },
                                {
                                    "name": "碌曲县",
                                    "regionId": 623026
                                },
                                {
                                    "name": "夏河县",
                                    "regionId": 623027
                                }
                            ],
                            "name": "甘南藏族自治州",
                            "regionId": 623000
                        }
                    ],
                    "name": "甘肃省",
                    "regionId": 620000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "城东区",
                                    "regionId": 630102
                                },
                                {
                                    "name": "城中区",
                                    "regionId": 630103
                                },
                                {
                                    "name": "城西区",
                                    "regionId": 630104
                                },
                                {
                                    "name": "城北区",
                                    "regionId": 630105
                                },
                                {
                                    "name": "湟中区",
                                    "regionId": 630106
                                },
                                {
                                    "name": "大通回族土族自治县",
                                    "regionId": 630121
                                },
                                {
                                    "name": "湟源县",
                                    "regionId": 630123
                                }
                            ],
                            "name": "西宁市",
                            "regionId": 630100
                        },
                        {
                            "counties": [
                                {
                                    "name": "乐都区",
                                    "regionId": 630202
                                },
                                {
                                    "name": "平安区",
                                    "regionId": 630203
                                },
                                {
                                    "name": "民和回族土族自治县",
                                    "regionId": 630222
                                },
                                {
                                    "name": "互助土族自治县",
                                    "regionId": 630223
                                },
                                {
                                    "name": "化隆回族自治县",
                                    "regionId": 630224
                                },
                                {
                                    "name": "循化撒拉族自治县",
                                    "regionId": 630225
                                }
                            ],
                            "name": "海东市",
                            "regionId": 630200
                        },
                        {
                            "counties": [
                                {
                                    "name": "门源回族自治县",
                                    "regionId": 632221
                                },
                                {
                                    "name": "祁连县",
                                    "regionId": 632222
                                },
                                {
                                    "name": "海晏县",
                                    "regionId": 632223
                                },
                                {
                                    "name": "刚察县",
                                    "regionId": 632224
                                }
                            ],
                            "name": "海北藏族自治州",
                            "regionId": 632200
                        },
                        {
                            "counties": [
                                {
                                    "name": "同仁市",
                                    "regionId": 632301
                                },
                                {
                                    "name": "尖扎县",
                                    "regionId": 632322
                                },
                                {
                                    "name": "泽库县",
                                    "regionId": 632323
                                },
                                {
                                    "name": "河南蒙古族自治县",
                                    "regionId": 632324
                                }
                            ],
                            "name": "黄南藏族自治州",
                            "regionId": 632300
                        },
                        {
                            "counties": [
                                {
                                    "name": "共和县",
                                    "regionId": 632521
                                },
                                {
                                    "name": "同德县",
                                    "regionId": 632522
                                },
                                {
                                    "name": "贵德县",
                                    "regionId": 632523
                                },
                                {
                                    "name": "兴海县",
                                    "regionId": 632524
                                },
                                {
                                    "name": "贵南县",
                                    "regionId": 632525
                                }
                            ],
                            "name": "海南藏族自治州",
                            "regionId": 632500
                        },
                        {
                            "counties": [
                                {
                                    "name": "玛沁县",
                                    "regionId": 632621
                                },
                                {
                                    "name": "班玛县",
                                    "regionId": 632622
                                },
                                {
                                    "name": "甘德县",
                                    "regionId": 632623
                                },
                                {
                                    "name": "达日县",
                                    "regionId": 632624
                                },
                                {
                                    "name": "久治县",
                                    "regionId": 632625
                                },
                                {
                                    "name": "玛多县",
                                    "regionId": 632626
                                }
                            ],
                            "name": "果洛藏族自治州",
                            "regionId": 632600
                        },
                        {
                            "counties": [
                                {
                                    "name": "玉树市",
                                    "regionId": 632701
                                },
                                {
                                    "name": "杂多县",
                                    "regionId": 632722
                                },
                                {
                                    "name": "称多县",
                                    "regionId": 632723
                                },
                                {
                                    "name": "治多县",
                                    "regionId": 632724
                                },
                                {
                                    "name": "囊谦县",
                                    "regionId": 632725
                                },
                                {
                                    "name": "曲麻莱县",
                                    "regionId": 632726
                                }
                            ],
                            "name": "玉树藏族自治州",
                            "regionId": 632700
                        },
                        {
                            "counties": [
                                {
                                    "name": "格尔木市",
                                    "regionId": 632801
                                },
                                {
                                    "name": "德令哈市",
                                    "regionId": 632802
                                },
                                {
                                    "name": "茫崖市",
                                    "regionId": 632803
                                },
                                {
                                    "name": "乌兰县",
                                    "regionId": 632821
                                },
                                {
                                    "name": "都兰县",
                                    "regionId": 632822
                                },
                                {
                                    "name": "天峻县",
                                    "regionId": 632823
                                },
                                {
                                    "name": "大柴旦行政委员会",
                                    "regionId": 632857
                                }
                            ],
                            "name": "海西蒙古族藏族自治州",
                            "regionId": 632800
                        }
                    ],
                    "name": "青海省",
                    "regionId": 630000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "兴庆区",
                                    "regionId": 640104
                                },
                                {
                                    "name": "西夏区",
                                    "regionId": 640105
                                },
                                {
                                    "name": "金凤区",
                                    "regionId": 640106
                                },
                                {
                                    "name": "永宁县",
                                    "regionId": 640121
                                },
                                {
                                    "name": "贺兰县",
                                    "regionId": 640122
                                },
                                {
                                    "name": "灵武市",
                                    "regionId": 640181
                                }
                            ],
                            "name": "银川市",
                            "regionId": 640100
                        },
                        {
                            "counties": [
                                {
                                    "name": "大武口区",
                                    "regionId": 640202
                                },
                                {
                                    "name": "惠农区",
                                    "regionId": 640205
                                },
                                {
                                    "name": "平罗县",
                                    "regionId": 640221
                                }
                            ],
                            "name": "石嘴山市",
                            "regionId": 640200
                        },
                        {
                            "counties": [
                                {
                                    "name": "利通区",
                                    "regionId": 640302
                                },
                                {
                                    "name": "红寺堡区",
                                    "regionId": 640303
                                },
                                {
                                    "name": "盐池县",
                                    "regionId": 640323
                                },
                                {
                                    "name": "同心县",
                                    "regionId": 640324
                                },
                                {
                                    "name": "青铜峡市",
                                    "regionId": 640381
                                }
                            ],
                            "name": "吴忠市",
                            "regionId": 640300
                        },
                        {
                            "counties": [
                                {
                                    "name": "原州区",
                                    "regionId": 640402
                                },
                                {
                                    "name": "西吉县",
                                    "regionId": 640422
                                },
                                {
                                    "name": "隆德县",
                                    "regionId": 640423
                                },
                                {
                                    "name": "泾源县",
                                    "regionId": 640424
                                },
                                {
                                    "name": "彭阳县",
                                    "regionId": 640425
                                }
                            ],
                            "name": "固原市",
                            "regionId": 640400
                        },
                        {
                            "counties": [
                                {
                                    "name": "沙坡头区",
                                    "regionId": 640502
                                },
                                {
                                    "name": "中宁县",
                                    "regionId": 640521
                                },
                                {
                                    "name": "海原县",
                                    "regionId": 640522
                                }
                            ],
                            "name": "中卫市",
                            "regionId": 640500
                        }
                    ],
                    "name": "宁夏回族自治区",
                    "regionId": 640000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "天山区",
                                    "regionId": 650102
                                },
                                {
                                    "name": "沙依巴克区",
                                    "regionId": 650103
                                },
                                {
                                    "name": "新市区",
                                    "regionId": 650104
                                },
                                {
                                    "name": "水磨沟区",
                                    "regionId": 650105
                                },
                                {
                                    "name": "头屯河区",
                                    "regionId": 650106
                                },
                                {
                                    "name": "达坂城区",
                                    "regionId": 650107
                                },
                                {
                                    "name": "米东区",
                                    "regionId": 650109
                                },
                                {
                                    "name": "乌鲁木齐县",
                                    "regionId": 650121
                                }
                            ],
                            "name": "乌鲁木齐市",
                            "regionId": 650100
                        },
                        {
                            "counties": [
                                {
                                    "name": "独山子区",
                                    "regionId": 650202
                                },
                                {
                                    "name": "克拉玛依区",
                                    "regionId": 650203
                                },
                                {
                                    "name": "白碱滩区",
                                    "regionId": 650204
                                },
                                {
                                    "name": "乌尔禾区",
                                    "regionId": 650205
                                }
                            ],
                            "name": "克拉玛依市",
                            "regionId": 650200
                        },
                        {
                            "counties": [
                                {
                                    "name": "高昌区",
                                    "regionId": 650402
                                },
                                {
                                    "name": "鄯善县",
                                    "regionId": 650421
                                },
                                {
                                    "name": "托克逊县",
                                    "regionId": 650422
                                }
                            ],
                            "name": "吐鲁番市",
                            "regionId": 650400
                        },
                        {
                            "counties": [
                                {
                                    "name": "伊州区",
                                    "regionId": 650502
                                },
                                {
                                    "name": "巴里坤哈萨克自治县",
                                    "regionId": 650521
                                },
                                {
                                    "name": "伊吾县",
                                    "regionId": 650522
                                }
                            ],
                            "name": "哈密市",
                            "regionId": 650500
                        },
                        {
                            "counties": [
                                {
                                    "name": "昌吉市",
                                    "regionId": 652301
                                },
                                {
                                    "name": "阜康市",
                                    "regionId": 652302
                                },
                                {
                                    "name": "呼图壁县",
                                    "regionId": 652323
                                },
                                {
                                    "name": "玛纳斯县",
                                    "regionId": 652324
                                },
                                {
                                    "name": "奇台县",
                                    "regionId": 652325
                                },
                                {
                                    "name": "吉木萨尔县",
                                    "regionId": 652327
                                },
                                {
                                    "name": "木垒哈萨克自治县",
                                    "regionId": 652328
                                }
                            ],
                            "name": "昌吉回族自治州",
                            "regionId": 652300
                        },
                        {
                            "counties": [
                                {
                                    "name": "博乐市",
                                    "regionId": 652701
                                },
                                {
                                    "name": "阿拉山口市",
                                    "regionId": 652702
                                },
                                {
                                    "name": "精河县",
                                    "regionId": 652722
                                },
                                {
                                    "name": "温泉县",
                                    "regionId": 652723
                                }
                            ],
                            "name": "博尔塔拉蒙古自治州",
                            "regionId": 652700
                        },
                        {
                            "counties": [
                                {
                                    "name": "库尔勒市",
                                    "regionId": 652801
                                },
                                {
                                    "name": "轮台县",
                                    "regionId": 652822
                                },
                                {
                                    "name": "尉犁县",
                                    "regionId": 652823
                                },
                                {
                                    "name": "若羌县",
                                    "regionId": 652824
                                },
                                {
                                    "name": "且末县",
                                    "regionId": 652825
                                },
                                {
                                    "name": "焉耆回族自治县",
                                    "regionId": 652826
                                },
                                {
                                    "name": "和静县",
                                    "regionId": 652827
                                },
                                {
                                    "name": "和硕县",
                                    "regionId": 652828
                                },
                                {
                                    "name": "博湖县",
                                    "regionId": 652829
                                }
                            ],
                            "name": "巴音郭楞蒙古自治州",
                            "regionId": 652800
                        },
                        {
                            "counties": [
                                {
                                    "name": "阿克苏市",
                                    "regionId": 652901
                                },
                                {
                                    "name": "库车市",
                                    "regionId": 652902
                                },
                                {
                                    "name": "温宿县",
                                    "regionId": 652922
                                },
                                {
                                    "name": "沙雅县",
                                    "regionId": 652924
                                },
                                {
                                    "name": "新和县",
                                    "regionId": 652925
                                },
                                {
                                    "name": "拜城县",
                                    "regionId": 652926
                                },
                                {
                                    "name": "乌什县",
                                    "regionId": 652927
                                },
                                {
                                    "name": "阿瓦提县",
                                    "regionId": 652928
                                },
                                {
                                    "name": "柯坪县",
                                    "regionId": 652929
                                }
                            ],
                            "name": "阿克苏地区",
                            "regionId": 652900
                        },
                        {
                            "counties": [
                                {
                                    "name": "阿图什市",
                                    "regionId": 653001
                                },
                                {
                                    "name": "阿克陶县",
                                    "regionId": 653022
                                },
                                {
                                    "name": "阿合奇县",
                                    "regionId": 653023
                                },
                                {
                                    "name": "乌恰县",
                                    "regionId": 653024
                                }
                            ],
                            "name": "克孜勒苏柯尔克孜自治州",
                            "regionId": 653000
                        },
                        {
                            "counties": [
                                {
                                    "name": "喀什市",
                                    "regionId": 653101
                                },
                                {
                                    "name": "疏附县",
                                    "regionId": 653121
                                },
                                {
                                    "name": "疏勒县",
                                    "regionId": 653122
                                },
                                {
                                    "name": "英吉沙县",
                                    "regionId": 653123
                                },
                                {
                                    "name": "泽普县",
                                    "regionId": 653124
                                },
                                {
                                    "name": "莎车县",
                                    "regionId": 653125
                                },
                                {
                                    "name": "叶城县",
                                    "regionId": 653126
                                },
                                {
                                    "name": "麦盖提县",
                                    "regionId": 653127
                                },
                                {
                                    "name": "岳普湖县",
                                    "regionId": 653128
                                },
                                {
                                    "name": "伽师县",
                                    "regionId": 653129
                                },
                                {
                                    "name": "巴楚县",
                                    "regionId": 653130
                                },
                                {
                                    "name": "塔什库尔干塔吉克自治县",
                                    "regionId": 653131
                                }
                            ],
                            "name": "喀什地区",
                            "regionId": 653100
                        },
                        {
                            "counties": [
                                {
                                    "name": "和田市",
                                    "regionId": 653201
                                },
                                {
                                    "name": "和田县",
                                    "regionId": 653221
                                },
                                {
                                    "name": "墨玉县",
                                    "regionId": 653222
                                },
                                {
                                    "name": "皮山县",
                                    "regionId": 653223
                                },
                                {
                                    "name": "洛浦县",
                                    "regionId": 653224
                                },
                                {
                                    "name": "策勒县",
                                    "regionId": 653225
                                },
                                {
                                    "name": "于田县",
                                    "regionId": 653226
                                },
                                {
                                    "name": "民丰县",
                                    "regionId": 653227
                                }
                            ],
                            "name": "和田地区",
                            "regionId": 653200
                        },
                        {
                            "counties": [
                                {
                                    "name": "伊宁市",
                                    "regionId": 654002
                                },
                                {
                                    "name": "奎屯市",
                                    "regionId": 654003
                                },
                                {
                                    "name": "霍尔果斯市",
                                    "regionId": 654004
                                },
                                {
                                    "name": "伊宁县",
                                    "regionId": 654021
                                },
                                {
                                    "name": "察布查尔锡伯自治县",
                                    "regionId": 654022
                                },
                                {
                                    "name": "霍城县",
                                    "regionId": 654023
                                },
                                {
                                    "name": "巩留县",
                                    "regionId": 654024
                                },
                                {
                                    "name": "新源县",
                                    "regionId": 654025
                                },
                                {
                                    "name": "昭苏县",
                                    "regionId": 654026
                                },
                                {
                                    "name": "特克斯县",
                                    "regionId": 654027
                                },
                                {
                                    "name": "尼勒克县",
                                    "regionId": 654028
                                }
                            ],
                            "name": "伊犁哈萨克自治州",
                            "regionId": 654000
                        },
                        {
                            "counties": [
                                {
                                    "name": "塔城市",
                                    "regionId": 654201
                                },
                                {
                                    "name": "乌苏市",
                                    "regionId": 654202
                                },
                                {
                                    "name": "沙湾市",
                                    "regionId": 654203
                                },
                                {
                                    "name": "额敏县",
                                    "regionId": 654221
                                },
                                {
                                    "name": "托里县",
                                    "regionId": 654224
                                },
                                {
                                    "name": "裕民县",
                                    "regionId": 654225
                                },
                                {
                                    "name": "和布克赛尔蒙古自治县",
                                    "regionId": 654226
                                }
                            ],
                            "name": "塔城地区",
                            "regionId": 654200
                        },
                        {
                            "counties": [
                                {
                                    "name": "阿勒泰市",
                                    "regionId": 654301
                                },
                                {
                                    "name": "布尔津县",
                                    "regionId": 654321
                                },
                                {
                                    "name": "富蕴县",
                                    "regionId": 654322
                                },
                                {
                                    "name": "福海县",
                                    "regionId": 654323
                                },
                                {
                                    "name": "哈巴河县",
                                    "regionId": 654324
                                },
                                {
                                    "name": "青河县",
                                    "regionId": 654325
                                },
                                {
                                    "name": "吉木乃县",
                                    "regionId": 654326
                                }
                            ],
                            "name": "阿勒泰地区",
                            "regionId": 654300
                        },
                        {
                            "counties": [
                                {
                                    "name": "石河子市",
                                    "regionId": 659001
                                },
                                {
                                    "name": "阿拉尔市",
                                    "regionId": 659002
                                },
                                {
                                    "name": "图木舒克市",
                                    "regionId": 659003
                                },
                                {
                                    "name": "五家渠市",
                                    "regionId": 659004
                                },
                                {
                                    "name": "北屯市",
                                    "regionId": 659005
                                },
                                {
                                    "name": "铁门关市",
                                    "regionId": 659006
                                },
                                {
                                    "name": "双河市",
                                    "regionId": 659007
                                },
                                {
                                    "name": "可克达拉市",
                                    "regionId": 659008
                                },
                                {
                                    "name": "昆玉市",
                                    "regionId": 659009
                                },
                                {
                                    "name": "胡杨河市",
                                    "regionId": 659010
                                },
                                {
                                    "name": "新星市",
                                    "regionId": 659011
                                },
                                {
                                    "name": "白杨市",
                                    "regionId": 659012
                                }
                            ],
                            "name": "自治区直辖县级行政区划",
                            "regionId": 659000
                        }
                    ],
                    "name": "新疆维吾尔自治区",
                    "regionId": 650000
                }
            ]
        },
        {
            "api": 6,
            "part": "西南",
            "provinces": [
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "万州区",
                                    "regionId": 500101
                                },
                                {
                                    "name": "涪陵区",
                                    "regionId": 500102
                                },
                                {
                                    "name": "渝中区",
                                    "regionId": 500103
                                },
                                {
                                    "name": "大渡口区",
                                    "regionId": 500104
                                },
                                {
                                    "name": "江北区",
                                    "regionId": 500105
                                },
                                {
                                    "name": "沙坪坝区",
                                    "regionId": 500106
                                },
                                {
                                    "name": "九龙坡区",
                                    "regionId": 500107
                                },
                                {
                                    "name": "南岸区",
                                    "regionId": 500108
                                },
                                {
                                    "name": "北碚区",
                                    "regionId": 500109
                                },
                                {
                                    "name": "綦江区",
                                    "regionId": 500110
                                },
                                {
                                    "name": "大足区",
                                    "regionId": 500111
                                },
                                {
                                    "name": "渝北区",
                                    "regionId": 500112
                                },
                                {
                                    "name": "巴南区",
                                    "regionId": 500113
                                },
                                {
                                    "name": "黔江区",
                                    "regionId": 500114
                                },
                                {
                                    "name": "长寿区",
                                    "regionId": 500115
                                },
                                {
                                    "name": "江津区",
                                    "regionId": 500116
                                },
                                {
                                    "name": "合川区",
                                    "regionId": 500117
                                },
                                {
                                    "name": "永川区",
                                    "regionId": 500118
                                },
                                {
                                    "name": "南川区",
                                    "regionId": 500119
                                },
                                {
                                    "name": "璧山区",
                                    "regionId": 500120
                                },
                                {
                                    "name": "铜梁区",
                                    "regionId": 500151
                                },
                                {
                                    "name": "潼南区",
                                    "regionId": 500152
                                },
                                {
                                    "name": "荣昌区",
                                    "regionId": 500153
                                },
                                {
                                    "name": "开州区",
                                    "regionId": 500154
                                },
                                {
                                    "name": "梁平区",
                                    "regionId": 500155
                                },
                                {
                                    "name": "武隆区",
                                    "regionId": 500156
                                }
                            ],
                            "name": "重庆市",
                            "regionId": 500100
                        },
                        {
                            "counties": [
                                {
                                    "name": "城口县",
                                    "regionId": 500229
                                },
                                {
                                    "name": "丰都县",
                                    "regionId": 500230
                                },
                                {
                                    "name": "垫江县",
                                    "regionId": 500231
                                },
                                {
                                    "name": "忠县",
                                    "regionId": 500233
                                },
                                {
                                    "name": "云阳县",
                                    "regionId": 500235
                                },
                                {
                                    "name": "奉节县",
                                    "regionId": 500236
                                },
                                {
                                    "name": "巫山县",
                                    "regionId": 500237
                                },
                                {
                                    "name": "巫溪县",
                                    "regionId": 500238
                                },
                                {
                                    "name": "石柱土家族自治县",
                                    "regionId": 500240
                                },
                                {
                                    "name": "秀山土家族苗族自治县",
                                    "regionId": 500241
                                },
                                {
                                    "name": "酉阳土家族苗族自治县",
                                    "regionId": 500242
                                },
                                {
                                    "name": "彭水苗族土家族自治县",
                                    "regionId": 500243
                                }
                            ],
                            "name": "县",
                            "regionId": 500200
                        }
                    ],
                    "name": "重庆市",
                    "regionId": 500000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "锦江区",
                                    "regionId": 510104
                                },
                                {
                                    "name": "青羊区",
                                    "regionId": 510105
                                },
                                {
                                    "name": "金牛区",
                                    "regionId": 510106
                                },
                                {
                                    "name": "武侯区",
                                    "regionId": 510107
                                },
                                {
                                    "name": "成华区",
                                    "regionId": 510108
                                },
                                {
                                    "name": "龙泉驿区",
                                    "regionId": 510112
                                },
                                {
                                    "name": "青白江区",
                                    "regionId": 510113
                                },
                                {
                                    "name": "新都区",
                                    "regionId": 510114
                                },
                                {
                                    "name": "温江区",
                                    "regionId": 510115
                                },
                                {
                                    "name": "双流区",
                                    "regionId": 510116
                                },
                                {
                                    "name": "郫都区",
                                    "regionId": 510117
                                },
                                {
                                    "name": "新津区",
                                    "regionId": 510118
                                },
                                {
                                    "name": "金堂县",
                                    "regionId": 510121
                                },
                                {
                                    "name": "大邑县",
                                    "regionId": 510129
                                },
                                {
                                    "name": "蒲江县",
                                    "regionId": 510131
                                },
                                {
                                    "name": "都江堰市",
                                    "regionId": 510181
                                },
                                {
                                    "name": "彭州市",
                                    "regionId": 510182
                                },
                                {
                                    "name": "邛崃市",
                                    "regionId": 510183
                                },
                                {
                                    "name": "崇州市",
                                    "regionId": 510184
                                },
                                {
                                    "name": "简阳市",
                                    "regionId": 510185
                                },
                                {
                                    "name": "高新区",
                                    "regionId": 510191
                                }
                            ],
                            "name": "成都市",
                            "regionId": 510100
                        },
                        {
                            "counties": [
                                {
                                    "name": "自流井区",
                                    "regionId": 510302
                                },
                                {
                                    "name": "贡井区",
                                    "regionId": 510303
                                },
                                {
                                    "name": "大安区",
                                    "regionId": 510304
                                },
                                {
                                    "name": "沿滩区",
                                    "regionId": 510311
                                },
                                {
                                    "name": "荣县",
                                    "regionId": 510321
                                },
                                {
                                    "name": "富顺县",
                                    "regionId": 510322
                                }
                            ],
                            "name": "自贡市",
                            "regionId": 510300
                        },
                        {
                            "counties": [
                                {
                                    "name": "东区",
                                    "regionId": 510402
                                },
                                {
                                    "name": "西区",
                                    "regionId": 510403
                                },
                                {
                                    "name": "仁和区",
                                    "regionId": 510411
                                },
                                {
                                    "name": "米易县",
                                    "regionId": 510421
                                },
                                {
                                    "name": "盐边县",
                                    "regionId": 510422
                                }
                            ],
                            "name": "攀枝花市",
                            "regionId": 510400
                        },
                        {
                            "counties": [
                                {
                                    "name": "江阳区",
                                    "regionId": 510502
                                },
                                {
                                    "name": "纳溪区",
                                    "regionId": 510503
                                },
                                {
                                    "name": "龙马潭区",
                                    "regionId": 510504
                                },
                                {
                                    "name": "泸县",
                                    "regionId": 510521
                                },
                                {
                                    "name": "合江县",
                                    "regionId": 510522
                                },
                                {
                                    "name": "叙永县",
                                    "regionId": 510524
                                },
                                {
                                    "name": "古蔺县",
                                    "regionId": 510525
                                }
                            ],
                            "name": "泸州市",
                            "regionId": 510500
                        },
                        {
                            "counties": [
                                {
                                    "name": "旌阳区",
                                    "regionId": 510603
                                },
                                {
                                    "name": "罗江区",
                                    "regionId": 510604
                                },
                                {
                                    "name": "中江县",
                                    "regionId": 510623
                                },
                                {
                                    "name": "广汉市",
                                    "regionId": 510681
                                },
                                {
                                    "name": "什邡市",
                                    "regionId": 510682
                                },
                                {
                                    "name": "绵竹市",
                                    "regionId": 510683
                                }
                            ],
                            "name": "德阳市",
                            "regionId": 510600
                        },
                        {
                            "counties": [
                                {
                                    "name": "涪城区",
                                    "regionId": 510703
                                },
                                {
                                    "name": "游仙区",
                                    "regionId": 510704
                                },
                                {
                                    "name": "安州区",
                                    "regionId": 510705
                                },
                                {
                                    "name": "三台县",
                                    "regionId": 510722
                                },
                                {
                                    "name": "盐亭县",
                                    "regionId": 510723
                                },
                                {
                                    "name": "梓潼县",
                                    "regionId": 510725
                                },
                                {
                                    "name": "北川羌族自治县",
                                    "regionId": 510726
                                },
                                {
                                    "name": "平武县",
                                    "regionId": 510727
                                },
                                {
                                    "name": "江油市",
                                    "regionId": 510781
                                },
                                {
                                    "name": "高新区",
                                    "regionId": 510791
                                }
                            ],
                            "name": "绵阳市",
                            "regionId": 510700
                        },
                        {
                            "counties": [
                                {
                                    "name": "利州区",
                                    "regionId": 510802
                                },
                                {
                                    "name": "昭化区",
                                    "regionId": 510811
                                },
                                {
                                    "name": "朝天区",
                                    "regionId": 510812
                                },
                                {
                                    "name": "旺苍县",
                                    "regionId": 510821
                                },
                                {
                                    "name": "青川县",
                                    "regionId": 510822
                                },
                                {
                                    "name": "剑阁县",
                                    "regionId": 510823
                                },
                                {
                                    "name": "苍溪县",
                                    "regionId": 510824
                                }
                            ],
                            "name": "广元市",
                            "regionId": 510800
                        },
                        {
                            "counties": [
                                {
                                    "name": "船山区",
                                    "regionId": 510903
                                },
                                {
                                    "name": "安居区",
                                    "regionId": 510904
                                },
                                {
                                    "name": "蓬溪县",
                                    "regionId": 510921
                                },
                                {
                                    "name": "大英县",
                                    "regionId": 510923
                                },
                                {
                                    "name": "射洪市",
                                    "regionId": 510981
                                }
                            ],
                            "name": "遂宁市",
                            "regionId": 510900
                        },
                        {
                            "counties": [
                                {
                                    "name": "市中区",
                                    "regionId": 511002
                                },
                                {
                                    "name": "东兴区",
                                    "regionId": 511011
                                },
                                {
                                    "name": "威远县",
                                    "regionId": 511024
                                },
                                {
                                    "name": "资中县",
                                    "regionId": 511025
                                },
                                {
                                    "name": "隆昌市",
                                    "regionId": 511083
                                }
                            ],
                            "name": "内江市",
                            "regionId": 511000
                        },
                        {
                            "counties": [
                                {
                                    "name": "市中区",
                                    "regionId": 511102
                                },
                                {
                                    "name": "沙湾区",
                                    "regionId": 511111
                                },
                                {
                                    "name": "五通桥区",
                                    "regionId": 511112
                                },
                                {
                                    "name": "金口河区",
                                    "regionId": 511113
                                },
                                {
                                    "name": "犍为县",
                                    "regionId": 511123
                                },
                                {
                                    "name": "井研县",
                                    "regionId": 511124
                                },
                                {
                                    "name": "夹江县",
                                    "regionId": 511126
                                },
                                {
                                    "name": "沐川县",
                                    "regionId": 511129
                                },
                                {
                                    "name": "峨边彝族自治县",
                                    "regionId": 511132
                                },
                                {
                                    "name": "马边彝族自治县",
                                    "regionId": 511133
                                },
                                {
                                    "name": "峨眉山市",
                                    "regionId": 511181
                                }
                            ],
                            "name": "乐山市",
                            "regionId": 511100
                        },
                        {
                            "counties": [
                                {
                                    "name": "顺庆区",
                                    "regionId": 511302
                                },
                                {
                                    "name": "高坪区",
                                    "regionId": 511303
                                },
                                {
                                    "name": "嘉陵区",
                                    "regionId": 511304
                                },
                                {
                                    "name": "南部县",
                                    "regionId": 511321
                                },
                                {
                                    "name": "营山县",
                                    "regionId": 511322
                                },
                                {
                                    "name": "蓬安县",
                                    "regionId": 511323
                                },
                                {
                                    "name": "仪陇县",
                                    "regionId": 511324
                                },
                                {
                                    "name": "西充县",
                                    "regionId": 511325
                                },
                                {
                                    "name": "阆中市",
                                    "regionId": 511381
                                }
                            ],
                            "name": "南充市",
                            "regionId": 511300
                        },
                        {
                            "counties": [
                                {
                                    "name": "东坡区",
                                    "regionId": 511402
                                },
                                {
                                    "name": "彭山区",
                                    "regionId": 511403
                                },
                                {
                                    "name": "仁寿县",
                                    "regionId": 511421
                                },
                                {
                                    "name": "洪雅县",
                                    "regionId": 511423
                                },
                                {
                                    "name": "丹棱县",
                                    "regionId": 511424
                                },
                                {
                                    "name": "青神县",
                                    "regionId": 511425
                                }
                            ],
                            "name": "眉山市",
                            "regionId": 511400
                        },
                        {
                            "counties": [
                                {
                                    "name": "翠屏区",
                                    "regionId": 511502
                                },
                                {
                                    "name": "南溪区",
                                    "regionId": 511503
                                },
                                {
                                    "name": "叙州区",
                                    "regionId": 511504
                                },
                                {
                                    "name": "江安县",
                                    "regionId": 511523
                                },
                                {
                                    "name": "长宁县",
                                    "regionId": 511524
                                },
                                {
                                    "name": "高县",
                                    "regionId": 511525
                                },
                                {
                                    "name": "珙县",
                                    "regionId": 511526
                                },
                                {
                                    "name": "筠连县",
                                    "regionId": 511527
                                },
                                {
                                    "name": "兴文县",
                                    "regionId": 511528
                                },
                                {
                                    "name": "屏山县",
                                    "regionId": 511529
                                }
                            ],
                            "name": "宜宾市",
                            "regionId": 511500
                        },
                        {
                            "counties": [
                                {
                                    "name": "广安区",
                                    "regionId": 511602
                                },
                                {
                                    "name": "前锋区",
                                    "regionId": 511603
                                },
                                {
                                    "name": "岳池县",
                                    "regionId": 511621
                                },
                                {
                                    "name": "武胜县",
                                    "regionId": 511622
                                },
                                {
                                    "name": "邻水县",
                                    "regionId": 511623
                                },
                                {
                                    "name": "华蓥市",
                                    "regionId": 511681
                                }
                            ],
                            "name": "广安市",
                            "regionId": 511600
                        },
                        {
                            "counties": [
                                {
                                    "name": "通川区",
                                    "regionId": 511702
                                },
                                {
                                    "name": "达川区",
                                    "regionId": 511703
                                },
                                {
                                    "name": "宣汉县",
                                    "regionId": 511722
                                },
                                {
                                    "name": "开江县",
                                    "regionId": 511723
                                },
                                {
                                    "name": "大竹县",
                                    "regionId": 511724
                                },
                                {
                                    "name": "渠县",
                                    "regionId": 511725
                                },
                                {
                                    "name": "万源市",
                                    "regionId": 511781
                                }
                            ],
                            "name": "达州市",
                            "regionId": 511700
                        },
                        {
                            "counties": [
                                {
                                    "name": "雨城区",
                                    "regionId": 511802
                                },
                                {
                                    "name": "名山区",
                                    "regionId": 511803
                                },
                                {
                                    "name": "荥经县",
                                    "regionId": 511822
                                },
                                {
                                    "name": "汉源县",
                                    "regionId": 511823
                                },
                                {
                                    "name": "石棉县",
                                    "regionId": 511824
                                },
                                {
                                    "name": "天全县",
                                    "regionId": 511825
                                },
                                {
                                    "name": "芦山县",
                                    "regionId": 511826
                                },
                                {
                                    "name": "宝兴县",
                                    "regionId": 511827
                                }
                            ],
                            "name": "雅安市",
                            "regionId": 511800
                        },
                        {
                            "counties": [
                                {
                                    "name": "巴州区",
                                    "regionId": 511902
                                },
                                {
                                    "name": "恩阳区",
                                    "regionId": 511903
                                },
                                {
                                    "name": "通江县",
                                    "regionId": 511921
                                },
                                {
                                    "name": "南江县",
                                    "regionId": 511922
                                },
                                {
                                    "name": "平昌县",
                                    "regionId": 511923
                                },
                                {
                                    "name": "巴中经济开发区",
                                    "regionId": 511971
                                }
                            ],
                            "name": "巴中市",
                            "regionId": 511900
                        },
                        {
                            "counties": [
                                {
                                    "name": "雁江区",
                                    "regionId": 512002
                                },
                                {
                                    "name": "安岳县",
                                    "regionId": 512021
                                },
                                {
                                    "name": "乐至县",
                                    "regionId": 512022
                                }
                            ],
                            "name": "资阳市",
                            "regionId": 512000
                        },
                        {
                            "counties": [
                                {
                                    "name": "马尔康市",
                                    "regionId": 513201
                                },
                                {
                                    "name": "汶川县",
                                    "regionId": 513221
                                },
                                {
                                    "name": "理县",
                                    "regionId": 513222
                                },
                                {
                                    "name": "茂县",
                                    "regionId": 513223
                                },
                                {
                                    "name": "松潘县",
                                    "regionId": 513224
                                },
                                {
                                    "name": "九寨沟县",
                                    "regionId": 513225
                                },
                                {
                                    "name": "金川县",
                                    "regionId": 513226
                                },
                                {
                                    "name": "小金县",
                                    "regionId": 513227
                                },
                                {
                                    "name": "黑水县",
                                    "regionId": 513228
                                },
                                {
                                    "name": "壤塘县",
                                    "regionId": 513230
                                },
                                {
                                    "name": "阿坝县",
                                    "regionId": 513231
                                },
                                {
                                    "name": "若尔盖县",
                                    "regionId": 513232
                                },
                                {
                                    "name": "红原县",
                                    "regionId": 513233
                                }
                            ],
                            "name": "阿坝藏族羌族自治州",
                            "regionId": 513200
                        },
                        {
                            "counties": [
                                {
                                    "name": "康定市",
                                    "regionId": 513301
                                },
                                {
                                    "name": "泸定县",
                                    "regionId": 513322
                                },
                                {
                                    "name": "丹巴县",
                                    "regionId": 513323
                                },
                                {
                                    "name": "九龙县",
                                    "regionId": 513324
                                },
                                {
                                    "name": "雅江县",
                                    "regionId": 513325
                                },
                                {
                                    "name": "道孚县",
                                    "regionId": 513326
                                },
                                {
                                    "name": "炉霍县",
                                    "regionId": 513327
                                },
                                {
                                    "name": "甘孜县",
                                    "regionId": 513328
                                },
                                {
                                    "name": "新龙县",
                                    "regionId": 513329
                                },
                                {
                                    "name": "德格县",
                                    "regionId": 513330
                                },
                                {
                                    "name": "白玉县",
                                    "regionId": 513331
                                },
                                {
                                    "name": "石渠县",
                                    "regionId": 513332
                                },
                                {
                                    "name": "色达县",
                                    "regionId": 513333
                                },
                                {
                                    "name": "理塘县",
                                    "regionId": 513334
                                },
                                {
                                    "name": "巴塘县",
                                    "regionId": 513335
                                },
                                {
                                    "name": "乡城县",
                                    "regionId": 513336
                                },
                                {
                                    "name": "稻城县",
                                    "regionId": 513337
                                },
                                {
                                    "name": "得荣县",
                                    "regionId": 513338
                                }
                            ],
                            "name": "甘孜藏族自治州",
                            "regionId": 513300
                        },
                        {
                            "counties": [
                                {
                                    "name": "西昌市",
                                    "regionId": 513401
                                },
                                {
                                    "name": "会理市",
                                    "regionId": 513402
                                },
                                {
                                    "name": "木里藏族自治县",
                                    "regionId": 513422
                                },
                                {
                                    "name": "盐源县",
                                    "regionId": 513423
                                },
                                {
                                    "name": "德昌县",
                                    "regionId": 513424
                                },
                                {
                                    "name": "会东县",
                                    "regionId": 513426
                                },
                                {
                                    "name": "宁南县",
                                    "regionId": 513427
                                },
                                {
                                    "name": "普格县",
                                    "regionId": 513428
                                },
                                {
                                    "name": "布拖县",
                                    "regionId": 513429
                                },
                                {
                                    "name": "金阳县",
                                    "regionId": 513430
                                },
                                {
                                    "name": "昭觉县",
                                    "regionId": 513431
                                },
                                {
                                    "name": "喜德县",
                                    "regionId": 513432
                                },
                                {
                                    "name": "冕宁县",
                                    "regionId": 513433
                                },
                                {
                                    "name": "越西县",
                                    "regionId": 513434
                                },
                                {
                                    "name": "甘洛县",
                                    "regionId": 513435
                                },
                                {
                                    "name": "美姑县",
                                    "regionId": 513436
                                },
                                {
                                    "name": "雷波县",
                                    "regionId": 513437
                                }
                            ],
                            "name": "凉山彝族自治州",
                            "regionId": 513400
                        }
                    ],
                    "name": "四川省",
                    "regionId": 510000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "南明区",
                                    "regionId": 520102
                                },
                                {
                                    "name": "云岩区",
                                    "regionId": 520103
                                },
                                {
                                    "name": "花溪区",
                                    "regionId": 520111
                                },
                                {
                                    "name": "乌当区",
                                    "regionId": 520112
                                },
                                {
                                    "name": "白云区",
                                    "regionId": 520113
                                },
                                {
                                    "name": "观山湖区",
                                    "regionId": 520115
                                },
                                {
                                    "name": "开阳县",
                                    "regionId": 520121
                                },
                                {
                                    "name": "息烽县",
                                    "regionId": 520122
                                },
                                {
                                    "name": "修文县",
                                    "regionId": 520123
                                },
                                {
                                    "name": "清镇市",
                                    "regionId": 520181
                                }
                            ],
                            "name": "贵阳市",
                            "regionId": 520100
                        },
                        {
                            "counties": [
                                {
                                    "name": "钟山区",
                                    "regionId": 520201
                                },
                                {
                                    "name": "六枝特区",
                                    "regionId": 520203
                                },
                                {
                                    "name": "水城区",
                                    "regionId": 520204
                                },
                                {
                                    "name": "盘州市",
                                    "regionId": 520281
                                }
                            ],
                            "name": "六盘水市",
                            "regionId": 520200
                        },
                        {
                            "counties": [
                                {
                                    "name": "红花岗区",
                                    "regionId": 520302
                                },
                                {
                                    "name": "汇川区",
                                    "regionId": 520303
                                },
                                {
                                    "name": "播州区",
                                    "regionId": 520304
                                },
                                {
                                    "name": "桐梓县",
                                    "regionId": 520322
                                },
                                {
                                    "name": "绥阳县",
                                    "regionId": 520323
                                },
                                {
                                    "name": "正安县",
                                    "regionId": 520324
                                },
                                {
                                    "name": "道真仡佬族苗族自治县",
                                    "regionId": 520325
                                },
                                {
                                    "name": "务川仡佬族苗族自治县",
                                    "regionId": 520326
                                },
                                {
                                    "name": "凤冈县",
                                    "regionId": 520327
                                },
                                {
                                    "name": "湄潭县",
                                    "regionId": 520328
                                },
                                {
                                    "name": "余庆县",
                                    "regionId": 520329
                                },
                                {
                                    "name": "习水县",
                                    "regionId": 520330
                                },
                                {
                                    "name": "赤水市",
                                    "regionId": 520381
                                },
                                {
                                    "name": "仁怀市",
                                    "regionId": 520382
                                }
                            ],
                            "name": "遵义市",
                            "regionId": 520300
                        },
                        {
                            "counties": [
                                {
                                    "name": "西秀区",
                                    "regionId": 520402
                                },
                                {
                                    "name": "平坝区",
                                    "regionId": 520403
                                },
                                {
                                    "name": "普定县",
                                    "regionId": 520422
                                },
                                {
                                    "name": "镇宁布依族苗族自治县",
                                    "regionId": 520423
                                },
                                {
                                    "name": "关岭布依族苗族自治县",
                                    "regionId": 520424
                                },
                                {
                                    "name": "紫云苗族布依族自治县",
                                    "regionId": 520425
                                }
                            ],
                            "name": "安顺市",
                            "regionId": 520400
                        },
                        {
                            "counties": [
                                {
                                    "name": "七星关区",
                                    "regionId": 520502
                                },
                                {
                                    "name": "大方县",
                                    "regionId": 520521
                                },
                                {
                                    "name": "金沙县",
                                    "regionId": 520523
                                },
                                {
                                    "name": "织金县",
                                    "regionId": 520524
                                },
                                {
                                    "name": "纳雍县",
                                    "regionId": 520525
                                },
                                {
                                    "name": "威宁彝族回族苗族自治县",
                                    "regionId": 520526
                                },
                                {
                                    "name": "赫章县",
                                    "regionId": 520527
                                },
                                {
                                    "name": "黔西市",
                                    "regionId": 520581
                                }
                            ],
                            "name": "毕节市",
                            "regionId": 520500
                        },
                        {
                            "counties": [
                                {
                                    "name": "碧江区",
                                    "regionId": 520602
                                },
                                {
                                    "name": "万山区",
                                    "regionId": 520603
                                },
                                {
                                    "name": "江口县",
                                    "regionId": 520621
                                },
                                {
                                    "name": "玉屏侗族自治县",
                                    "regionId": 520622
                                },
                                {
                                    "name": "石阡县",
                                    "regionId": 520623
                                },
                                {
                                    "name": "思南县",
                                    "regionId": 520624
                                },
                                {
                                    "name": "印江土家族苗族自治县",
                                    "regionId": 520625
                                },
                                {
                                    "name": "德江县",
                                    "regionId": 520626
                                },
                                {
                                    "name": "沿河土家族自治县",
                                    "regionId": 520627
                                },
                                {
                                    "name": "松桃苗族自治县",
                                    "regionId": 520628
                                }
                            ],
                            "name": "铜仁市",
                            "regionId": 520600
                        },
                        {
                            "counties": [
                                {
                                    "name": "兴义市",
                                    "regionId": 522301
                                },
                                {
                                    "name": "兴仁市",
                                    "regionId": 522302
                                },
                                {
                                    "name": "普安县",
                                    "regionId": 522323
                                },
                                {
                                    "name": "晴隆县",
                                    "regionId": 522324
                                },
                                {
                                    "name": "贞丰县",
                                    "regionId": 522325
                                },
                                {
                                    "name": "望谟县",
                                    "regionId": 522326
                                },
                                {
                                    "name": "册亨县",
                                    "regionId": 522327
                                },
                                {
                                    "name": "安龙县",
                                    "regionId": 522328
                                }
                            ],
                            "name": "黔西南布依族苗族自治州",
                            "regionId": 522300
                        },
                        {
                            "counties": [
                                {
                                    "name": "凯里市",
                                    "regionId": 522601
                                },
                                {
                                    "name": "黄平县",
                                    "regionId": 522622
                                },
                                {
                                    "name": "施秉县",
                                    "regionId": 522623
                                },
                                {
                                    "name": "三穗县",
                                    "regionId": 522624
                                },
                                {
                                    "name": "镇远县",
                                    "regionId": 522625
                                },
                                {
                                    "name": "岑巩县",
                                    "regionId": 522626
                                },
                                {
                                    "name": "天柱县",
                                    "regionId": 522627
                                },
                                {
                                    "name": "锦屏县",
                                    "regionId": 522628
                                },
                                {
                                    "name": "剑河县",
                                    "regionId": 522629
                                },
                                {
                                    "name": "台江县",
                                    "regionId": 522630
                                },
                                {
                                    "name": "黎平县",
                                    "regionId": 522631
                                },
                                {
                                    "name": "榕江县",
                                    "regionId": 522632
                                },
                                {
                                    "name": "从江县",
                                    "regionId": 522633
                                },
                                {
                                    "name": "雷山县",
                                    "regionId": 522634
                                },
                                {
                                    "name": "麻江县",
                                    "regionId": 522635
                                },
                                {
                                    "name": "丹寨县",
                                    "regionId": 522636
                                }
                            ],
                            "name": "黔东南苗族侗族自治州",
                            "regionId": 522600
                        },
                        {
                            "counties": [
                                {
                                    "name": "都匀市",
                                    "regionId": 522701
                                },
                                {
                                    "name": "福泉市",
                                    "regionId": 522702
                                },
                                {
                                    "name": "荔波县",
                                    "regionId": 522722
                                },
                                {
                                    "name": "贵定县",
                                    "regionId": 522723
                                },
                                {
                                    "name": "瓮安县",
                                    "regionId": 522725
                                },
                                {
                                    "name": "独山县",
                                    "regionId": 522726
                                },
                                {
                                    "name": "平塘县",
                                    "regionId": 522727
                                },
                                {
                                    "name": "罗甸县",
                                    "regionId": 522728
                                },
                                {
                                    "name": "长顺县",
                                    "regionId": 522729
                                },
                                {
                                    "name": "龙里县",
                                    "regionId": 522730
                                },
                                {
                                    "name": "惠水县",
                                    "regionId": 522731
                                },
                                {
                                    "name": "三都水族自治县",
                                    "regionId": 522732
                                }
                            ],
                            "name": "黔南布依族苗族自治州",
                            "regionId": 522700
                        }
                    ],
                    "name": "贵州省",
                    "regionId": 520000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "五华区",
                                    "regionId": 530102
                                },
                                {
                                    "name": "盘龙区",
                                    "regionId": 530103
                                },
                                {
                                    "name": "官渡区",
                                    "regionId": 530111
                                },
                                {
                                    "name": "西山区",
                                    "regionId": 530112
                                },
                                {
                                    "name": "东川区",
                                    "regionId": 530113
                                },
                                {
                                    "name": "呈贡区",
                                    "regionId": 530114
                                },
                                {
                                    "name": "晋宁区",
                                    "regionId": 530115
                                },
                                {
                                    "name": "富民县",
                                    "regionId": 530124
                                },
                                {
                                    "name": "宜良县",
                                    "regionId": 530125
                                },
                                {
                                    "name": "石林彝族自治县",
                                    "regionId": 530126
                                },
                                {
                                    "name": "嵩明县",
                                    "regionId": 530127
                                },
                                {
                                    "name": "禄劝彝族苗族自治县",
                                    "regionId": 530128
                                },
                                {
                                    "name": "寻甸回族彝族自治县",
                                    "regionId": 530129
                                },
                                {
                                    "name": "安宁市",
                                    "regionId": 530181
                                }
                            ],
                            "name": "昆明市",
                            "regionId": 530100
                        },
                        {
                            "counties": [
                                {
                                    "name": "麒麟区",
                                    "regionId": 530302
                                },
                                {
                                    "name": "沾益区",
                                    "regionId": 530303
                                },
                                {
                                    "name": "马龙区",
                                    "regionId": 530304
                                },
                                {
                                    "name": "陆良县",
                                    "regionId": 530322
                                },
                                {
                                    "name": "师宗县",
                                    "regionId": 530323
                                },
                                {
                                    "name": "罗平县",
                                    "regionId": 530324
                                },
                                {
                                    "name": "富源县",
                                    "regionId": 530325
                                },
                                {
                                    "name": "会泽县",
                                    "regionId": 530326
                                },
                                {
                                    "name": "宣威市",
                                    "regionId": 530381
                                }
                            ],
                            "name": "曲靖市",
                            "regionId": 530300
                        },
                        {
                            "counties": [
                                {
                                    "name": "红塔区",
                                    "regionId": 530402
                                },
                                {
                                    "name": "江川区",
                                    "regionId": 530403
                                },
                                {
                                    "name": "通海县",
                                    "regionId": 530423
                                },
                                {
                                    "name": "华宁县",
                                    "regionId": 530424
                                },
                                {
                                    "name": "易门县",
                                    "regionId": 530425
                                },
                                {
                                    "name": "峨山彝族自治县",
                                    "regionId": 530426
                                },
                                {
                                    "name": "新平彝族傣族自治县",
                                    "regionId": 530427
                                },
                                {
                                    "name": "元江哈尼族彝族傣族自治县",
                                    "regionId": 530428
                                },
                                {
                                    "name": "澄江市",
                                    "regionId": 530481
                                }
                            ],
                            "name": "玉溪市",
                            "regionId": 530400
                        },
                        {
                            "counties": [
                                {
                                    "name": "隆阳区",
                                    "regionId": 530502
                                },
                                {
                                    "name": "施甸县",
                                    "regionId": 530521
                                },
                                {
                                    "name": "龙陵县",
                                    "regionId": 530523
                                },
                                {
                                    "name": "昌宁县",
                                    "regionId": 530524
                                },
                                {
                                    "name": "腾冲市",
                                    "regionId": 530581
                                }
                            ],
                            "name": "保山市",
                            "regionId": 530500
                        },
                        {
                            "counties": [
                                {
                                    "name": "昭阳区",
                                    "regionId": 530602
                                },
                                {
                                    "name": "鲁甸县",
                                    "regionId": 530621
                                },
                                {
                                    "name": "巧家县",
                                    "regionId": 530622
                                },
                                {
                                    "name": "盐津县",
                                    "regionId": 530623
                                },
                                {
                                    "name": "大关县",
                                    "regionId": 530624
                                },
                                {
                                    "name": "永善县",
                                    "regionId": 530625
                                },
                                {
                                    "name": "绥江县",
                                    "regionId": 530626
                                },
                                {
                                    "name": "镇雄县",
                                    "regionId": 530627
                                },
                                {
                                    "name": "彝良县",
                                    "regionId": 530628
                                },
                                {
                                    "name": "威信县",
                                    "regionId": 530629
                                },
                                {
                                    "name": "水富市",
                                    "regionId": 530681
                                }
                            ],
                            "name": "昭通市",
                            "regionId": 530600
                        },
                        {
                            "counties": [
                                {
                                    "name": "古城区",
                                    "regionId": 530702
                                },
                                {
                                    "name": "玉龙纳西族自治县",
                                    "regionId": 530721
                                },
                                {
                                    "name": "永胜县",
                                    "regionId": 530722
                                },
                                {
                                    "name": "华坪县",
                                    "regionId": 530723
                                },
                                {
                                    "name": "宁蒗彝族自治县",
                                    "regionId": 530724
                                }
                            ],
                            "name": "丽江市",
                            "regionId": 530700
                        },
                        {
                            "counties": [
                                {
                                    "name": "思茅区",
                                    "regionId": 530802
                                },
                                {
                                    "name": "宁洱哈尼族彝族自治县",
                                    "regionId": 530821
                                },
                                {
                                    "name": "墨江哈尼族自治县",
                                    "regionId": 530822
                                },
                                {
                                    "name": "景东彝族自治县",
                                    "regionId": 530823
                                },
                                {
                                    "name": "景谷傣族彝族自治县",
                                    "regionId": 530824
                                },
                                {
                                    "name": "镇沅彝族哈尼族拉祜族自治县",
                                    "regionId": 530825
                                },
                                {
                                    "name": "江城哈尼族彝族自治县",
                                    "regionId": 530826
                                },
                                {
                                    "name": "孟连傣族拉祜族佤族自治县",
                                    "regionId": 530827
                                },
                                {
                                    "name": "澜沧拉祜族自治县",
                                    "regionId": 530828
                                },
                                {
                                    "name": "西盟佤族自治县",
                                    "regionId": 530829
                                }
                            ],
                            "name": "普洱市",
                            "regionId": 530800
                        },
                        {
                            "counties": [
                                {
                                    "name": "临翔区",
                                    "regionId": 530902
                                },
                                {
                                    "name": "凤庆县",
                                    "regionId": 530921
                                },
                                {
                                    "name": "云县",
                                    "regionId": 530922
                                },
                                {
                                    "name": "永德县",
                                    "regionId": 530923
                                },
                                {
                                    "name": "镇康县",
                                    "regionId": 530924
                                },
                                {
                                    "name": "双江拉祜族佤族布朗族傣族自治县",
                                    "regionId": 530925
                                },
                                {
                                    "name": "耿马傣族佤族自治县",
                                    "regionId": 530926
                                },
                                {
                                    "name": "沧源佤族自治县",
                                    "regionId": 530927
                                }
                            ],
                            "name": "临沧市",
                            "regionId": 530900
                        },
                        {
                            "counties": [
                                {
                                    "name": "楚雄市",
                                    "regionId": 532301
                                },
                                {
                                    "name": "禄丰市",
                                    "regionId": 532302
                                },
                                {
                                    "name": "双柏县",
                                    "regionId": 532322
                                },
                                {
                                    "name": "牟定县",
                                    "regionId": 532323
                                },
                                {
                                    "name": "南华县",
                                    "regionId": 532324
                                },
                                {
                                    "name": "姚安县",
                                    "regionId": 532325
                                },
                                {
                                    "name": "大姚县",
                                    "regionId": 532326
                                },
                                {
                                    "name": "永仁县",
                                    "regionId": 532327
                                },
                                {
                                    "name": "元谋县",
                                    "regionId": 532328
                                },
                                {
                                    "name": "武定县",
                                    "regionId": 532329
                                }
                            ],
                            "name": "楚雄彝族自治州",
                            "regionId": 532300
                        },
                        {
                            "counties": [
                                {
                                    "name": "个旧市",
                                    "regionId": 532501
                                },
                                {
                                    "name": "开远市",
                                    "regionId": 532502
                                },
                                {
                                    "name": "蒙自市",
                                    "regionId": 532503
                                },
                                {
                                    "name": "弥勒市",
                                    "regionId": 532504
                                },
                                {
                                    "name": "屏边苗族自治县",
                                    "regionId": 532523
                                },
                                {
                                    "name": "建水县",
                                    "regionId": 532524
                                },
                                {
                                    "name": "石屏县",
                                    "regionId": 532525
                                },
                                {
                                    "name": "泸西县",
                                    "regionId": 532527
                                },
                                {
                                    "name": "元阳县",
                                    "regionId": 532528
                                },
                                {
                                    "name": "红河县",
                                    "regionId": 532529
                                },
                                {
                                    "name": "金平苗族瑶族傣族自治县",
                                    "regionId": 532530
                                },
                                {
                                    "name": "绿春县",
                                    "regionId": 532531
                                },
                                {
                                    "name": "河口瑶族自治县",
                                    "regionId": 532532
                                }
                            ],
                            "name": "红河哈尼族彝族自治州",
                            "regionId": 532500
                        },
                        {
                            "counties": [
                                {
                                    "name": "文山市",
                                    "regionId": 532601
                                },
                                {
                                    "name": "砚山县",
                                    "regionId": 532622
                                },
                                {
                                    "name": "西畴县",
                                    "regionId": 532623
                                },
                                {
                                    "name": "麻栗坡县",
                                    "regionId": 532624
                                },
                                {
                                    "name": "马关县",
                                    "regionId": 532625
                                },
                                {
                                    "name": "丘北县",
                                    "regionId": 532626
                                },
                                {
                                    "name": "广南县",
                                    "regionId": 532627
                                },
                                {
                                    "name": "富宁县",
                                    "regionId": 532628
                                }
                            ],
                            "name": "文山壮族苗族自治州",
                            "regionId": 532600
                        },
                        {
                            "counties": [
                                {
                                    "name": "景洪市",
                                    "regionId": 532801
                                },
                                {
                                    "name": "勐海县",
                                    "regionId": 532822
                                },
                                {
                                    "name": "勐腊县",
                                    "regionId": 532823
                                }
                            ],
                            "name": "西双版纳傣族自治州",
                            "regionId": 532800
                        },
                        {
                            "counties": [
                                {
                                    "name": "大理市",
                                    "regionId": 532901
                                },
                                {
                                    "name": "漾濞彝族自治县",
                                    "regionId": 532922
                                },
                                {
                                    "name": "祥云县",
                                    "regionId": 532923
                                },
                                {
                                    "name": "宾川县",
                                    "regionId": 532924
                                },
                                {
                                    "name": "弥渡县",
                                    "regionId": 532925
                                },
                                {
                                    "name": "南涧彝族自治县",
                                    "regionId": 532926
                                },
                                {
                                    "name": "巍山彝族回族自治县",
                                    "regionId": 532927
                                },
                                {
                                    "name": "永平县",
                                    "regionId": 532928
                                },
                                {
                                    "name": "云龙县",
                                    "regionId": 532929
                                },
                                {
                                    "name": "洱源县",
                                    "regionId": 532930
                                },
                                {
                                    "name": "剑川县",
                                    "regionId": 532931
                                },
                                {
                                    "name": "鹤庆县",
                                    "regionId": 532932
                                }
                            ],
                            "name": "大理白族自治州",
                            "regionId": 532900
                        },
                        {
                            "counties": [
                                {
                                    "name": "瑞丽市",
                                    "regionId": 533102
                                },
                                {
                                    "name": "芒市",
                                    "regionId": 533103
                                },
                                {
                                    "name": "梁河县",
                                    "regionId": 533122
                                },
                                {
                                    "name": "盈江县",
                                    "regionId": 533123
                                },
                                {
                                    "name": "陇川县",
                                    "regionId": 533124
                                }
                            ],
                            "name": "德宏傣族景颇族自治州",
                            "regionId": 533100
                        },
                        {
                            "counties": [
                                {
                                    "name": "泸水市",
                                    "regionId": 533301
                                },
                                {
                                    "name": "福贡县",
                                    "regionId": 533323
                                },
                                {
                                    "name": "贡山独龙族怒族自治县",
                                    "regionId": 533324
                                },
                                {
                                    "name": "兰坪白族普米族自治县",
                                    "regionId": 533325
                                }
                            ],
                            "name": "怒江傈僳族自治州",
                            "regionId": 533300
                        },
                        {
                            "counties": [
                                {
                                    "name": "香格里拉市",
                                    "regionId": 533401
                                },
                                {
                                    "name": "德钦县",
                                    "regionId": 533422
                                },
                                {
                                    "name": "维西傈僳族自治县",
                                    "regionId": 533423
                                }
                            ],
                            "name": "迪庆藏族自治州",
                            "regionId": 533400
                        }
                    ],
                    "name": "云南省",
                    "regionId": 530000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "城关区",
                                    "regionId": 540102
                                },
                                {
                                    "name": "堆龙德庆区",
                                    "regionId": 540103
                                },
                                {
                                    "name": "达孜区",
                                    "regionId": 540104
                                },
                                {
                                    "name": "林周县",
                                    "regionId": 540121
                                },
                                {
                                    "name": "当雄县",
                                    "regionId": 540122
                                },
                                {
                                    "name": "尼木县",
                                    "regionId": 540123
                                },
                                {
                                    "name": "曲水县",
                                    "regionId": 540124
                                },
                                {
                                    "name": "墨竹工卡县",
                                    "regionId": 540127
                                }
                            ],
                            "name": "拉萨市",
                            "regionId": 540100
                        },
                        {
                            "counties": [
                                {
                                    "name": "桑珠孜区",
                                    "regionId": 540202
                                },
                                {
                                    "name": "南木林县",
                                    "regionId": 540221
                                },
                                {
                                    "name": "江孜县",
                                    "regionId": 540222
                                },
                                {
                                    "name": "定日县",
                                    "regionId": 540223
                                },
                                {
                                    "name": "萨迦县",
                                    "regionId": 540224
                                },
                                {
                                    "name": "拉孜县",
                                    "regionId": 540225
                                },
                                {
                                    "name": "昂仁县",
                                    "regionId": 540226
                                },
                                {
                                    "name": "谢通门县",
                                    "regionId": 540227
                                },
                                {
                                    "name": "白朗县",
                                    "regionId": 540228
                                },
                                {
                                    "name": "仁布县",
                                    "regionId": 540229
                                },
                                {
                                    "name": "康马县",
                                    "regionId": 540230
                                },
                                {
                                    "name": "定结县",
                                    "regionId": 540231
                                },
                                {
                                    "name": "仲巴县",
                                    "regionId": 540232
                                },
                                {
                                    "name": "亚东县",
                                    "regionId": 540233
                                },
                                {
                                    "name": "吉隆县",
                                    "regionId": 540234
                                },
                                {
                                    "name": "聂拉木县",
                                    "regionId": 540235
                                },
                                {
                                    "name": "萨嘎县",
                                    "regionId": 540236
                                },
                                {
                                    "name": "岗巴县",
                                    "regionId": 540237
                                }
                            ],
                            "name": "日喀则市",
                            "regionId": 540200
                        },
                        {
                            "counties": [
                                {
                                    "name": "卡若区",
                                    "regionId": 540302
                                },
                                {
                                    "name": "江达县",
                                    "regionId": 540321
                                },
                                {
                                    "name": "贡觉县",
                                    "regionId": 540322
                                },
                                {
                                    "name": "类乌齐县",
                                    "regionId": 540323
                                },
                                {
                                    "name": "丁青县",
                                    "regionId": 540324
                                },
                                {
                                    "name": "察雅县",
                                    "regionId": 540325
                                },
                                {
                                    "name": "八宿县",
                                    "regionId": 540326
                                },
                                {
                                    "name": "左贡县",
                                    "regionId": 540327
                                },
                                {
                                    "name": "芒康县",
                                    "regionId": 540328
                                },
                                {
                                    "name": "洛隆县",
                                    "regionId": 540329
                                },
                                {
                                    "name": "边坝县",
                                    "regionId": 540330
                                }
                            ],
                            "name": "昌都市",
                            "regionId": 540300
                        },
                        {
                            "counties": [
                                {
                                    "name": "巴宜区",
                                    "regionId": 540402
                                },
                                {
                                    "name": "工布江达县",
                                    "regionId": 540421
                                },
                                {
                                    "name": "墨脱县",
                                    "regionId": 540423
                                },
                                {
                                    "name": "波密县",
                                    "regionId": 540424
                                },
                                {
                                    "name": "察隅县",
                                    "regionId": 540425
                                },
                                {
                                    "name": "朗县",
                                    "regionId": 540426
                                },
                                {
                                    "name": "米林市",
                                    "regionId": 540481
                                }
                            ],
                            "name": "林芝市",
                            "regionId": 540400
                        },
                        {
                            "counties": [
                                {
                                    "name": "乃东区",
                                    "regionId": 540502
                                },
                                {
                                    "name": "扎囊县",
                                    "regionId": 540521
                                },
                                {
                                    "name": "贡嘎县",
                                    "regionId": 540522
                                },
                                {
                                    "name": "桑日县",
                                    "regionId": 540523
                                },
                                {
                                    "name": "琼结县",
                                    "regionId": 540524
                                },
                                {
                                    "name": "曲松县",
                                    "regionId": 540525
                                },
                                {
                                    "name": "措美县",
                                    "regionId": 540526
                                },
                                {
                                    "name": "洛扎县",
                                    "regionId": 540527
                                },
                                {
                                    "name": "加查县",
                                    "regionId": 540528
                                },
                                {
                                    "name": "隆子县",
                                    "regionId": 540529
                                },
                                {
                                    "name": "浪卡子县",
                                    "regionId": 540531
                                },
                                {
                                    "name": "错那市",
                                    "regionId": 540581
                                }
                            ],
                            "name": "山南市",
                            "regionId": 540500
                        },
                        {
                            "counties": [
                                {
                                    "name": "色尼区",
                                    "regionId": 540602
                                },
                                {
                                    "name": "嘉黎县",
                                    "regionId": 540621
                                },
                                {
                                    "name": "比如县",
                                    "regionId": 540622
                                },
                                {
                                    "name": "聂荣县",
                                    "regionId": 540623
                                },
                                {
                                    "name": "安多县",
                                    "regionId": 540624
                                },
                                {
                                    "name": "申扎县",
                                    "regionId": 540625
                                },
                                {
                                    "name": "索县",
                                    "regionId": 540626
                                },
                                {
                                    "name": "班戈县",
                                    "regionId": 540627
                                },
                                {
                                    "name": "巴青县",
                                    "regionId": 540628
                                },
                                {
                                    "name": "尼玛县",
                                    "regionId": 540629
                                },
                                {
                                    "name": "双湖县",
                                    "regionId": 540630
                                }
                            ],
                            "name": "那曲市",
                            "regionId": 540600
                        },
                        {
                            "counties": [
                                {
                                    "name": "普兰县",
                                    "regionId": 542521
                                },
                                {
                                    "name": "札达县",
                                    "regionId": 542522
                                },
                                {
                                    "name": "噶尔县",
                                    "regionId": 542523
                                },
                                {
                                    "name": "日土县",
                                    "regionId": 542524
                                },
                                {
                                    "name": "革吉县",
                                    "regionId": 542525
                                },
                                {
                                    "name": "改则县",
                                    "regionId": 542526
                                },
                                {
                                    "name": "措勤县",
                                    "regionId": 542527
                                }
                            ],
                            "name": "阿里地区",
                            "regionId": 542500
                        }
                    ],
                    "name": "西藏自治区",
                    "regionId": 540000
                }
            ]
        },
        {
            "api": 7,
            "part": "港澳台",
            "provinces": [
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "中正区",
                                    "regionId": 710101
                                },
                                {
                                    "name": "大同区",
                                    "regionId": 710102
                                },
                                {
                                    "name": "中山区",
                                    "regionId": 710103
                                },
                                {
                                    "name": "松山区",
                                    "regionId": 710104
                                },
                                {
                                    "name": "大安区",
                                    "regionId": 710105
                                },
                                {
                                    "name": "万华区",
                                    "regionId": 710106
                                },
                                {
                                    "name": "信义区",
                                    "regionId": 710107
                                },
                                {
                                    "name": "士林区",
                                    "regionId": 710108
                                },
                                {
                                    "name": "北投区",
                                    "regionId": 710109
                                },
                                {
                                    "name": "内湖区",
                                    "regionId": 710110
                                },
                                {
                                    "name": "南港区",
                                    "regionId": 710111
                                },
                                {
                                    "name": "文山区",
                                    "regionId": 710112
                                },
                                {
                                    "name": "其它区",
                                    "regionId": 710199
                                }
                            ],
                            "name": "台北市",
                            "regionId": 710100
                        },
                        {
                            "counties": [
                                {
                                    "name": "新兴区",
                                    "regionId": 710201
                                },
                                {
                                    "name": "前金区",
                                    "regionId": 710202
                                },
                                {
                                    "name": "芩雅区",
                                    "regionId": 710203
                                },
                                {
                                    "name": "盐埕区",
                                    "regionId": 710204
                                },
                                {
                                    "name": "鼓山区",
                                    "regionId": 710205
                                },
                                {
                                    "name": "旗津区",
                                    "regionId": 710206
                                },
                                {
                                    "name": "前镇区",
                                    "regionId": 710207
                                },
                                {
                                    "name": "三民区",
                                    "regionId": 710208
                                },
                                {
                                    "name": "左营区",
                                    "regionId": 710209
                                },
                                {
                                    "name": "楠梓区",
                                    "regionId": 710210
                                },
                                {
                                    "name": "小港区",
                                    "regionId": 710211
                                },
                                {
                                    "name": "苓雅区",
                                    "regionId": 710241
                                },
                                {
                                    "name": "仁武区",
                                    "regionId": 710242
                                },
                                {
                                    "name": "大社区",
                                    "regionId": 710243
                                },
                                {
                                    "name": "冈山区",
                                    "regionId": 710244
                                },
                                {
                                    "name": "路竹区",
                                    "regionId": 710245
                                },
                                {
                                    "name": "阿莲区",
                                    "regionId": 710246
                                },
                                {
                                    "name": "田寮区",
                                    "regionId": 710247
                                },
                                {
                                    "name": "燕巢区",
                                    "regionId": 710248
                                },
                                {
                                    "name": "桥头区",
                                    "regionId": 710249
                                },
                                {
                                    "name": "梓官区",
                                    "regionId": 710250
                                },
                                {
                                    "name": "弥陀区",
                                    "regionId": 710251
                                },
                                {
                                    "name": "永安区",
                                    "regionId": 710252
                                },
                                {
                                    "name": "湖内区",
                                    "regionId": 710253
                                },
                                {
                                    "name": "凤山区",
                                    "regionId": 710254
                                },
                                {
                                    "name": "大寮区",
                                    "regionId": 710255
                                },
                                {
                                    "name": "林园区",
                                    "regionId": 710256
                                },
                                {
                                    "name": "鸟松区",
                                    "regionId": 710257
                                },
                                {
                                    "name": "大树区",
                                    "regionId": 710258
                                },
                                {
                                    "name": "旗山区",
                                    "regionId": 710259
                                },
                                {
                                    "name": "美浓区",
                                    "regionId": 710260
                                },
                                {
                                    "name": "六龟区",
                                    "regionId": 710261
                                },
                                {
                                    "name": "内门区",
                                    "regionId": 710262
                                },
                                {
                                    "name": "杉林区",
                                    "regionId": 710263
                                },
                                {
                                    "name": "甲仙区",
                                    "regionId": 710264
                                },
                                {
                                    "name": "桃源区",
                                    "regionId": 710265
                                },
                                {
                                    "name": "那玛夏区",
                                    "regionId": 710266
                                },
                                {
                                    "name": "茂林区",
                                    "regionId": 710267
                                },
                                {
                                    "name": "茄萣区",
                                    "regionId": 710268
                                },
                                {
                                    "name": "其它区",
                                    "regionId": 710299
                                }
                            ],
                            "name": "高雄市",
                            "regionId": 710200
                        },
                        {
                            "counties": [
                                {
                                    "name": "中西区",
                                    "regionId": 710301
                                },
                                {
                                    "name": "东区",
                                    "regionId": 710302
                                },
                                {
                                    "name": "南区",
                                    "regionId": 710303
                                },
                                {
                                    "name": "北区",
                                    "regionId": 710304
                                },
                                {
                                    "name": "安平区",
                                    "regionId": 710305
                                },
                                {
                                    "name": "安南区",
                                    "regionId": 710306
                                },
                                {
                                    "name": "永康区",
                                    "regionId": 710339
                                },
                                {
                                    "name": "归仁区",
                                    "regionId": 710340
                                },
                                {
                                    "name": "新化区",
                                    "regionId": 710341
                                },
                                {
                                    "name": "左镇区",
                                    "regionId": 710342
                                },
                                {
                                    "name": "玉井区",
                                    "regionId": 710343
                                },
                                {
                                    "name": "楠西区",
                                    "regionId": 710344
                                },
                                {
                                    "name": "南化区",
                                    "regionId": 710345
                                },
                                {
                                    "name": "仁德区",
                                    "regionId": 710346
                                },
                                {
                                    "name": "关庙区",
                                    "regionId": 710347
                                },
                                {
                                    "name": "龙崎区",
                                    "regionId": 710348
                                },
                                {
                                    "name": "官田区",
                                    "regionId": 710349
                                },
                                {
                                    "name": "麻豆区",
                                    "regionId": 710350
                                },
                                {
                                    "name": "佳里区",
                                    "regionId": 710351
                                },
                                {
                                    "name": "西港区",
                                    "regionId": 710352
                                },
                                {
                                    "name": "七股区",
                                    "regionId": 710353
                                },
                                {
                                    "name": "将军区",
                                    "regionId": 710354
                                },
                                {
                                    "name": "学甲区",
                                    "regionId": 710355
                                },
                                {
                                    "name": "北门区",
                                    "regionId": 710356
                                },
                                {
                                    "name": "新营区",
                                    "regionId": 710357
                                },
                                {
                                    "name": "后壁区",
                                    "regionId": 710358
                                },
                                {
                                    "name": "白河区",
                                    "regionId": 710359
                                },
                                {
                                    "name": "东山区",
                                    "regionId": 710360
                                },
                                {
                                    "name": "六甲区",
                                    "regionId": 710361
                                },
                                {
                                    "name": "下营区",
                                    "regionId": 710362
                                },
                                {
                                    "name": "柳营区",
                                    "regionId": 710363
                                },
                                {
                                    "name": "盐水区",
                                    "regionId": 710364
                                },
                                {
                                    "name": "善化区",
                                    "regionId": 710365
                                },
                                {
                                    "name": "大内区",
                                    "regionId": 710366
                                },
                                {
                                    "name": "山上区",
                                    "regionId": 710367
                                },
                                {
                                    "name": "新市区",
                                    "regionId": 710368
                                },
                                {
                                    "name": "安定区",
                                    "regionId": 710369
                                },
                                {
                                    "name": "其它区",
                                    "regionId": 710399
                                }
                            ],
                            "name": "台南市",
                            "regionId": 710300
                        },
                        {
                            "counties": [
                                {
                                    "name": "中区",
                                    "regionId": 710401
                                },
                                {
                                    "name": "东区",
                                    "regionId": 710402
                                },
                                {
                                    "name": "南区",
                                    "regionId": 710403
                                },
                                {
                                    "name": "西区",
                                    "regionId": 710404
                                },
                                {
                                    "name": "北区",
                                    "regionId": 710405
                                },
                                {
                                    "name": "北屯区",
                                    "regionId": 710406
                                },
                                {
                                    "name": "西屯区",
                                    "regionId": 710407
                                },
                                {
                                    "name": "南屯区",
                                    "regionId": 710408
                                },
                                {
                                    "name": "太平区",
                                    "regionId": 710431
                                },
                                {
                                    "name": "大里区",
                                    "regionId": 710432
                                },
                                {
                                    "name": "雾峰区",
                                    "regionId": 710433
                                },
                                {
                                    "name": "乌日区",
                                    "regionId": 710434
                                },
                                {
                                    "name": "丰原区",
                                    "regionId": 710435
                                },
                                {
                                    "name": "后里区",
                                    "regionId": 710436
                                },
                                {
                                    "name": "石冈区",
                                    "regionId": 710437
                                },
                                {
                                    "name": "东势区",
                                    "regionId": 710438
                                },
                                {
                                    "name": "和平区",
                                    "regionId": 710439
                                },
                                {
                                    "name": "新社区",
                                    "regionId": 710440
                                },
                                {
                                    "name": "潭子区",
                                    "regionId": 710441
                                },
                                {
                                    "name": "大雅区",
                                    "regionId": 710442
                                },
                                {
                                    "name": "神冈区",
                                    "regionId": 710443
                                },
                                {
                                    "name": "大肚区",
                                    "regionId": 710444
                                },
                                {
                                    "name": "沙鹿区",
                                    "regionId": 710445
                                },
                                {
                                    "name": "龙井区",
                                    "regionId": 710446
                                },
                                {
                                    "name": "梧栖区",
                                    "regionId": 710447
                                },
                                {
                                    "name": "清水区",
                                    "regionId": 710448
                                },
                                {
                                    "name": "大甲区",
                                    "regionId": 710449
                                },
                                {
                                    "name": "外埔区",
                                    "regionId": 710450
                                },
                                {
                                    "name": "大安区",
                                    "regionId": 710451
                                },
                                {
                                    "name": "其它区",
                                    "regionId": 710499
                                }
                            ],
                            "name": "台中市",
                            "regionId": 710400
                        },
                        {
                            "counties": [
                                {
                                    "name": "金沙镇",
                                    "regionId": 710507
                                },
                                {
                                    "name": "金湖镇",
                                    "regionId": 710508
                                },
                                {
                                    "name": "金宁乡",
                                    "regionId": 710509
                                },
                                {
                                    "name": "金城镇",
                                    "regionId": 710510
                                },
                                {
                                    "name": "烈屿乡",
                                    "regionId": 710511
                                },
                                {
                                    "name": "乌坵乡",
                                    "regionId": 710512
                                }
                            ],
                            "name": "金门县",
                            "regionId": 710500
                        },
                        {
                            "counties": [
                                {
                                    "name": "南投市",
                                    "regionId": 710614
                                },
                                {
                                    "name": "中寮乡",
                                    "regionId": 710615
                                },
                                {
                                    "name": "草屯镇",
                                    "regionId": 710616
                                },
                                {
                                    "name": "国姓乡",
                                    "regionId": 710617
                                },
                                {
                                    "name": "埔里镇",
                                    "regionId": 710618
                                },
                                {
                                    "name": "仁爱乡",
                                    "regionId": 710619
                                },
                                {
                                    "name": "名间乡",
                                    "regionId": 710620
                                },
                                {
                                    "name": "集集镇",
                                    "regionId": 710621
                                },
                                {
                                    "name": "水里乡",
                                    "regionId": 710622
                                },
                                {
                                    "name": "鱼池乡",
                                    "regionId": 710623
                                },
                                {
                                    "name": "信义乡",
                                    "regionId": 710624
                                },
                                {
                                    "name": "竹山镇",
                                    "regionId": 710625
                                },
                                {
                                    "name": "鹿谷乡",
                                    "regionId": 710626
                                }
                            ],
                            "name": "南投县",
                            "regionId": 710600
                        },
                        {
                            "counties": [
                                {
                                    "name": "仁爱区",
                                    "regionId": 710701
                                },
                                {
                                    "name": "信义区",
                                    "regionId": 710702
                                },
                                {
                                    "name": "中正区",
                                    "regionId": 710703
                                },
                                {
                                    "name": "中山区",
                                    "regionId": 710704
                                },
                                {
                                    "name": "安乐区",
                                    "regionId": 710705
                                },
                                {
                                    "name": "暖暖区",
                                    "regionId": 710706
                                },
                                {
                                    "name": "七堵区",
                                    "regionId": 710707
                                },
                                {
                                    "name": "其它区",
                                    "regionId": 710799
                                }
                            ],
                            "name": "基隆市",
                            "regionId": 710700
                        },
                        {
                            "counties": [
                                {
                                    "name": "东区",
                                    "regionId": 710801
                                },
                                {
                                    "name": "北区",
                                    "regionId": 710802
                                },
                                {
                                    "name": "香山区",
                                    "regionId": 710803
                                },
                                {
                                    "name": "其它区",
                                    "regionId": 710899
                                }
                            ],
                            "name": "新竹市",
                            "regionId": 710800
                        },
                        {
                            "counties": [
                                {
                                    "name": "东区",
                                    "regionId": 710901
                                },
                                {
                                    "name": "西区",
                                    "regionId": 710902
                                },
                                {
                                    "name": "其它区",
                                    "regionId": 710999
                                }
                            ],
                            "name": "嘉义市",
                            "regionId": 710900
                        },
                        {
                            "counties": [
                                {
                                    "name": "万里区",
                                    "regionId": 711130
                                },
                                {
                                    "name": "板桥区",
                                    "regionId": 711132
                                },
                                {
                                    "name": "汐止区",
                                    "regionId": 711133
                                },
                                {
                                    "name": "深坑区",
                                    "regionId": 711134
                                },
                                {
                                    "name": "石碇区",
                                    "regionId": 711135
                                },
                                {
                                    "name": "瑞芳区",
                                    "regionId": 711136
                                },
                                {
                                    "name": "平溪区",
                                    "regionId": 711137
                                },
                                {
                                    "name": "双溪区",
                                    "regionId": 711138
                                },
                                {
                                    "name": "贡寮区",
                                    "regionId": 711139
                                },
                                {
                                    "name": "新店区",
                                    "regionId": 711140
                                },
                                {
                                    "name": "坪林区",
                                    "regionId": 711141
                                },
                                {
                                    "name": "乌来区",
                                    "regionId": 711142
                                },
                                {
                                    "name": "永和区",
                                    "regionId": 711143
                                },
                                {
                                    "name": "中和区",
                                    "regionId": 711144
                                },
                                {
                                    "name": "土城区",
                                    "regionId": 711145
                                },
                                {
                                    "name": "三峡区",
                                    "regionId": 711146
                                },
                                {
                                    "name": "树林区",
                                    "regionId": 711147
                                },
                                {
                                    "name": "莺歌区",
                                    "regionId": 711148
                                },
                                {
                                    "name": "三重区",
                                    "regionId": 711149
                                },
                                {
                                    "name": "新庄区",
                                    "regionId": 711150
                                },
                                {
                                    "name": "泰山区",
                                    "regionId": 711151
                                },
                                {
                                    "name": "林口区",
                                    "regionId": 711152
                                },
                                {
                                    "name": "芦洲区",
                                    "regionId": 711153
                                },
                                {
                                    "name": "五股区",
                                    "regionId": 711154
                                },
                                {
                                    "name": "八里区",
                                    "regionId": 711155
                                },
                                {
                                    "name": "淡水区",
                                    "regionId": 711156
                                },
                                {
                                    "name": "三芝区",
                                    "regionId": 711157
                                },
                                {
                                    "name": "石门区",
                                    "regionId": 711158
                                }
                            ],
                            "name": "新北市",
                            "regionId": 711100
                        },
                        {
                            "counties": [
                                {
                                    "name": "宜兰市",
                                    "regionId": 711287
                                },
                                {
                                    "name": "头城镇",
                                    "regionId": 711288
                                },
                                {
                                    "name": "礁溪乡",
                                    "regionId": 711289
                                },
                                {
                                    "name": "壮围乡",
                                    "regionId": 711290
                                },
                                {
                                    "name": "员山乡",
                                    "regionId": 711291
                                },
                                {
                                    "name": "罗东镇",
                                    "regionId": 711292
                                },
                                {
                                    "name": "三星乡",
                                    "regionId": 711293
                                },
                                {
                                    "name": "大同乡",
                                    "regionId": 711294
                                },
                                {
                                    "name": "五结乡",
                                    "regionId": 711295
                                },
                                {
                                    "name": "冬山乡",
                                    "regionId": 711296
                                },
                                {
                                    "name": "苏澳镇",
                                    "regionId": 711297
                                },
                                {
                                    "name": "南澳乡",
                                    "regionId": 711298
                                },
                                {
                                    "name": "钓鱼台",
                                    "regionId": 711299
                                }
                            ],
                            "name": "宜兰县",
                            "regionId": 711200
                        },
                        {
                            "counties": [
                                {
                                    "name": "竹北市",
                                    "regionId": 711387
                                },
                                {
                                    "name": "湖口乡",
                                    "regionId": 711388
                                },
                                {
                                    "name": "新丰乡",
                                    "regionId": 711389
                                },
                                {
                                    "name": "新埔镇",
                                    "regionId": 711390
                                },
                                {
                                    "name": "关西镇",
                                    "regionId": 711391
                                },
                                {
                                    "name": "芎林乡",
                                    "regionId": 711392
                                },
                                {
                                    "name": "宝山乡",
                                    "regionId": 711393
                                },
                                {
                                    "name": "竹东镇",
                                    "regionId": 711394
                                },
                                {
                                    "name": "五峰乡",
                                    "regionId": 711395
                                },
                                {
                                    "name": "横山乡",
                                    "regionId": 711396
                                },
                                {
                                    "name": "尖石乡",
                                    "regionId": 711397
                                },
                                {
                                    "name": "北埔乡",
                                    "regionId": 711398
                                },
                                {
                                    "name": "峨眉乡",
                                    "regionId": 711399
                                }
                            ],
                            "name": "新竹县",
                            "regionId": 711300
                        },
                        {
                            "counties": [
                                {
                                    "name": "中坜区",
                                    "regionId": 711414
                                },
                                {
                                    "name": "平镇区",
                                    "regionId": 711415
                                },
                                {
                                    "name": "杨梅区",
                                    "regionId": 711417
                                },
                                {
                                    "name": "新屋区",
                                    "regionId": 711418
                                },
                                {
                                    "name": "观音区",
                                    "regionId": 711419
                                },
                                {
                                    "name": "桃园区",
                                    "regionId": 711420
                                },
                                {
                                    "name": "龟山区",
                                    "regionId": 711421
                                },
                                {
                                    "name": "八德区",
                                    "regionId": 711422
                                },
                                {
                                    "name": "大溪区",
                                    "regionId": 711423
                                },
                                {
                                    "name": "大园区",
                                    "regionId": 711425
                                },
                                {
                                    "name": "芦竹区",
                                    "regionId": 711426
                                },
                                {
                                    "name": "中坜市",
                                    "regionId": 711487
                                },
                                {
                                    "name": "平镇市",
                                    "regionId": 711488
                                },
                                {
                                    "name": "龙潭乡",
                                    "regionId": 711489
                                },
                                {
                                    "name": "杨梅市",
                                    "regionId": 711490
                                },
                                {
                                    "name": "新屋乡",
                                    "regionId": 711491
                                },
                                {
                                    "name": "观音乡",
                                    "regionId": 711492
                                },
                                {
                                    "name": "桃园市",
                                    "regionId": 711493
                                },
                                {
                                    "name": "龟山乡",
                                    "regionId": 711494
                                },
                                {
                                    "name": "八德市",
                                    "regionId": 711495
                                },
                                {
                                    "name": "大溪镇",
                                    "regionId": 711496
                                },
                                {
                                    "name": "复兴乡",
                                    "regionId": 711497
                                },
                                {
                                    "name": "大园乡",
                                    "regionId": 711498
                                },
                                {
                                    "name": "芦竹乡",
                                    "regionId": 711499
                                }
                            ],
                            "name": "桃园县",
                            "regionId": 711400
                        },
                        {
                            "counties": [
                                {
                                    "name": "头份市",
                                    "regionId": 711520
                                },
                                {
                                    "name": "竹南镇",
                                    "regionId": 711582
                                },
                                {
                                    "name": "头份镇",
                                    "regionId": 711583
                                },
                                {
                                    "name": "三湾乡",
                                    "regionId": 711584
                                },
                                {
                                    "name": "南庄乡",
                                    "regionId": 711585
                                },
                                {
                                    "name": "狮潭乡",
                                    "regionId": 711586
                                },
                                {
                                    "name": "后龙镇",
                                    "regionId": 711587
                                },
                                {
                                    "name": "通霄镇",
                                    "regionId": 711588
                                },
                                {
                                    "name": "苑里镇",
                                    "regionId": 711589
                                },
                                {
                                    "name": "苗栗市",
                                    "regionId": 711590
                                },
                                {
                                    "name": "造桥乡",
                                    "regionId": 711591
                                },
                                {
                                    "name": "头屋乡",
                                    "regionId": 711592
                                },
                                {
                                    "name": "公馆乡",
                                    "regionId": 711593
                                },
                                {
                                    "name": "大湖乡",
                                    "regionId": 711594
                                },
                                {
                                    "name": "泰安乡",
                                    "regionId": 711595
                                },
                                {
                                    "name": "铜锣乡",
                                    "regionId": 711596
                                },
                                {
                                    "name": "三义乡",
                                    "regionId": 711597
                                },
                                {
                                    "name": "西湖乡",
                                    "regionId": 711598
                                },
                                {
                                    "name": "卓兰镇",
                                    "regionId": 711599
                                }
                            ],
                            "name": "苗栗县",
                            "regionId": 711500
                        },
                        {
                            "counties": [
                                {
                                    "name": "员林市",
                                    "regionId": 711736
                                },
                                {
                                    "name": "彰化市",
                                    "regionId": 711774
                                },
                                {
                                    "name": "芬园乡",
                                    "regionId": 711775
                                },
                                {
                                    "name": "花坛乡",
                                    "regionId": 711776
                                },
                                {
                                    "name": "秀水乡",
                                    "regionId": 711777
                                },
                                {
                                    "name": "鹿港镇",
                                    "regionId": 711778
                                },
                                {
                                    "name": "福兴乡",
                                    "regionId": 711779
                                },
                                {
                                    "name": "线西乡",
                                    "regionId": 711780
                                },
                                {
                                    "name": "和美镇",
                                    "regionId": 711781
                                },
                                {
                                    "name": "伸港乡",
                                    "regionId": 711782
                                },
                                {
                                    "name": "员林镇",
                                    "regionId": 711783
                                },
                                {
                                    "name": "社头乡",
                                    "regionId": 711784
                                },
                                {
                                    "name": "永靖乡",
                                    "regionId": 711785
                                },
                                {
                                    "name": "埔心乡",
                                    "regionId": 711786
                                },
                                {
                                    "name": "溪湖镇",
                                    "regionId": 711787
                                },
                                {
                                    "name": "大村乡",
                                    "regionId": 711788
                                },
                                {
                                    "name": "埔盐乡",
                                    "regionId": 711789
                                },
                                {
                                    "name": "田中镇",
                                    "regionId": 711790
                                },
                                {
                                    "name": "北斗镇",
                                    "regionId": 711791
                                },
                                {
                                    "name": "田尾乡",
                                    "regionId": 711792
                                },
                                {
                                    "name": "埤头乡",
                                    "regionId": 711793
                                },
                                {
                                    "name": "溪州乡",
                                    "regionId": 711794
                                },
                                {
                                    "name": "竹塘乡",
                                    "regionId": 711795
                                },
                                {
                                    "name": "二林镇",
                                    "regionId": 711796
                                },
                                {
                                    "name": "大城乡",
                                    "regionId": 711797
                                },
                                {
                                    "name": "芳苑乡",
                                    "regionId": 711798
                                },
                                {
                                    "name": "二水乡",
                                    "regionId": 711799
                                }
                            ],
                            "name": "彰化县",
                            "regionId": 711700
                        },
                        {
                            "counties": [
                                {
                                    "name": "番路乡",
                                    "regionId": 711982
                                },
                                {
                                    "name": "梅山乡",
                                    "regionId": 711983
                                },
                                {
                                    "name": "竹崎乡",
                                    "regionId": 711984
                                },
                                {
                                    "name": "阿里山乡",
                                    "regionId": 711985
                                },
                                {
                                    "name": "中埔乡",
                                    "regionId": 711986
                                },
                                {
                                    "name": "大埔乡",
                                    "regionId": 711987
                                },
                                {
                                    "name": "水上乡",
                                    "regionId": 711988
                                },
                                {
                                    "name": "鹿草乡",
                                    "regionId": 711989
                                },
                                {
                                    "name": "太保市",
                                    "regionId": 711990
                                },
                                {
                                    "name": "朴子市",
                                    "regionId": 711991
                                },
                                {
                                    "name": "东石乡",
                                    "regionId": 711992
                                },
                                {
                                    "name": "六脚乡",
                                    "regionId": 711993
                                },
                                {
                                    "name": "新港乡",
                                    "regionId": 711994
                                },
                                {
                                    "name": "民雄乡",
                                    "regionId": 711995
                                },
                                {
                                    "name": "大林镇",
                                    "regionId": 711996
                                },
                                {
                                    "name": "溪口乡",
                                    "regionId": 711997
                                },
                                {
                                    "name": "义竹乡",
                                    "regionId": 711998
                                },
                                {
                                    "name": "布袋镇",
                                    "regionId": 711999
                                }
                            ],
                            "name": "嘉义县",
                            "regionId": 711900
                        },
                        {
                            "counties": [
                                {
                                    "name": "斗南镇",
                                    "regionId": 712180
                                },
                                {
                                    "name": "大埤乡",
                                    "regionId": 712181
                                },
                                {
                                    "name": "虎尾镇",
                                    "regionId": 712182
                                },
                                {
                                    "name": "土库镇",
                                    "regionId": 712183
                                },
                                {
                                    "name": "褒忠乡",
                                    "regionId": 712184
                                },
                                {
                                    "name": "东势乡",
                                    "regionId": 712185
                                },
                                {
                                    "name": "台西乡",
                                    "regionId": 712186
                                },
                                {
                                    "name": "仑背乡",
                                    "regionId": 712187
                                },
                                {
                                    "name": "麦寮乡",
                                    "regionId": 712188
                                },
                                {
                                    "name": "斗六市",
                                    "regionId": 712189
                                },
                                {
                                    "name": "林内乡",
                                    "regionId": 712190
                                },
                                {
                                    "name": "古坑乡",
                                    "regionId": 712191
                                },
                                {
                                    "name": "莿桐乡",
                                    "regionId": 712192
                                },
                                {
                                    "name": "西螺镇",
                                    "regionId": 712193
                                },
                                {
                                    "name": "二仑乡",
                                    "regionId": 712194
                                },
                                {
                                    "name": "北港镇",
                                    "regionId": 712195
                                },
                                {
                                    "name": "水林乡",
                                    "regionId": 712196
                                },
                                {
                                    "name": "口湖乡",
                                    "regionId": 712197
                                },
                                {
                                    "name": "四湖乡",
                                    "regionId": 712198
                                },
                                {
                                    "name": "元长乡",
                                    "regionId": 712199
                                }
                            ],
                            "name": "云林县",
                            "regionId": 712100
                        },
                        {
                            "counties": [
                                {
                                    "name": "崁顶乡",
                                    "regionId": 712451
                                },
                                {
                                    "name": "屏东市",
                                    "regionId": 712467
                                },
                                {
                                    "name": "三地门乡",
                                    "regionId": 712468
                                },
                                {
                                    "name": "雾台乡",
                                    "regionId": 712469
                                },
                                {
                                    "name": "玛家乡",
                                    "regionId": 712470
                                },
                                {
                                    "name": "九如乡",
                                    "regionId": 712471
                                },
                                {
                                    "name": "里港乡",
                                    "regionId": 712472
                                },
                                {
                                    "name": "高树乡",
                                    "regionId": 712473
                                },
                                {
                                    "name": "盐埔乡",
                                    "regionId": 712474
                                },
                                {
                                    "name": "长治乡",
                                    "regionId": 712475
                                },
                                {
                                    "name": "麟洛乡",
                                    "regionId": 712476
                                },
                                {
                                    "name": "竹田乡",
                                    "regionId": 712477
                                },
                                {
                                    "name": "内埔乡",
                                    "regionId": 712478
                                },
                                {
                                    "name": "万丹乡",
                                    "regionId": 712479
                                },
                                {
                                    "name": "潮州镇",
                                    "regionId": 712480
                                },
                                {
                                    "name": "泰武乡",
                                    "regionId": 712481
                                },
                                {
                                    "name": "来义乡",
                                    "regionId": 712482
                                },
                                {
                                    "name": "万峦乡",
                                    "regionId": 712483
                                },
                                {
                                    "name": "莰顶乡",
                                    "regionId": 712484
                                },
                                {
                                    "name": "新埤乡",
                                    "regionId": 712485
                                },
                                {
                                    "name": "南州乡",
                                    "regionId": 712486
                                },
                                {
                                    "name": "林边乡",
                                    "regionId": 712487
                                },
                                {
                                    "name": "东港镇",
                                    "regionId": 712488
                                },
                                {
                                    "name": "琉球乡",
                                    "regionId": 712489
                                },
                                {
                                    "name": "佳冬乡",
                                    "regionId": 712490
                                },
                                {
                                    "name": "新园乡",
                                    "regionId": 712491
                                },
                                {
                                    "name": "枋寮乡",
                                    "regionId": 712492
                                },
                                {
                                    "name": "枋山乡",
                                    "regionId": 712493
                                },
                                {
                                    "name": "春日乡",
                                    "regionId": 712494
                                },
                                {
                                    "name": "狮子乡",
                                    "regionId": 712495
                                },
                                {
                                    "name": "车城乡",
                                    "regionId": 712496
                                },
                                {
                                    "name": "牡丹乡",
                                    "regionId": 712497
                                },
                                {
                                    "name": "恒春镇",
                                    "regionId": 712498
                                },
                                {
                                    "name": "满州乡",
                                    "regionId": 712499
                                }
                            ],
                            "name": "屏东县",
                            "regionId": 712400
                        },
                        {
                            "counties": [
                                {
                                    "name": "台东市",
                                    "regionId": 712584
                                },
                                {
                                    "name": "绿岛乡",
                                    "regionId": 712585
                                },
                                {
                                    "name": "兰屿乡",
                                    "regionId": 712586
                                },
                                {
                                    "name": "延平乡",
                                    "regionId": 712587
                                },
                                {
                                    "name": "卑南乡",
                                    "regionId": 712588
                                },
                                {
                                    "name": "鹿野乡",
                                    "regionId": 712589
                                },
                                {
                                    "name": "关山镇",
                                    "regionId": 712590
                                },
                                {
                                    "name": "海端乡",
                                    "regionId": 712591
                                },
                                {
                                    "name": "池上乡",
                                    "regionId": 712592
                                },
                                {
                                    "name": "东河乡",
                                    "regionId": 712593
                                },
                                {
                                    "name": "成功镇",
                                    "regionId": 712594
                                },
                                {
                                    "name": "长滨乡",
                                    "regionId": 712595
                                },
                                {
                                    "name": "金峰乡",
                                    "regionId": 712596
                                },
                                {
                                    "name": "大武乡",
                                    "regionId": 712597
                                },
                                {
                                    "name": "达仁乡",
                                    "regionId": 712598
                                },
                                {
                                    "name": "太麻里乡",
                                    "regionId": 712599
                                }
                            ],
                            "name": "台东县",
                            "regionId": 712500
                        },
                        {
                            "counties": [
                                {
                                    "name": "花莲市",
                                    "regionId": 712686
                                },
                                {
                                    "name": "新城乡",
                                    "regionId": 712687
                                },
                                {
                                    "name": "太鲁阁",
                                    "regionId": 712688
                                },
                                {
                                    "name": "秀林乡",
                                    "regionId": 712689
                                },
                                {
                                    "name": "吉安乡",
                                    "regionId": 712690
                                },
                                {
                                    "name": "寿丰乡",
                                    "regionId": 712691
                                },
                                {
                                    "name": "凤林镇",
                                    "regionId": 712692
                                },
                                {
                                    "name": "光复乡",
                                    "regionId": 712693
                                },
                                {
                                    "name": "丰滨乡",
                                    "regionId": 712694
                                },
                                {
                                    "name": "瑞穗乡",
                                    "regionId": 712695
                                },
                                {
                                    "name": "万荣乡",
                                    "regionId": 712696
                                },
                                {
                                    "name": "玉里镇",
                                    "regionId": 712697
                                },
                                {
                                    "name": "卓溪乡",
                                    "regionId": 712698
                                },
                                {
                                    "name": "富里乡",
                                    "regionId": 712699
                                }
                            ],
                            "name": "花莲县",
                            "regionId": 712600
                        },
                        {
                            "counties": [
                                {
                                    "name": "马公市",
                                    "regionId": 712794
                                },
                                {
                                    "name": "西屿乡",
                                    "regionId": 712795
                                },
                                {
                                    "name": "望安乡",
                                    "regionId": 712796
                                },
                                {
                                    "name": "七美乡",
                                    "regionId": 712797
                                },
                                {
                                    "name": "白沙乡",
                                    "regionId": 712798
                                },
                                {
                                    "name": "湖西乡",
                                    "regionId": 712799
                                }
                            ],
                            "name": "澎湖县",
                            "regionId": 712700
                        },
                        {
                            "counties": [
                                {
                                    "name": "南竿乡",
                                    "regionId": 712896
                                },
                                {
                                    "name": "北竿乡",
                                    "regionId": 712897
                                },
                                {
                                    "name": "东引乡",
                                    "regionId": 712898
                                },
                                {
                                    "name": "莒光乡",
                                    "regionId": 712899
                                }
                            ],
                            "name": "连江县",
                            "regionId": 712800
                        }
                    ],
                    "name": "台湾省",
                    "regionId": 710000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "中西区",
                                    "regionId": 810101
                                },
                                {
                                    "name": "湾仔区",
                                    "regionId": 810102
                                },
                                {
                                    "name": "东区",
                                    "regionId": 810103
                                },
                                {
                                    "name": "南区",
                                    "regionId": 810104
                                }
                            ],
                            "name": "香港岛",
                            "regionId": 810100
                        },
                        {
                            "counties": [
                                {
                                    "name": "九龙城区",
                                    "regionId": 810201
                                },
                                {
                                    "name": "油尖旺区",
                                    "regionId": 810202
                                },
                                {
                                    "name": "深水埗区",
                                    "regionId": 810203
                                },
                                {
                                    "name": "黄大仙区",
                                    "regionId": 810204
                                },
                                {
                                    "name": "观塘区",
                                    "regionId": 810205
                                }
                            ],
                            "name": "九龙",
                            "regionId": 810200
                        },
                        {
                            "counties": [
                                {
                                    "name": "北区",
                                    "regionId": 810301
                                },
                                {
                                    "name": "大埔区",
                                    "regionId": 810302
                                },
                                {
                                    "name": "沙田区",
                                    "regionId": 810303
                                },
                                {
                                    "name": "西贡区",
                                    "regionId": 810304
                                },
                                {
                                    "name": "元朗区",
                                    "regionId": 810305
                                },
                                {
                                    "name": "屯门区",
                                    "regionId": 810306
                                },
                                {
                                    "name": "荃湾区",
                                    "regionId": 810307
                                },
                                {
                                    "name": "葵青区",
                                    "regionId": 810308
                                },
                                {
                                    "name": "离岛区",
                                    "regionId": 810309
                                }
                            ],
                            "name": "新界",
                            "regionId": 810300
                        }
                    ],
                    "name": "香港特别行政区",
                    "regionId": 810000
                },
                {
                    "cities": [
                        {
                            "counties": [
                                {
                                    "name": "花地玛堂区",
                                    "regionId": 820102
                                },
                                {
                                    "name": "花王堂区",
                                    "regionId": 820103
                                },
                                {
                                    "name": "望德堂区",
                                    "regionId": 820104
                                },
                                {
                                    "name": "大堂区",
                                    "regionId": 820105
                                },
                                {
                                    "name": "风顺堂区",
                                    "regionId": 820106
                                }
                            ],
                            "name": "澳门半岛",
                            "regionId": 820100
                        },
                        {
                            "counties": [
                                {
                                    "name": "嘉模堂区",
                                    "regionId": 820202
                                },
                                {
                                    "name": "路氹填海区",
                                    "regionId": 820203
                                },
                                {
                                    "name": "圣方济各堂区",
                                    "regionId": 820204
                                }
                            ],
                            "name": "离岛",
                            "regionId": 820200
                        }
                    ],
                    "name": "澳门特别行政区",
                    "regionId": 820000
                }
            ]
        }
    ]
}
';
        $data = json_decode($data, true);
        $arr = [];
        foreach ($data['data'] as $value) {
            $arr[] = [
                'region_id' => $value['api'] + 1,
                'level' => 1,
                'region_name' => $value['part'],
                'parent_id' => 0,
            ];
            foreach ($value['provinces'] as $value2) {
                $arr[] = [
                    'region_id' => $value2['regionId'],
                    'level' => 2,
                    'region_name' => $value2['name'],
                    'parent_id' => $value['api'] + 1,
                ];
                foreach ($value2['cities'] as $value3) {
                    $arr[] = [
                        'region_id' => $value3['regionId'],
                        'level' => 3,
                        'region_name' => $value3['name'],
                        'parent_id' => $value2['regionId'],
                    ];
                    foreach ($value3['counties'] as $value4) {
                        $arr[] = [
                            'region_id' => $value4['regionId'],
                            'level' => 4,
                            'region_name' => $value4['name'],
                            'parent_id' => $value3['regionId'],
                        ];

                    }

                }

            }
            # code...
        }

// test($arr);
		(new Region)->saveAll($arr);
        die();
    }

    public function creat()
    {
    }
}
