<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 09:16:16
         compiled from "Home\zhifu.html" */ ?>
<?php /*%%SmartyHeaderCode:266135ab23083038ad5-24647328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a42060841bfe19567308007fda9cde3c3f1ae72' => 
    array (
      0 => 'Home\\zhifu.html',
      1 => 1522283896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266135ab23083038ad5-24647328',
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
css/zhifu.css">
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
                <span>自驾团</span> > <span>境内</span> > <span>云南落地自驾行摄之旅</span> > <span>我要报名</span> > <span>在线支付</span>
            </div>
            <!--流程-->
            <div class="liucheng">
                <img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/zhifu.png" alt="">
            </div>
            <!--提交成功-->
            <div class="tijiaochenggong">
                <h1>提交成功，请您于<span style="color:#E9532C;" id="timetext"></span>内完成支付<span>（逾期订单将被取消）</span><span style="color:#E9532C;">应付金额 ：￥<?php echo $_smarty_tpl->getVariable('arr')->value['zongjiage'];?>
</span></h1>
            </div>
            <form action="zhifu_chuli.php" method="post">
                <input type="hidden" name="date" value="<?php echo $_smarty_tpl->getVariable('arr')->value['datetime'];?>
">
                <!--支付方式-->
                <div>
                    <h1>请选择支付方式</h1>
                    <ul>
                        <li><label for="zhifubaozhifu"><span>支付宝支付</span><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/zhifubaozhifu.png"><span>快捷方便</span><input
                                type="radio" checked name="zhifufangshi" value="zhifubao" id="zhifubaozhifu"></label></li>
                        <li><label for="weixinzhifu"><span>微信支付</span><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/weixinzhifu.png"><input
                                type="radio" name="zhifufangshi" value="weixin" id="weixinzhifu"></label></li>
                        <li><label for="yinlianzhifu"><span>银联支付</span><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/yinlian.png"><input
                                type="radio" name="zhifufangshi" value="yinlian" id="yinlianzhifu"></label></li>
                    </ul>
                </div>
                <!--提交-->
                <div class="tijiao">
                    <input type="submit" value="确定并支付">
                    <div>
                        实付金额 ：<span style="color:#EC6236;font-size:24px;">￥<?php echo $_smarty_tpl->getVariable('arr')->value['zongjiage'];?>
</span>
                    </div>
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
    var hour,minute,second;//时 分 秒
    hour=23;
    minute=second=59;//初始化
    var millisecond=0;//毫秒
    var int;
    function Reset()//重置
    {
        window.clearInterval(int);
        millisecond=minute=second=0;
        document.getElementById('timetext').innerHTML='24时00分00秒';
    }

    function start()//开始
    {
        int=setInterval(timer,50);
    }

    function timer()//计时
    {
        millisecond=millisecond+50;
        if(millisecond>=1000)
        {
            millisecond=0;
            second=second-1;
        }
        if(second==0)
        {
            second=59;
            minute=minute-1;
        }

        if(minute==0)
        {
            minute=59;
            hour=hour-1;
        }
        document.getElementById('timetext').innerHTML=hour+'时'+minute+'分'+second+'秒';

    }

    function stop()//暂停
    {
        window.clearInterval(int);
    }
    window.onload = start;
</script>