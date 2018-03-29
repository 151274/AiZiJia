<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 16:43:22
         compiled from ".\templates\Show_lianxiren.html" */ ?>
<?php /*%%SmartyHeaderCode:36585abaf39c260da3-04765831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e54b63cf1025f259225e57b39f71cfc8183e3007' => 
    array (
      0 => '.\\templates\\Show_lianxiren.html',
      1 => 1522283896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36585abaf39c260da3-04765831',
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

    <table class="table table-bordered" style="margin-bottom: 40px;">
        <tr>
            <td valign="top">姓名</td>
            <td valign="top">性别</td>
            <td valign="top">电话</td>
            <td valign="top">邮箱</td>
            <td valign="top">订单id</td>
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
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['sex'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['phone'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['email'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['dingdanid'];?>
</td>
            <td valign="top">
                <a href="Add_lianxiren.php?table=lianxiren&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                <a href="delete.php?table=lianxiren&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
            </td>
        </tr>
        <?php }} ?>
    </table>

</div>
</body>
</html>