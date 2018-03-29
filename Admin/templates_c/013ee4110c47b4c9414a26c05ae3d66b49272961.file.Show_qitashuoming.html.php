<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 16:43:06
         compiled from ".\templates\Show_qitashuoming.html" */ ?>
<?php /*%%SmartyHeaderCode:174055abca71ad63b19-11393157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '013ee4110c47b4c9414a26c05ae3d66b49272961' => 
    array (
      0 => '.\\templates\\Show_qitashuoming.html',
      1 => 1522312982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174055abca71ad63b19-11393157',
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

    <table class="table table-bordered">
        <tr>
            <td valign="top">其他说明</td>
            <td valign="top">操作</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
        <tr>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['qitashuoming'];?>
</td>
            <td valign="top">
                <a href="Add_qitashuoming.php?table=qitashuoming&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                <a href="delete.php?table=qitashuoming&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
            </td>
        </tr>
        <?php }} ?>
    </table>
    <div class="a_link">
        <a href="Add_qitashuoming.php" class="btn btn-default btn-sm">添加</a>
    </div>
</div>
</body>
</html>