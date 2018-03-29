<?php /* Smarty version Smarty-3.0.5, created on 2018-03-28 09:31:06
         compiled from ".\templates\Show_menuinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:40335abaf05a184d15-69523118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8025a3f62426567f974d769aafa87f3e2d95a93e' => 
    array (
      0 => '.\\templates\\Show_menuinfo.html',
      1 => 1522200663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40335abaf05a184d15-69523118',
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
            <td valign="top">菜单名称</td>
            <td valign="top">路径</td>
            <td valign="top">父级菜单的id</td>
            <td valign="top">操作</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
        <tr>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['pid_name'];?>
</td>
            <td valign="top">
                <a href="Add_menuinfo.php?table=menuinfo&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="">修改</a>
                <a href="delete.php?table=menuinfo&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
            </td>
        </tr>
        <?php }} ?>
    </table>
    <div class="a_link">
        <a href="Add_menuinfo.php" class="btn btn-default btn-sm">添加</a>
    </div>
</div>
</body>
</html>