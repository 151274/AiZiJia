<?php /* Smarty version Smarty-3.0.5, created on 2018-03-28 11:59:59
         compiled from ".\templates\Add_users.html" */ ?>
<?php /*%%SmartyHeaderCode:81075abb133feac805-62692025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a0211eb06cdfe4de9eb0d30ca6246c74f8b7690' => 
    array (
      0 => '.\\templates\\Add_users.html',
      1 => 1522209594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81075abb133feac805-62692025',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/<?php echo $_smarty_tpl->getVariable('css')->value;?>
">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="wrap scroll-1">
    <form action="Save_users.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
        <?php if ($_smarty_tpl->getVariable('arr')->value){?><input type="hidden" name="pdtj" value="<?php echo $_smarty_tpl->getVariable('arr')->value['id'];?>
"><?php }?>
        <tr>
            <td><label for="name">用户名</label></td>
            <td><input class="form-control" type="text" name="name" id="name" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['name'];?>
<?php }?>"></td>
        </tr>

        <tr>
            <td><label for="email">邮箱</label></td>
            <td><input class="form-control" type="text" name="email" id="email" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['email'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="phone">手机号</label></td>
            <td><input class="form-control" type="text" name="phone" id="phone" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['phone'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="password">密码</label></td>
            <td><input class="form-control" type="text" name="password" id="password" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['password'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="yaoqingma">邀请码</label></td>
            <td><input class="form-control" type="text" name="yaoqingma" id="yaoqingma" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['yaoqingma'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="photo">头像</label></td>
            <td><input class="form-control" type="text" name="photo" id="photo" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['photo'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="level">等级</label></td>
            <td><input class="form-control" type="text" name="level" id="level" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['level'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="erweima">二维码</label></td>
            <td><input class="form-control" type="text" name="erweima" id="erweima" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['erweima'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="guanzhu">关注数量</label></td>
            <td><input class="form-control" type="text" name="guanzhu" id="guanzhu" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['guanzhu'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="fensi">粉丝数量</label></td>
            <td><input class="form-control" type="text" name="fensi" id="fensi" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['fensi'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td></td>
            <td align="right"><input type="submit" class="btn btn-default"></td>
        </tr>
        </table>
    </form>
</div>
</body>
</html>