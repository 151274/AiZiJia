<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 09:16:11
         compiled from "Home\tianxiedingdan.html" */ ?>
<?php /*%%SmartyHeaderCode:80905ab06fe9ca9ac5-72147297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a553e909fb992645866c40b3317b57c9295e9be5' => 
    array (
      0 => 'Home\\tianxiedingdan.html',
      1 => 1522283896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80905ab06fe9ca9ac5-72147297',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>填写订单</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/reset.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/denglu.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/tianxiedingdan.css">
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
                <span>自驾团</span> > <span>境内</span> > <span>云南落地自驾行摄之旅</span> > <span>我要报名</span> > <span>填写订单</span>
            </div>
            <!--流程-->
            <div class="liucheng">
                <img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/tianxiedingdan_liucheng.png" alt="">
            </div>
            <form action="zhifu.php" method="post">
                <!--线路信息-->
                <div>
                    <h1>线路信息 <a href="#">修改</a></h1>
                    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value['post']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
                    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
">
                    <?php }} ?>
                    <div>
                        <span>线路名称：</span>[<?php echo $_smarty_tpl->getVariable('arr')->value['post']['chufachengshi'];?>
出发]<a href="#"><?php echo $_smarty_tpl->getVariable('arr')->value['list']['lingduiname'];?>
：<?php echo $_smarty_tpl->getVariable('arr')->value['list']['xianlumingcheng'];?>
</a>
                    </div>
                    <div>
                        <span>出游日期<span style="color: #78C8E2;">*</span>：</span><?php echo $_smarty_tpl->getVariable('arr')->value['post']['chufariqi'];?>

                    </div>
                    <div>
                        <span>成人<span style="color: #78C8E2;">*</span>：</span><?php echo $_smarty_tpl->getVariable('arr')->value['post']['chuyourenshu_chengren'];?>
 x ￥5280
                    </div>
                    <div>
                        <span>儿童：</span><?php echo $_smarty_tpl->getVariable('arr')->value['post']['chuyourenshu_ertong'];?>
 x ￥5280
                    </div>
                    <div class="fangjian">
                        <span>房间<span style="color: #78C8E2;">*</span>：</span>
                        <a href="javascript:;" class="fangjian_prev">-</a><input type="number" name="fangjian" id="fangjian" value="1" min="0"><a href="javascript:;" class="fangjian_next">+</a> (2人间)
                    </div>
                    <div>
                        <span>是否同意拼房<span style="color: #78C8E2;">*</span>：</span>
                        <input type="radio" checked name="shifoupinfang" id="shifoupinfang_shi" value="1"><label
                            for="shifoupinfang_shi"> 同意拼房</label>
                        <input type="radio" name="shifoupinfang" id="shifoupinfang_fou" value="0"><label for="shifoupinfang_fou"> 不同意拼房，愿意支付房差费用￥3500</label>
                    </div>
                </div>
                <!--费用说明-->
                <div class="feiyongshuoming">
                    <h1>
                        <ul>
                            <li class="first">费用说明</li>
                            <li>退改说明</li>
                        </ul>
                    </h1>
                    <pre>
<h2>费用包含：</h2>*+7x24小时优秀中/英双语自驾向导服务（国内出发，全程陪同）；
*+国内往返美国经济舱机票、燃油附加税、机票税；
*+包含好莱坞环球影城+17英里海岸门票；
*+美国当地钻酒店住宿；
<a href="javascript:;">阅读全部</a></pre>
                </div>
                <!--联系人信息-->
                <div>
                    <h1>联系人信息</h1>
                    <div>
                        <span>姓名<span style="color: #78C8E2">*</span></span>
                        <input type="text" name="name" id="username" placeholder="请输入姓名">
                    </div>
                    <div>
                        <span>性别</span>
                        <input type="radio" checked name="sex" id="sex_nan" value="男"><label for="sex_nan"> 男</label>
                        <input type="radio" name="sex" id="sex_nv" value="女"><label for="sex_nv"> 女</label>
                    </div>
                    <div>
                        <span>手机号码<span style="color: #78C8E2;">*</span></span>
                        <input type="number" name="phone" id="phone" placeholder="请输入手机号码">
                    </div>
                    <div>
                        <span>邮箱<span style="color: #78C8E2;">*</span></span>
                        <input type="email" name="email" id="email" placeholder="请输入邮箱">
                    </div>
                </div>
                <!--游客信息-->
                <div class="youkexinxi">
                    <h1>游客信息 <a href="#">常用游客</a></h1>
                    <ul>
                        <li><!--游客1-->
                            <div class="youke">游客<span>1</span></div>
                            <div>
                                <span>游客类型</span>
                                <input type="radio" checked name="ykleibie-1" id="youkeleixing_chengren" value="成人">
                                <label for="youkeleixing_chengren"> 成人</label>
                                <input type="radio" name="ykleibie-1" id="youkeleixing_ertong" value="儿童">
                                <label for="youkeleixing_ertong"> 儿童</label>
                            </div>
                            <div>
                                <span>姓名<span style="color: #78C8E2">*</span></span>
                                <select name="name_type-1" id="name_type">
                                    <option value="中文" selected>中文</option>
                                    <option value="英文">英文</option>
                                </select>
                                <input type="text" name="ykname-1" id="name" placeholder="请输入姓名">
                            </div>
                            <div>
                                <span>性别</span>
                                <input type="radio" checked name="yksex-1" id="youke_sex_nan" value="男">
                                <label for="youke_sex_nan"> 男</label>
                                <input type="radio" name="yksex-1" id="youke_sex_nv" value="女">
                                <label for="youke_sex_nv"> 女</label>
                            </div>
                            <div>
                                <span>手机号码<span style="color: #78C8E2;">*</span></span>
                                <input type="number" name="ykphone-1" id="youke_phone" placeholder="请输入手机号码">
                            </div>
                            <div>
                                <span>证件<span style="color: #78C8E2">*</span></span>
                                <select name="zhengjianleixing-1" id="zhengjian">
                                    <option value="护照" selected>护照</option>
                                    <option value="身份证">身份证</option>
                                </select>
                                <input type="text" name="zhengjianhaoma-1" id="zhengjian_num" placeholder="证件号码">
                            </div>
                        </li>
                    </ul>
                    <div class="a_tianjiayouke">
                        <a href="javascript:;">+添加游客</a>
                    </div>
                </div>
                <!--保险-->
                <div class="baoxian">
                    <h1>保险 <a href="#">详情></a></h1>
                    <div>
                        <input type="radio" checked name="baoxianid" id="baoxian_1" value="1">
                        <label for="baoxian_1">平安爱自驾境外长线保险 <span>经典险2份</span><span>￥177</span>/一份</label>
                    </div>
                    <div>
                        <input type="radio" name="baoxianid" id="baoxian_2" value="2">
                        <label for="baoxian_2">平安爱自驾境外长线保险 <span>经典险2份</span><span>￥177</span>/一份</label>
                    </div>
                </div>
                <!--预订信息-->
                <div class="yudingxinxi">
                    <h1>预定信息</h1>
                    <div>
                        <span>发票信息：</span>是否需要发票：
                        <input type="radio" checked name="sffp" id="fapiao_shi" value="1"><label for="fapiao_shi"> 是</label>
                        <input type="radio" name="sffp" id="fapiao_fou" value="0"><label for="fapiao_fou"> 否</label>
                    </div>
                    <div>
                        <span>发票抬头：</span>
                        <input type="text" name="fapiaotaitou" id="fapiaotaitou" placeholder="请输入发票抬头">
                    </div>
                    <div>
                        <span>发票明细：</span>
                        <select name="fapiaomingxi" id="fapiaomingxi">
                            <option value="会议费">会议费</option>
                            <option value="车费">车费</option>
                        </select>
                    </div>
                    <div>
                        <span>配送地址：</span>
                        <input type="text" name="peisongdizhi" id="peisongdizhi" placeholder="请输入配送地址">
                    </div>
                    <a href="#">更多要求>></a>
                </div>
                <!--总价-->
                <div class="zongjia">
                    <h1>总价：1 x <span>￥</span>5280 + 1 x <span>￥</span>120 + 1 x <span>￥</span>170 = <span>￥</span><span>5570</span></h1>
                    <input type="hidden" name="zongjiage" value="5570">
                </div>
                <!--条款-->
                <div class="tiaokuan">
                    <input type="checkbox" name="tiaokuan" id="tiaokuan"><label for="tiaokuan"> 已同意爱自驾条款，并同意</label>
                </div>
                <!--提交-->
                <div class="tijiao">
                    <input type="submit" value="确定订单并提交">
                </div>
            </form>
            <!--悬浮窗-->
            <div class="xuanfuchuang">
                <ul>
                    <li><h2>订单信息</h2></li>
                    <li>
                        <div><span>成人</span><span>1 x ￥5280</span></div>
                        <div><span>房间 x 1</span></div>
                    </li>
                    <li>
                        <div><span>意外旅游险</span><span>1 x ￥120</span></div>
                    </li>
                    <li>
                        <div><span>优惠金额</span><span><font color="#60C0DD">-￥0</font></span></div>
                    </li>
                    <li>
                        <div><span>总计</span><span style="color:#EC6637">￥<span style="font-size: 18px;">5400</span></span></div>
                    </li>
                </ul>

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
    var fangjian_prev=document.getElementsByClassName('fangjian_prev')[0];
    var fangjian_next=document.getElementsByClassName('fangjian_next')[0];
    var fangjian=document.getElementById('fangjian');
    fangjian_prev.onclick = function () {
        if(!parseInt(fangjian.value)==0) {
            fangjian.setAttribute("value", parseInt(fangjian.value) - 1);
        }
    }
    fangjian_next.onclick = function () {
        fangjian.setAttribute("value", parseInt(fangjian.value) + 1);
    }

    $(".youkexinxi .a_tianjiayouke a").click(function () {
        var clone = $(".youkexinxi ul li").last().clone();

        var youke = +(clone.find(".youke").find("span").html())+1;
        clone.find(".youke").find("span").html(youke);
        //成人
        var type_1 = clone.find("div:nth-of-type(2) input:nth-of-type(1)").attr("name");
        type_1 = type_1.split("-");
        type_1[1]=+type_1[1]+1;
        type_1 = type_1.join("-");
        clone.find("div:nth-of-type(2) input:nth-of-type(1)").attr("name",type_1);
        //儿童
        var type_1_2 = clone.find("div:nth-of-type(2) input:nth-of-type(2)").attr("name");
        type_1_2 = type_1_2.split("-");
        type_1_2[1]=+type_1_2[1]+1;
        type_1_2 = type_1_2.join("-");
        clone.find("div:nth-of-type(2) input:nth-of-type(2)").attr("name",type_1_2);
        //男
        var type_2_1 = clone.find("div:nth-of-type(4) input:nth-of-type(1)").attr("name");
        type_2_1 = type_2_1.split("-");
        type_2_1[1]=+type_2_1[1]+1;
        type_2_1 = type_2_1.join("-");
        clone.find("div:nth-of-type(4) input:nth-of-type(1)").attr("name",type_2_1);
        //女
        var type_2_2 = clone.find("div:nth-of-type(4) input:nth-of-type(2)").attr("name");
        type_2_2 = type_2_2.split("-");
        type_2_2[1]=+type_2_2[1]+1;
        type_2_2 = type_2_2.join("-");
        clone.find("div:nth-of-type(4) input:nth-of-type(2)").attr("name",type_2_2);

        //姓名
        var type_3 = clone.find("div:nth-of-type(3) input").attr("name");
        type_3 = type_3.split("-");
        type_3[1]=+type_3[1]+1;
        type_3 = type_3.join("-");
        clone.find("div:nth-of-type(3) input").attr("name",type_3);

        //手机号
        var type_4 = clone.find("div:nth-of-type(5) input").attr("name");
        type_4 = type_4.split("-");
        type_4[1]=+type_4[1]+1;
        type_4 = type_4.join("-");
        clone.find("div:nth-of-type(5) input").attr("name",type_4);

        //手机号
        var type_5 = clone.find("div:nth-of-type(6) input").attr("name");
        type_5 = type_5.split("-");
        type_5[1]=+type_5[1]+1;
        type_5 = type_5.join("-");
        clone.find("div:nth-of-type(6) input").attr("name",type_5);

        //姓名类型
        var type_6 = clone.find("div:nth-of-type(3) select").attr("name");
        type_6 = type_6.split("-");
        type_6[1]=+type_6[1]+1;
        type_6 = type_6.join("-");
        clone.find("div:nth-of-type(3) select").attr("name",type_6);
        //手机号
        var type_7 = clone.find("div:nth-of-type(6) select").attr("name");
        type_7 = type_7.split("-");
        type_7[1]=+type_7[1]+1;
        type_7 = type_7.join("-");
        clone.find("div:nth-of-type(6) select").attr("name",type_7);

        $(".youkexinxi ul").append(clone);
    });


</script>