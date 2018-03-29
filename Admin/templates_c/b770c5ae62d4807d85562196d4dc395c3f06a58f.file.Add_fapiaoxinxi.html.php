<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 17:14:05
         compiled from ".\templates\Add_fapiaoxinxi.html" */ ?>
<?php /*%%SmartyHeaderCode:151895abcae5d6603c9-14112286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b770c5ae62d4807d85562196d4dc395c3f06a58f' => 
    array (
      0 => '.\\templates\\Add_fapiaoxinxi.html',
      1 => 1522314840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151895abcae5d6603c9-14112286',
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
    <form action="Save_fapiaoxinxi.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
        <?php if ($_smarty_tpl->getVariable('arr')->value){?><input type="hidden" name="pdtj" value="<?php echo $_smarty_tpl->getVariable('arr')->value['id'];?>
"><?php }?>
        <tr>
            <td><label for="sffp">是否要发票0,1</label></td>
            <td><input class="form-control" type="number" name="sffp" id="sffp" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['sffp'];?>
<?php }?>"></td>
        </tr>

        <tr>
            <td><label for="fapiaotaitou">发票抬头</label></td>
            <td><input class="form-control" type="text" name="fapiaotaitou" id="fapiaotaitou" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['fapiaotaitou'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="fapiaomingxi">发票明细</label></td>
            <td><input class="form-control" type="text" name="fapiaomingxi" id="fapiaomingxi" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['fapiaomingxi'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="peisongdizhi">配送地址</label></td>
            <td><input class="form-control" type="text" name="peisongdizhi" id="peisongdizhi" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['peisongdizhi'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="dingdanid">订单ID</label></td>
            <td><input class="form-control" type="number" name="dingdanid" id="dingdanid" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['dingdanid'];?>
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