<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 16:58:57
         compiled from ".\templates\Show_baoxian.html" */ ?>
<?php /*%%SmartyHeaderCode:67055abaf3b6134b32-11710351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b072c73f1a90e16a70c285a792d44025b87458d' => 
    array (
      0 => '.\\templates\\Show_baoxian.html',
      1 => 1522283896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67055abaf3b6134b32-11710351',
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
            <td valign="top">保险种类</td>
            <td valign="top">保险分数</td>
            <td valign="top">保险价格</td>
            <td valign="top">保险险情</td>
            <td valign="top">操作</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
        <tr>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['xianzhong'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['fenshu'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['jiage'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['xiangqing'];?>
</td>
            <td valign="top">
                <a href="Add_baoxian.php?table=baoxian&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                <a href="delete.php?table=baoxian&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
            </td>
        </tr>
        <?php }} ?>
    </table>
    <div class="a_link">
        <a href="Add_baoxian.php" class="btn btn-default btn-sm">添加</a>
    </div>

</div>
</body>
</html>