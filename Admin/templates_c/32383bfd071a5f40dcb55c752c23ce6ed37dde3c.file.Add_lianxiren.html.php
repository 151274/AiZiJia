<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 16:47:34
         compiled from ".\templates\Add_lianxiren.html" */ ?>
<?php /*%%SmartyHeaderCode:89535abca826248dc1-99706321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32383bfd071a5f40dcb55c752c23ce6ed37dde3c' => 
    array (
      0 => '.\\templates\\Add_lianxiren.html',
      1 => 1522313248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89535abca826248dc1-99706321',
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="wrap scroll-1">
    <form action="Save_lianxiren.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
        <?php if ($_smarty_tpl->getVariable('arr')->value){?><input type="hidden" name="pdtj" value="<?php echo $_smarty_tpl->getVariable('arr')->value['id'];?>
"><?php }?>
        <tr>
            <td><label for="name">姓名</label></td>
            <td><input class="form-control" type="text" name="name" id="name" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['name'];?>
<?php }?>"></td>
        </tr>

        <tr>
            <td><label for="sex">性别</label></td>
            <td><input class="form-control" type="text" name="sex" id="sex" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['sex'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="phone">电话</label></td>
            <td><input class="form-control" type="text" name="phone" id="phone" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['phone'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="email">邮箱</label></td>
            <td><input class="form-control" type="text" name="email" id="email" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['email'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="dingdanid">订单ID</label></td>
            <td><input class="form-control" type="text" name="dingdanid" id="dingdanid" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['dingdanid'];?>
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