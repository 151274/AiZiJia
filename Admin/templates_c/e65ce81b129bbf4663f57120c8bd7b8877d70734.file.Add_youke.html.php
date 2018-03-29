<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 16:58:45
         compiled from ".\templates\Add_youke.html" */ ?>
<?php /*%%SmartyHeaderCode:30605abcaac58dd7f5-62824032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e65ce81b129bbf4663f57120c8bd7b8877d70734' => 
    array (
      0 => '.\\templates\\Add_youke.html',
      1 => 1522313920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30605abcaac58dd7f5-62824032',
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
    <form action="Save_youke.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
        <?php if ($_smarty_tpl->getVariable('arr')->value){?><input type="hidden" name="pdtj" value="<?php echo $_smarty_tpl->getVariable('arr')->value['id'];?>
"><?php }?>
        <tr>
            <td><label for="ykleibie">游客类别</label></td>
            <td><input class="form-control" type="text" name="ykleibie" id="ykleibie" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['ykleibie'];?>
<?php }?>"></td>
        </tr>

        <tr>
            <td><label for="ykname">游客姓名</label></td>
            <td><input class="form-control" type="text" name="ykname" id="ykname" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['ykname'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="yksex">游客性别</label></td>
            <td><input class="form-control" type="text" name="yksex" id="yksex" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['yksex'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="ykphone">游客手机号码</label></td>
            <td><input class="form-control" type="text" name="ykphone" id="ykphone" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['ykphone'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="zhengjianleixing">证件类型</label></td>
            <td><input class="form-control" type="text" name="zhengjianleixing" id="zhengjianleixing" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['zhengjianleixing'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="zhengjianhaoma">证件号码</label></td>
            <td><input class="form-control" type="text" name="zhengjianhaoma" id="zhengjianhaoma" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['zhengjianhaoma'];?>
<?php }?>"></td>
        </tr>

        <tr>
            <td><label for="dingdanid">订单id</label></td>
            <td><?php if ($_smarty_tpl->getVariable('arr')->value){?><span><?php echo $_smarty_tpl->getVariable('arr')->value['dingdanid'];?>
</span><?php }?><input class="form-control" type="hidden" name="dingdanid" id="dingdanid" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['dingdanid'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class="btn btn-default"></td>
        </tr>
        </table>
    </form>
</div>
</body>
</html>