<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 09:13:19
         compiled from "Home\header.html" */ ?>
<?php /*%%SmartyHeaderCode:66445abc3daf925422-54811570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35d63d2e7f05ba1314777c079869fd9c3d9e367a' => 
    array (
      0 => 'Home\\header.html',
      1 => 1522285997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66445abc3daf925422-54811570',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<header>
    <div class="header_top">
        <div class="content" style="z-index: 1">
            <div class="chengshi"><span></span>北京 <a href="#">切换</a></div>
            <div class="app_down"><a href="#"><span></span>下载手机app</a></div>
            <?php if (!isset($_SESSION['username'])){?>
                <div class="right right_one">
                    <a href="#" class="qq"></a>
                    <a href="#" class="xlwb"></a>
                    <div class="login">
                        <a href="#" class="denglu">登录</a> | <a href="#" class="zhuce">注册</a>
                    </div>
                </div>
            <?php }else{ ?>
                 <!--right_two 登录后的div -->
                <div class="right right_two">
                <div class="user">
                <div class="touxiang_top"><img src="<?php echo $_smarty_tpl->getVariable('uploads')->value;?>
<?php echo $_SESSION['username']['photo'];?>
"></div>
                <span><?php echo $_SESSION['username']['name'];?>
</span>
                <a href="#">></a>
                <ul class="erji">
                <li><a href="gerenzhuye.php">个人主页</a></li>
                <li><a href="tuichudenglu.php">退出登录</a></li>
                </ul>
                </div>
                <a href="dingzhi.php">线路订制</a>
                </div>
                <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
js/tuichudenglu.js"></script>
            <?php }?>
        </div>
    </div>
    <div class="header_bottom">
        <div class="content">
            <a href="index.php"><div class="logo" style="background:url('<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/<?php echo $_smarty_tpl->getVariable('arr')->value['basicinfo']['sitelogo'];?>
') 0 0 no-repeat;"></div></a>
            <div class="menu">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
?>
                    <?php if ($_smarty_tpl->tpl_vars['val']->value['pid']==1){?>
                    <li><a <?php if ($_smarty_tpl->tpl_vars['val']->value['name']=='自驾团'){?>class="first"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</a></li>
                    <?php }?>
                    <?php }} ?>
                </ul>
            </div>
        </div>
    </div>
</header>

<!--非会员登陆页面-->
<div id="feihuiyuandenglu" style="display: none;">
    <div>
        <a href="javascript:;" class="tuichu"></a>
        <div class="feihuiyuandenglu_logo"></div>
        <form action="login.php" method="post" class="feihuiyuandenglu_form">
            <div><input type="text" name="username" placeholder="邮箱/手机/用户名"></div>
            <div><input type="password" name="password" placeholder="密码"></div>
            <div class="submit"><input type="submit" value="登录"></div>
            <div class="wangjimima">
                <a href="#">忘记密码</a>
                <span>还没有账号？<a href="#" class="mianfeizhuce">免费注册</a></span>
            </div>
            <hr color="#50BBDB">
            <span>其他报名方式</span>
            <a href="#">不登录，直接报名></a>
        </form>
    </div>
</div>
<!--非会员注册页面-->
<div id="feihuiyuanzhuce" style="display: none;">
    <div>
        <a href="javascript:;" class="tuichu"></a>
        <div class="feihuiyuandenglu_logo"></div>
        <form action="zhuce.php" method="post" class="feihuiyuandenglu_form feihuiyuanzhuce">
            <div><input type="email" name="email" placeholder="请输入邮箱"></div>
            <div><input type="text" name="name" placeholder="用户名，4-16个字符，字母/中文/数字"></div>
            <div><input type="password" name="password" placeholder="设置密码"></div>
            <div><input type="password" name="password_shi" placeholder="确认密码"></div>
            <div><input type="text" name="yaoqingma" placeholder="输入邀请码，可不填"></div>
            <div class="wangjimima">
                <span style="font-size:12px;">注册视为同意《爱自驾用户使用协议》</span>
            </div>
            <div class="submit"><input type="submit" value="注册"></div>
            <hr color="#50BBDB">
            <span>其他报名方式</span>
            <a href="#">快速登陆></a>
        </form>
    </div>
</div>
<!--会员登录页面-->
<!--<div id="huiyuandenglu" style="display: none">-->
    <!--<div>-->
        <!--<a href="javascript:;" class="tuichu"></a>-->
        <!--<div class="left">-->
            <!--<h2>会员登录</h2>-->
            <!--<form action="" class="huiyuandenglu">-->
                <!--<div><input type="text" name="username" placeholder="用户名"></div>-->
                <!--<div><input type="password" name="password" placeholder="密码"></div>-->
                <!--<div>点击显示</div>-->
                <!--<div><input type="checkbox" name="auto_login" id="auto_login" value="ok"><label-->
                        <!--for="auto_login">两周内自动登录</label><a href="#" class="wangjimima">忘记密码</a></div>-->
                <!--<div><a href="#">没有用户名,立即注册</a></div>-->
                <!--<div class="submit"><input type="submit" value="立即登录"></div>-->
            <!--</form>-->
        <!--</div>-->
        <!--<div class="right">-->
            <!--<h2>非会员预订</h2>-->
            <!--<a href="#">不登录,直接预订></a>-->
        <!--</div>-->
        <!--</form>-->
    <!--</div>-->
<!--</div>-->
<?php if (!isset($_SESSION['username'])){?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
js/login.js"></script>
<?php }?>