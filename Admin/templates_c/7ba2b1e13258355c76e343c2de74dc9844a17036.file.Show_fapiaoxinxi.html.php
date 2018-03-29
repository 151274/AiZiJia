<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 17:09:09
         compiled from ".\templates\Show_fapiaoxinxi.html" */ ?>
<?php /*%%SmartyHeaderCode:201195abaf3ca612fb7-34148636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ba2b1e13258355c76e343c2de74dc9844a17036' => 
    array (
      0 => '.\\templates\\Show_fapiaoxinxi.html',
      1 => 1522283896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201195abaf3ca612fb7-34148636',
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
            <td valign="top">是否要发票0,1</td>
            <td valign="top">发票抬头</td>
            <td valign="top">发票明细</td>
            <td valign="top">配送地址</td>
            <td valign="top">订单表号</td>
            <td valign="top">操作</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
        <tr>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['sffp'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['fapiaotaitou'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['fapiaomingxi'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['peisongdizhi'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['dingdanid'];?>
</td>
            <td valign="top">
                <a href="Add_fapiaoxinxi.php?table=fapiaoxinxi&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                <a href="delete.php?table=fapiaoxinxi&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
            </td>
        </tr>
        <?php }} ?>
    </div>

</div>
</body>
</html>