<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 09:16:06
         compiled from "Home\xiangqing.html" */ ?>
<?php /*%%SmartyHeaderCode:197735aafca3088c3e9-29227512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74c2fb3781eb8fae9e38079f3bb80875ee56fd7c' => 
    array (
      0 => 'Home\\xiangqing.html',
      1 => 1522283896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197735aafca3088c3e9-29227512',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>爱自驾详情页</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/reset.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/denglu.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/xiangqing.css">
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
js/jquery-1.9.1.js"></script>
</head>
<body>
<div class="wrap">
    <!--头部-->
    <?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <!--主体内容-->
    <div id="main">
        <div class="content">
            <!--当前位置-->
            <div class="top_filed">
                <span>首页</span> > <span>自驾团</span> > <span>自驾团境内</span>
            </div>
            <!--介绍-->
            <div class="jieshao">
                <!--左侧分享-->
                <div class="fenxiang">
                </div>
                <!--左侧-->
                <div class="jieshao_left">
                    <!--图片-->
                    <div class="pic">
                        <div class="big_pic"><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/<?php echo $_smarty_tpl->getVariable('arr')->value['list']['pic'];?>
" alt=""></div>
                        <div class="pic_bottom">
                            <ul>
                                <!--前一张-->
                                <a href="#" class="prev"><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/xiangqing_prev.png" alt=""></a>
                                <li><a href="#"><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/xiangqing_small_img.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/xiangqing_small_img.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/xiangqing_small_img.jpg" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/xiangqing_small_img.jpg" alt=""></a></li>
                                <!--后一张-->
                                <a href="#" class="next"><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/xiangqing_next.png" alt=""></a>
                            </ul>
                        </div>
                    </div>
                    <!--日历-->
                    <div class="rili">
                        <div class="pic_rili">
                            <img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/rili.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="jieshao_right">
                    <div class="top">
                        <h1>云南落地自驾行摄之旅</h1>
                        <pre><?php echo $_smarty_tpl->getVariable('arr')->value['list']['xianlujianjie'];?>
</pre>
                    </div>
                    <form action="tianxiedingdan.php" method="post" class="woyaobaoming-bottom"  <?php if (isset($_SESSION['username'])){?>onsubmit="return true"<?php }else{ ?>onsubmit="return Alert()"<?php }?>>
                    <!--报名-->
                    <div class="baoming">
                        爱自驾价：<span>￥<span><?php echo $_smarty_tpl->getVariable('arr')->value['list']['danjia'];?>
</span>起</span>
                        <input type="submit" value="我要报名">
                        <a href="#">收藏</a>
                    </div>
                    <input type="hidden" name="xid" value="<?php echo $_smarty_tpl->getVariable('arr')->value['list']['id'];?>
">
                        <div>
                            <label for="chufariqi">出发日期：</label>
                            <select name="chufariqi" id="chufariqi" >
                                <!--<option value="" style="display: none;">请选择出发日期</option>-->
                                <option value="<?php echo $_smarty_tpl->getVariable('arr')->value['list']['chufariqi'];?>
" selected><?php echo $_smarty_tpl->getVariable('arr')->value['list']['chufariqi'];?>
</option>
                            </select>
                        </div>
                        <div>
                            <label for="chufachengshi">出发城市：</label>
                            <select name="chufachengshi" id="chufachengshi" >
                                <option value="" style="display: none;">请选择出发城市</option>
                                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value['chengshi']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value=='0'){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
                                <?php }} ?>
                            </select>
                        </div>
                        <div class="chuyourenshu">
                            <label style="color:black;">出游人数：</label>
                            <a href="javascript:;" class="chuyourenshu_chengren_prev">-</a><input type="number" name="chuyourenshu_chengren" id="chuyourenshu_chengren" value="1" min="0"><a href="javascript:;" class="chuyourenshu_chengren_next">+</a> 成人
                            <a href="javascript:;" class="chuyourenshu_ertong_prev">-</a><input type="number" name="chuyourenshu_ertong" id="chuyourenshu_ertong" value="0" min="0"><a href="javascript:;" class="chuyourenshu_ertong_next">+</a> 儿童
                            <span style="color:#F29A4F">儿童标准</span>
                        </div>
                        <div>
                            <label>行程概要：</label>
                            <span style="font-size:12px;color:#CCCCCC">昆明—建水—元阳—元江—玉溪—东川—昆明</span>
                            <a href="#" style="float:right;color:#F29A4F;">详情>></a>
                        </div>
                    </form>
                    <div class="lijidingzhi">
                        <img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/lijidingzhi.png" alt="">
                    </div>
                </div>
            </div>
            <!--领队介绍-->
            <div class="lingduijieshao">
                <h1>领队介绍</h1>
                <div class="pic"><img src="<?php echo $_smarty_tpl->getVariable('uploads')->value;?>
<?php echo $_smarty_tpl->getVariable('arr')->value['lingdui']['pic'];?>
" alt=""><p><?php echo $_smarty_tpl->getVariable('arr')->value['lingdui']['name'];?>
</p></div>
                <p><?php echo $_smarty_tpl->getVariable('arr')->value['lingdui']['content'];?>
</p>
            </div>
            <!--历史组团-->
            <div class="lishizutuan">
                <h1>历史组团</h1>
                <div>
                    <ul>
                        <a href="javascript:;" class="lishizutuan_prev"><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/lishizutuan_prev.png" alt=""></a>
                        <li><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/lishizutuan_1.png" alt=""><p>海天佛国 普陀山祈福之旅</p><p>2015-01-03</p></li>
                        <li><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/lishizutuan_1.png" alt=""><p>海天佛国 普陀山祈福之旅</p><p>2015-01-03</p></li>
                        <li><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/lishizutuan_1.png" alt=""><p>海天佛国 普陀山祈福之旅</p><p>2015-01-03</p></li>
                        <li><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/lishizutuan_1.png" alt=""><p>海天佛国 普陀山祈福之旅</p><p>2015-01-03</p></li>
                        <a href="javascript:;" class="lishizutuan_next"><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/lishizutuan_next.png" alt=""></a>
                    </ul>
                </div>
            </div>
            <!--活动简介-->
            <div class="huodongjianjie">
                <!--选项卡-->
                <ul>
                    <li class="first"><a href="#xingchengjianjie">行程简介</a></li>
                    <li><a href="#feiyongmingxi">费用明细</a></li>
                    <li><a href="#qitashuoming">其他说明</a></li>
                    <li><a href="#yonghupinglun">用户评论</a></li>
                </ul>
                <div class="xingchengjianjie" id="xingchengjianjie">
                    <h1>行程简介</h1>
                    <ul class="shijianzhou">
                        <li><span>第一天</span><span></span></li>
                        <li class="first"><span>第二天</span><span>详情</span></li>
                        <li><span>第三天</span><span></span></li>
                        <li><span>第四天</span><span></span></li>
                        <li><span>第五天</span><span></span></li>
                        <li><span>第六天</span><span></span></li>
                        <li><span>第七天</span><span></span></li>
                    </ul>
                    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value['xingchengjieshao']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
?>
                    <div>
                        <h2><?php echo $_smarty_tpl->tpl_vars['val']->value['days'];?>
</h2>
                        <p class="luxian"><?php echo $_smarty_tpl->tpl_vars['val']->value['xianlu'];?>
</p>
                        <p class="tiaojian">餐食：<?php echo $_smarty_tpl->tpl_vars['val']->value['canshi'];?>
 <span>住宿：<?php echo $_smarty_tpl->tpl_vars['val']->value['zhusu'];?>
</span></p>
                        <p class="jieshao"><?php echo $_smarty_tpl->tpl_vars['val']->value['luxianxiangqing'];?>
</p>
                        <div class="img">
                            <img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['val']->value['img1'];?>
" alt="">
                            <img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['val']->value['img2'];?>
" alt="">
                        </div>
                    </div>
                    <?php }} ?>
                </div>
                <div class="feiyongmingxi" id="feiyongmingxi">
                    <h1>费用明细</h1>
                    <div>
                        <h3>【活动费用】4580元/人</h3>
                        <h3>【VP会员价】4500元/人</h3>
                        <h3>【儿帝费用】2500元/人(1.1米-1.4米不占床)</h3>
                        <h3>【费用包含】</h3>
                        <p><?php echo $_smarty_tpl->getVariable('arr')->value['feiyongmingxi']['feiyongbaohan'];?>
</p>
                        <h3>【费用不含】</h3>
                        <p><?php echo $_smarty_tpl->getVariable('arr')->value['feiyongmingxi']['feiyongbuhan'];?>
</p>

                    </div>
                </div>
                <div class="qitashuoming" id="qitashuoming">
                    <h1>其他说明</h1>
                    <div>
                        <h3>【活动时间】</h3>
                        <p><?php echo $_smarty_tpl->getVariable('arr')->value['qitashuoming']['huodongshijian'];?>
</p>
                        <h3>【租车说明】</h3>
                        <p><?php echo $_smarty_tpl->getVariable('arr')->value['qitashuoming']['zucheshuoming'];?>
</p>
                        <h3>【注意事项】</h3>
                        <p><?php echo $_smarty_tpl->getVariable('arr')->value['qitashuoming']['zhuyishixiang'];?>
</p>
                    </div>
                </div>
                <div class="yonghupinglun" id="yonghupinglun">
                    <h1>用户评论</h1>
                    <div class="quanbudianping">
                        <a href="javascript:;">全部点评(15)</a>
                        <span>综合评价：<img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/xing_5.png" alt=""></span>
                    </div>
                    <div class="pinglun">
                        <div>
                            <div class="left">
                                <div class="touxiang"><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/youke_touxiang.png" alt=""></div>
                                <p>E29****329</p>
                            </div>
                            <div class="right">
                                <ul class="top">
                                    <li>行程安排：满意</li>
                                    <li>住宿餐食：满意</li>
                                    <li>旅行交通：满意</li>
                                    <li>综合评价：<img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/xing_5.png" alt=""></li>
                                </ul>
                                <div><p>总体评论给90分!双十一活动的时候定的,价格很便宜,还会担心会不会住宿太偏僻。结果还好,第一天在水原这个地方,房间是
                                    公寓。周国很多小商店和酒吧,可以不用非要在第一天行程的汗蒸那里吃饭,这点给大家点建议,后三晚在加阳的怀旧酒店。还可
                                    以了,相对于这个价格不用太刻意挑别。周國吃饭的非常方便。去明洞和北屋打车都要1000014000的价钱。周国有地铁,我们基
                                    本是早晨地铁出,晚上打车回。</p>
                                </div>
                                <div>
                                    <span>行程安排 : </span><p>行程安排总体满意,第二天的购物关键的重点在于华克山庄,只有60分钟,那里虽然小折扣真的便宜。娇韵诗免税基
                                    础又七折。我们基本是靠抢的回来,时间太紧张。乐天和新罗其实在网上买更方便省的大包小包的拎着。直接去机场
                                    取,还有积分抵现使用。我订了1500人民币的东西,抵掉400多。乐天世界很好玩,可惜时间段。保存体力到最后再
                                    战斗,才是王道。</p>
                                </div>
                                <div>
                                    <span>住宿餐食 : </span><p>住宿第一天在水原(偏僻些),后三天在加阳怀日酒店。周围有地铁加阳站,打车到明洞一万多点。还可以。周围吃饭
                                    的多,很方便。</p>
                                </div>
                                <div>
                                    <span>旅行交通 : </span><p>交通诵基本我们是早晨地铁出晚上打车回。首尔打车还可以把,不太堵。</p>
                                </div>
                                <div>
                                    <img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/youkepinglun_pic.png" alt="">
                                    <img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/youkepinglun_pic.png" alt="">
                                </div>
                                <div>
                                    <span>2015-12-22 14:12</span><span>来自 : 爱自驾电脑版</span>
                                </div>
                                <div class="huifu">
                                    <span style="color:#E68258;">爱自驾客服回复 :</span>
                                    <p>尊敬的爱自驾会员,给你立减400这个订单之后,此特患房型实际您成功预订的此客栈只收了您75元/晚,
                                        您可以仔细对比下的,感谢您对爱自驾网的关注与支持,欢迎您下次预订4007-999999,谢谢!祝您愉快! <br>
                                    (2015-12-1113:23:56)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="chakanquanbudianping" href="javascript:;">查看全部点评>></a>
                </div>
            </div>
        </div>
    </div>
    <!--尾部-->
    <?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>
</body>
</html>
<script type="text/javascript">

    // numberinput
    var chuyourenshu_chengren_prev=document.getElementsByClassName('chuyourenshu_chengren_prev')[0];
    var chuyourenshu_ertong_prev=document.getElementsByClassName('chuyourenshu_ertong_prev')[0];
    var chuyourenshu_chengren_next=document.getElementsByClassName('chuyourenshu_chengren_next')[0];
    var chuyourenshu_ertong_next=document.getElementsByClassName('chuyourenshu_ertong_next')[0];
    var chuyourenshu_chengren=document.getElementById('chuyourenshu_chengren');
    var chuyourenshu_ertong=document.getElementById('chuyourenshu_ertong');
    chuyourenshu_chengren_prev.onclick = function () {
        if(!parseInt(chuyourenshu_chengren.value)==0) {
            chuyourenshu_chengren.setAttribute("value", parseInt(chuyourenshu_chengren.value) - 1);
        }
    }
    chuyourenshu_chengren_next.onclick = function () {
        chuyourenshu_chengren.setAttribute("value", parseInt(chuyourenshu_chengren.value) + 1);
    }
    chuyourenshu_ertong_prev.onclick = function () {
        if(!parseInt(chuyourenshu_ertong.value)==0) {
            chuyourenshu_ertong.setAttribute("value", parseInt(chuyourenshu_ertong.value) - 1);
        }
    }
    chuyourenshu_ertong_next.onclick = function () {
        chuyourenshu_ertong.setAttribute("value", parseInt(chuyourenshu_ertong.value) + 1);
    }

    //登录判断
    function Alert(){
            // alert("请先登录");
        feihuiyuandenglu.style["display"] = "block";
        return false;
    }


    //行程简介
    // var xingchengjianjie_left = document.getElementById("xingchengjianjie").getElementsByClassName("shijianzhou")[0];
    // var xingchengjianjie_left_offsetTop=xingchengjianjie_left.offsetTop;
    // xingchengjianjie_left.onclick = function () {
    //     console.log(document.body.scrollTop);
    // }
    // $("#xingchengjianjie .shijianzhou").click(function(){
    //     console.log($(window).scrollTop(),$(this).offset().top);
    // });

</script>