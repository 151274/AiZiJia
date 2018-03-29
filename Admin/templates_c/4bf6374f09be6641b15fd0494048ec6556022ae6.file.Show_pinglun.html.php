<?php /* Smarty version Smarty-3.0.5, created on 2018-03-08 14:28:22
         compiled from ".\templates\Show_pinglun.html" */ ?>
<?php /*%%SmartyHeaderCode:167325aa0d80627f051-61104185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bf6374f09be6641b15fd0494048ec6556022ae6' => 
    array (
      0 => '.\\templates\\Show_pinglun.html',
      1 => 1520420893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167325aa0d80627f051-61104185',
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
</head>
<body>
<div class="wrap scroll-1">

    <table cellpadding="0" cellspacing="0">
        <tr>
            <td valign="top">用户id</td>
            <td valign="top">线路id</td>
            <td valign="top">行程安排1,2,3</td>
            <td valign="top">餐食安排1,2,3</td>
            <td valign="top">交通安排1,2,3</td>
            <td valign="top">综合评价5分</td>
            <td valign="top">评论</td>
            <td valign="top">订单id</td>
            <td valign="top">评论日期</td>
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
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['anpai'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['canshi'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['jiaotong'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['zonghepingjia'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['pinglun'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['dingdanid'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['pinglunriqi'];?>
</td>
            <td valign="top">
                <a href="Add_pinglun.php?table=pinglun&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                <a href="delete.php?table=pinglun&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
            </td>
        </tr>
        <?php }} ?>
    </table>

</div>
</body>
</html>