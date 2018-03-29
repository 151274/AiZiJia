<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 17:14:19
         compiled from ".\templates\Show_dingdan.html" */ ?>
<?php /*%%SmartyHeaderCode:322805abaf36d4a33f7-36261159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8f82ba51ff35b1f1723b060e7fb8bc1de28f71e' => 
    array (
      0 => '.\\templates\\Show_dingdan.html',
      1 => 1522283896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322805abaf36d4a33f7-36261159',
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
            <td valign="top">用户编号</td>
            <td valign="top">线路id</td>
            <td valign="top">订单日期</td>
            <td valign="top">成人数量</td>
            <td valign="top">儿童数量</td>
            <td valign="top">房间数量</td>
            <td valign="top">是否拼房0,1</td>
            <td valign="top">保险id</td>
            <td valign="top">订单总价格</td>
            <td valign="top">状态id</td>
            <td valign="top">操作</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
        <tr>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['userid'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['xid'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['dingdanriqi'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['chengrenshuliang'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['ertongshuliang'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['fangjianshuliang'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['pinfang'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['baoxianid'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['zongjiage'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['zhuangtaiid'];?>
</td>
            <td valign="top">
                <a href="Add_dingdan.php?table=dingdan&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                <a href="delete.php?table=dingdan&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
            </td>
        </tr>
        <?php }} ?>
    </table>

</div>
</body>
</html>