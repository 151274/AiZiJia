<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 16:49:21
         compiled from ".\templates\Show_youke.html" */ ?>
<?php /*%%SmartyHeaderCode:304245abaf3b2210c96-39931754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e78276a08206ae1ebd8f4dd2c1084048d84b535b' => 
    array (
      0 => '.\\templates\\Show_youke.html',
      1 => 1522283896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304245abaf3b2210c96-39931754',
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
            <td valign="top">游客类别</td>
            <td valign="top">游客姓名</td>
            <td valign="top">游客性别</td>
            <td valign="top">游客手机号码</td>
            <td valign="top">证件类型</td>
            <td valign="top">证件号码</td>
            <td valign="top">订单id</td>
            <td valign="top">操作</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
        <tr>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['ykleibie'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['ykname'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['yksex'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['ykphone'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['zhengjianleixing'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['zhengjianhaoma'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['dingdanid'];?>
</td>
            <td valign="top">
                <a href="Add_youke.php?table=youke&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                <a href="delete.php?table=youke&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
            </td>
        </tr>
        <?php }} ?>
    </table>

</div>
</body>
</html>