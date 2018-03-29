<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 15:06:32
         compiled from "Home\gerenzhuye.html" */ ?>
<?php /*%%SmartyHeaderCode:109515abc90787bd2e5-60635415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd31a27894a6cc81fe63081d2ef4c43a29d93e7b3' => 
    array (
      0 => 'Home\\gerenzhuye.html',
      1 => 1522307189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109515abc90787bd2e5-60635415',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人主页</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/reset.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/denglu.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/gerenzhuye.css">
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
js/jquery-1.9.1.js"></script>
</head>
<body>
<div class="wrap">
    <!--头部-->
    <?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <!--个人详情-->
    <div class="gerenxiangqing">
        <div class="content">
            <div class="left">
                <div class="touxiang_grxq">
                    <img src="<?php echo $_smarty_tpl->getVariable('uploads')->value;?>
<?php echo $_smarty_tpl->getVariable('arr')->value['users']['photo'];?>
">
                    <div class="huiyuan"><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/<?php if ($_smarty_tpl->getVariable('arr')->value['users']['level']=='普通'){?>putonghuiyuan.png<?php }?>"></div>
                </div>
                <div class="touxiang_next">
                    <h2>浮生若梦_JKAy</h2>
                    <a href="#">修改资料</a>
                    <ul class="guanzhu">
                        <li>
                            <span><?php echo $_smarty_tpl->getVariable('arr')->value['users']['guanzhu'];?>
</span>
                            <span>关注</span>
                        </li>
                        <li>
                            <span><?php echo $_smarty_tpl->getVariable('arr')->value['users']['fensi'];?>
</span>
                            <span>粉丝</span>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="right">
                <li><a href="#"><img src="<?php echo $_smarty_tpl->getVariable('uploads')->value;?>
<?php echo $_smarty_tpl->getVariable('arr')->value['users']['erweima'];?>
"><p>扫一扫，关注我</p></a></li>
                <li><a href="#"><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/fabuzhaopian.png"><p>发布照片</p></a></li>
                <li><a href="#"><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/guanlihudong.png"><p>管理互动</p></a></li>
            </ul>
        </div>
    </div>
    <!--主体内容-->
    <div id="main">
        <div class="content">
            <div class="style">
                <h1>我的订单</h1>
                <ul class="xuanxiangka">
                    <li class="first">全部订单</li>
                    <li>待出行</li>
                    <li>待支付</li>
                    <li>待评价</li>
                    <li>已取消</li>
                </ul>
                <div class="style_div">
                    <form action="">
                        <div>
                            <select name="paixu_tiaojian">
                                <option value="tiaojian" disabled selected style="display: none;">按条件</option>
                            </select>
                            <input type="text" name="paixu_tiaojian_text">
                            <select name="paixu_zhuangtai">
                                <option value="zhuangtai" disabled selected style="display: none;">状态</option>
                            </select>
                            <label for="chaxun_riqi"><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/chaxun_riqi.png" alt=""> 至</label>
                            <input type="text" name="chaxun_riqi" id="chaxun_riqi">
                            <label for="chaxun_riqi"><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/chaxun_riqi.png" alt=""></label>
                            <input type="text" name="chaxun_danhao" placeholder="单号">
                            <input type="submit" value="搜索">
                        </div>
                    </form>
                    <ul class="dingdanxinxi">
                        <li>订单信息</li>
                        <li>产品类型</li>
                        <li>出游日期</li>
                        <li>订单金额</li>
                        <li>订单状态</li>
                        <li>操作</li>
                    </ul>
                    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value['dingdan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
?>
                    <div class="dingdan">
                        <div>
                            <p>订单编号：<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
 预订时间：<?php echo $_smarty_tpl->tpl_vars['val']->value['dingdanriqi'];?>
</p>
                        </div>
                        <ul>
                            <li class="pic">
                                <a href="javascript:;">
                                    <img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['val']->value['pic'];?>
">
                                    <p>[5月]< <?php echo $_smarty_tpl->tpl_vars['val']->value['xianlumingcheng'];?>
>北京直飞....</p>
                                </a>
                            </li>
                            <li>自驾游</li>
                            <li><?php echo $_smarty_tpl->tpl_vars['val']->value['chufariqi'];?>
</li>
                            <li>￥<?php echo $_smarty_tpl->tpl_vars['val']->value['danjia'];?>
</li>
                            <li style="color:#EB5E17;"><?php echo $_smarty_tpl->tpl_vars['val']->value['zhuangtai'];?>
</li>
                            <li>
                                <?php if ($_smarty_tpl->tpl_vars['val']->value['zhuangtai']=='待支付'){?>
                                    <a href="zhifu_chuli.php?date=<?php echo $_smarty_tpl->tpl_vars['val']->value['dingdanriqi'];?>
">支付</a>
                                <?php }elseif($_smarty_tpl->tpl_vars['val']->value['zhuangtai']=='待出行'){?>
                                    <a href="quxiao.php?dingdanid=<?php echo $_smarty_tpl->tpl_vars['val']->value['dingdanid'];?>
">取消</a>
                                <?php }elseif($_smarty_tpl->tpl_vars['val']->value['zhuangtai']=='待评价'){?>
                                    <a href="javascript:;" class="pingjia">评价</a>
                                <?php }elseif($_smarty_tpl->tpl_vars['val']->value['zhuangtai']=='已取消'){?>
                                    <a href="chakan.php">查看</a>
                                <?php }?>
                            </li>
                        </ul>
                    </div>
                    <?php }} ?>
                    <div class="jiazaigengduo">
                        <a href="javascript:;">加载更多</a>
                    </div>
                </div>
            </div>
            <div class="style">
                <h1>我的收藏</h1>
                <ul class="xuanxiangka">
                    <li class="first">看点</li>
                    <li>停车发呆地</li>
                    <li>高德地图点</li>
                    <li>私享点</li>
                    <li>线路</li>
                    <li>自驾团</li>
                </ul>
                <div>
                    <h2>暂无收藏看点</h2>
                </div>
            </div>
            <div class="style">
                <h1>我的线路</h1>
                <ul class="xuanxiangka"></ul>
            </div>
            <div class="wodechedui style">
                <h1>我的车队</h1>
                <ul class="xuanxiangka"></ul>
                <div>
                    <a href="#" class="first">+新建车队</a>
                </div>
            </div>
            <div class="wodezhaopian style">
                <h1>我的照片</h1>
                <ul class="xuanxiangka">
                    <li class="first">照片</li>
                </ul>
                <div>
                    <a href="#" class="first">+上传照片</a>
                    <a href="#" class="chuangjianxiangce">创建相册</a>
                    <div class="xiangce">
                        <div>
                            <div class="xiangce_pic"><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/zhaopian.png" alt=""><span>0</span></div>
                            <p>分享专属</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--尾部-->
    <?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <!--订单详情-->
    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value['dingdan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
?>
    <div class="dingdanxiangqing a_tuichu" style="display: none;">
        <div class="ddxq">
            <a href="javascript:;" class="tuichu"></a>
            <h1>订单详情</h1>
            <div class="zonge">
                订单支付总额：<span style="color:#EA5023;">￥<span style="font-size:24px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['zongjiage'];?>
</span></span>
            </div>
            <div class="model">
                <div class="model_style">
                    <h2>线路信息</h2>
                    <div>
                        <p>自驾团名称：<?php echo $_smarty_tpl->tpl_vars['val']->value['xianlumingcheng'];?>
</p>
                        <p>出游日期：<?php echo $_smarty_tpl->tpl_vars['val']->value['chufariqi'];?>
</p>
                        <p>成人：<?php echo $_smarty_tpl->tpl_vars['val']->value['chengrenshuliang'];?>
人 <span class="margin">儿童：<?php echo $_smarty_tpl->tpl_vars['val']->value['ertongshuliang'];?>
人</span></p>
                        <p>房间：2人间，<?php if ($_smarty_tpl->tpl_vars['val']->value['pinfang']==1){?>愿意拼房<?php }elseif($_smarty_tpl->tpl_vars['val']->value['pinfang']==0){?>不同意拼房，愿意支付房差费用￥3500<?php }?></p>
                    </div>
                </div>
                <div class="model_style">
                    <h2>联系人信息</h2>
                    <div>
                        <p class="short position">姓名：<span>罗小小</span></p>
                        <p class="short position">性别：<span>女</span></p>
                        <p class="short position">手机号码：<span>18770837899</span></p>
                        <p class="short">邮箱：2689326087@qq.com</p>
                    </div>
                </div>
                <div class="model_style">
                    <h2>游客信息</h2>
                    <div>
                        <p>游客1</p>
                        <p class="short position">游客类型：<span>成人</span></p>
                        <p class="short position">姓名：<span>罗小小</span></p>
                        <p class="short position">性别：<span>女</span></p>
                        <p class="short position">手机号码：<span>18770837899</span></p>
                        <p class="short position">证件：<span>护照</span></p>
                        <p class="short position">452726199302031552</p>
                    </div>
                    <div>
                        <p>游客1</p>
                        <p class="short position">游客类型：<span>成人</span></p>
                        <p class="short position">姓名：<span>罗小小</span></p>
                        <p class="short position">性别：<span>女</span></p>
                        <p class="short position">手机号码：<span>18770837899</span></p>
                        <p class="short position">证件：<span>护照</span></p>
                        <p class="short position">452726199302031552</p>
                    </div>
                </div>
                <div class="model_style">
                    <h2>保险</h2>
                    <div>
                        <p>平安爱自驾境外长线保险 <span>经典型2份</span><span><span style="color:#EA5023;">￥177</span>/一份</span></p>
                        <p>平安爱自驾境外长线保险 <span>经典型2份</span><span><span style="color:#EA5023;">￥177</span>/一份</span></p>
                    </div>
                </div>
                <div class="model_style">
                    <h2>预订信息</h2>
                    <div>
                        <p>发票信息：<span>是否需要发票：是</span></p>
                        <p class="short position">发票抬头：<span>无</span></p>
                        <p class="short position">发票明细：会议费</p>
                        <div class="clean"></div>
                        <p>配送地址：<span>北京朝阳区北辰东路八号汇园国际K座</span></p>
                    </div>
                </div>
                <div class="model_style">
                    <h2>更多要求</h2>
                    <div>
                        <p>温馨的住宿和美味的餐食</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }} ?>
    <!--点评-->
    <!--<div id="dianping" class="a_tuichu" style="display: none;">
        <div>
            <a href="#" class="tuichu"></a>
            <h1>行程点评</h1>
            <form action="" enctype="multipart/form-data">
                <div class="left">
                    <textarea name="dianping_text" style="resize:none;"></textarea>
                    <div class="container">
                        <div class="pic"></div>
                        <label for="photo" class="shaizhaopian"><div>晒照片</div></label>
                        <label for="photo" class="input_file"><input style="display: none;" type="file" name="photo" id="photo" accept="image/png, image/jpeg, image/gif, image/jpg"></label>
                        <span class="zhaopianshu"><span>0</span>/5</span>
                    </div>
                </div>
                <div class="right">
                    <div>
                        <span>行程安排：</span>
                        <input type="radio" name="xingchenganpai" id="manyi_xingchenganpai" value="manyi"><label for="manyi_xingchenganpai">满意</label>
                        <input type="radio" name="xingchenganpai" id="bumanyi_xingchenganpai" value="bumanyi"><label for="bumanyi_xingchenganpai">不满意</label>
                        <input type="radio" name="xingchenganpai" id="yiban_xingchenganpai" value="yiban"><label for="yiban_xingchenganpai">一般</label>
                    </div>
                    <div>
                        <span>住宿餐食：</span>
                        <input type="radio" name="zhusucanshi" id="manyi_zhusucanshi" value="manyi"><label for="manyi_zhusucanshi">满意</label>
                        <input type="radio" name="zhusucanshi" id="bumanyi_zhusucanshi" value="bumanyi"><label for="bumanyi_zhusucanshi">不满意</label>
                        <input type="radio" name="zhusucanshi" id="yiban_zhusucanshi" value="yiban"><label for="yiban_zhusucanshi">一般</label>
                    </div>
                    <div>
                        <span>旅行交通：</span>
                        <input type="radio" name="lvxingjiaotong" id="manyi_lvxingjiaotong" value="manyi"><label for="manyi_lvxingjiaotong">满意</label>
                        <input type="radio" name="lvxingjiaotong" id="bumanyi_lvxingjiaotong" value="bumanyi"><label for="bumanyi_lvxingjiaotong">不满意</label>
                        <input type="radio" name="lvxingjiaotong" id="yiban_lvxingjiaotong" value="yiban"><label for="yiban_lvxingjiaotong">一般</label>
                    </div>
                    <div class="zonghepingjia">
                        <span>综合评价：</span>
                        <label for="xingji_1"><input type="radio" name="xingji" id="xingji_1"></label>
                        <label for="xingji_2"><input type="radio" name="xingji" id="xingji_2"></label>
                        <label for="xingji_3"><input type="radio" name="xingji" id="xingji_3"></label>
                        <label for="xingji_4"><input type="radio" name="xingji" id="xingji_4"></label>
                        <label for="xingji_5"><input type="radio" name="xingji" id="xingji_5"></label>
                    </div>
                </div>
                <div class="submit">
                    <input type="submit" value="提交评价">
                </div>
            </form>
        </div>
    </div>-->
</div>
</body>
</html>
<script type="text/javascript">
    //退出
    // var dianping=document.getElementById('dianping');
    // var tuichu_dianping=document.getElementById('dianping').getElementsByClassName('tuichu')[0];
    // tuichu_dianping.onclick = function () {
    //     dianping.style["display"]="none";
    // }

    // 当订单数大于5时，只显示五个订单
    var dingdan_len=$(".dingdan").length;
    console.log(dingdan_len,'ok');
    function myIf(){
        console.log('ok');
        if (dingdan_len>5){
            $(".dingdan:gt(4)").css('display','none');
        }
    }
    myIf();

    //加载更多
    $(".jiazaigengduo").click(function () {
        var text = $(this).find('a').text();
        if (text == '加载更多') {
            $(".dingdan").css('display', 'block');
            // console.log($(this).find('a').text());
            $(this).find('a').text('收起订单');
        }else if (text == '收起订单'){
            $(".dingdan:gt(4)").css('display','none');
            $(this).find('a').text('加载更多');
        }
    });


    //查看订单详情，退出
    $(".dingdan .pic").click(function(){
        var num = $(this).parent().parent('.dingdan').index()-1;
        console.log(num);
        $(".dingdanxiangqing").eq(num).css('display','block');
        // dingdanxiangqing.style["display"]="block";
    });
    $(".dingdanxiangqing .tuichu").click(function(){
        $(this).parent().parent('.dingdanxiangqing').css('display','none');
    });

    //点评
    // var open_pingjia=document.getElementsByClassName('pingjia');
    // open_pingjia[0].onclick = function () {
    //     dianping.style["display"]="block";
    //     document.body.scrollTop = document.documentElement.scrollTop = 0;
    // }

    //综合评价--星星
    $(".zonghepingjia label").click(function(){
        var num = $(this).index();
        for(var i=num;i>0;i--){
            $(".zonghepingjia label").eq(i-1).css("background","url('<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/xing_1.png') 4px 4px no-repeat");
        }
        for(var j=num;j<=5;j++){
            $(".zonghepingjia label").eq(j).css("background","");
        }
    });

</script>