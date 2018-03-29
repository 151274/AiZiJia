<?php /* Smarty version Smarty-3.0.5, created on 2018-03-28 11:33:34
         compiled from ".\templates\Add_menuinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:261265abb0d0e393b51-70063880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ce218012691449dfdf1fc836a47c77f47088e97' => 
    array (
      0 => '.\\templates\\Add_menuinfo.html',
      1 => 1522208011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261265abb0d0e393b51-70063880',
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
    <form action="Save_menuinfo.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
        <?php if ($_smarty_tpl->getVariable('arr')->value){?><input class="form-control" type="hidden" name="pdtj" value="<?php echo $_smarty_tpl->getVariable('arr')->value['id'];?>
"><?php }?>
        <tr>
            <td><label for="name">菜单名称</label></td>
            <td><input class="form-control" type="text" name="name" id="name" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['name'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="url">路径</label></td>
            <td><input class="form-control" type="text" name="url" id="url" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['url'];?>
<?php }?>"></td>
        </tr>

        <tr>
            <td><label for="pid">父级菜单的id</label></td>
            <!--<input type="number" name="pid" id="pid" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['pid'];?>
<?php }?>">-->
            <td><select class="form-control" name="pid" id="pid">
                <?php if (!$_smarty_tpl->getVariable('arr')->value){?><option disabled selected >请选择父级菜单</option><?php }?>
                <option value="1" <?php if ($_smarty_tpl->getVariable('arr')->value){?><?php if ($_smarty_tpl->getVariable('arr')->value['pid']==1){?>selected<?php }?><?php }?>>头部导航</option>
                <option value="2" <?php if ($_smarty_tpl->getVariable('arr')->value){?><?php if ($_smarty_tpl->getVariable('arr')->value['pid']==2){?>selected<?php }?><?php }?>>尾部导航</option>
            </select></td>
        </tr>
        <tr>
            <td></td>
            <td align="right"><input type="submit" class="btn btn-default"></td>
        </tr>
    </form>
</div>
</body>
</html>