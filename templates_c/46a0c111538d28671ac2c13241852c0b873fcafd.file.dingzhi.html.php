<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 14:53:06
         compiled from "Home\dingzhi.html" */ ?>
<?php /*%%SmartyHeaderCode:61085aa1fd9980f4b3-57183560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46a0c111538d28671ac2c13241852c0b873fcafd' => 
    array (
      0 => 'Home\\dingzhi.html',
      1 => 1522283896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61085aa1fd9980f4b3-57183560',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>爱自驾定制</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/reset.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/denglu.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/dingzhi.css">
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
js/jquery-1.9.1.js"></script>
</head>
<body>
<div class="wrap">
    <!--头部-->
    <?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <!--轮播图-->
    <?php $_template = new Smarty_Internal_Template("banner.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <!--主体内容-->
    <div id="main">
        <div class="content">
            <form action="">
                <!--联系人信息-->
                <div class="lianxiren style">
                    <h1>联系人信息 <span>(必填)</span></h1>
                    <div>
                        <span>姓名</span>
                        <input type="text" name="uname" id="uname" placeholder="请输入姓名">
                    </div>
                    <div>
                        <span>手机号码</span>
                        <input type="number" name="phone" id="phone" placeholder="请输入手机号码">
                    </div>
                    <div>
                        <span>邮箱</span>
                        <input type="email" name="email" id="email" placeholder="请输入邮箱">
                    </div>
                </div>
                <!--基本信息-->
                <div class="info style">
                    <h1>基本信息 <span>(必填)</span></h1>
                    <div>
                        <span>出游性质</span>
                        <ul>
                            <li class="first"><label for="chuyouxingzhi">公司</label><input type="radio" name="chuyouxingzhi" value="公司" id="chuyouxingzhi"></li>
                            <li><label for="chuyouxingzhi_2">私人</label><input type="radio" name="chuyouxingzhi" value="私人" id="chuyouxingzhi_2"></li>
                        </ul>
                    </div>
                    <div>
                        <span>出发地</span>
                        <input type="text" name="chufadi" placeholder="上海">
                    </div>
                    <div>
                        <span>目的地</span>
                        <input type="text" name="mudidi" placeholder="北京">
                    </div>
                    <div>
                        <span>出发日期</span>
                        <input type="text" name="chufariqi" placeholder="最早"> ~ <input type="text" name="chufariqi_2" placeholder="最晚">
                    </div>
                    <div>
                        <span>游玩天数</span>
                        <input type="text" name="youwantianshu" placeholder="请输入"> 天&nbsp
                        <input class="checkbox" type="checkbox" name="youwantianshu_ok" id="youwantianshu_ok"><label
                            for="youwantianshu_ok"> 可适当增减天数</label>
                    </div>
                    <div>
                        <span>出游人数</span>
                        <input type="number" name="chuyourenshu_chengren" placeholder=">3"> 成人 <input type="number" name="chuyourenshu_ertong" placeholder="请输入儿童"> 儿童
                    </div>
                    <div>
                        <span>人均预算</span>
                        <input type="text" name="renjunyusuan" placeholder="请输入人均预算">
                    </div>
                </div>
                <!--特色服务-->
                <div class="tesefuwu style">
                    <h1>特色服务</h1>
                    <div>
                        <ul>
                            <li class="first"><label for="jnjw_1">不限</label><input type="radio" name="jnjw" id="jnjw_1"></li>
                            <li><label for="jnjw_2">境内</label><input type="radio" name="jnjw" id="jnjw_2"></li>
                            <li><label for="jnjw_3">境外</label><input type="radio" name="jnjw" id="jnjw_3"></li>
                        </ul>
                        <ul>
                            <li class="first"><label for="shijian_1">不限</label><input type="radio" name="shijian" id="shijian_1"></li>
                            <li><label for="shijian_2">紧凑</label><input type="radio" name="shijian" id="shijian_2"></li>
                            <li><label for="shijian_3">适中</label><input type="radio" name="shijian" id="shijian_3"></li>
                            <li><label for="shijian_4">宽松</label><input type="radio" name="shijian" id="shijian_4"></li>
                        </ul>
                        <ul>
                            <li class="first"><label for="xingji_1">不限</label><input type="radio" name="xingji" id="xingji_1"></li>
                            <li><label for="xingji_2">三星/舒适</label><input type="radio" name="xingji" id="xingji_2"></li>
                            <li><label for="xingji_3">四星/高档</label><input type="radio" name="xingji" id="xingji_3"></li>
                            <li><label for="xingji_4">五星/豪华</label><input type="radio" name="xingji" id="xingji_4"></li>
                            <li><label for="xingji_5">特色住宿</label><input type="radio" name="xingji" id="xingji_5"></li>
                        </ul>
                        <textarea name="beizhu" id="beizhu" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="submit">
                    <input type="submit" value="提交">
                </div>
            </form>
        </div>
    </div>
    <!--尾部-->
    <?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>
</body>
</html>
<script type="text/javascript">
    $(".style>div ul>li").click(function() {
        $(this).addClass("first").siblings().removeClass("first");
    });
</script>