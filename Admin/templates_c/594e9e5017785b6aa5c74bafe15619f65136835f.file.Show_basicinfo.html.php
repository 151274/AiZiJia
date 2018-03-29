<?php /* Smarty version Smarty-3.0.5, created on 2018-03-28 10:05:23
         compiled from ".\templates\Show_basicinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:263655abaf86314bc39-40250884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '594e9e5017785b6aa5c74bafe15619f65136835f' => 
    array (
      0 => '.\\templates\\Show_basicinfo.html',
      1 => 1522202718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263655abaf86314bc39-40250884',
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
<div class="wrap">

    <table class="table table-bordered">
        <tr>
            <td valign="top">网站名称</td>
            <td valign="top">网站logo</td>
            <td valign="top">版权信息</td>
            <td valign="top">站点地址</td>
            <td valign="top">操作</td>
        </tr>
        <?php if ($_smarty_tpl->getVariable('arr')->value){?>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <tr>
            <td valign="top"><p><?php echo $_smarty_tpl->tpl_vars['value']->value['sitename'];?>
</p></td>
            <td valign="top"><p><img src="<?php echo $_smarty_tpl->getVariable('uploads')->value;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['sitelogo'];?>
" alt=""></p></td>
            <td valign="top"><p><?php echo $_smarty_tpl->tpl_vars['value']->value['copyinfo'];?>
</p></td>
            <td valign="top"><p><?php echo $_smarty_tpl->tpl_vars['value']->value['siteurl'];?>
</p></td>
            <td valign="top">
                <a href="Add_basicinfo.php?table=basicinfo&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                <a href="delete.php?table=basicinfo&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
            </td>
        </tr>
        <?php }} ?>
        <?php }?>
    </table>
    <?php if (!$_smarty_tpl->getVariable('arr')->value){?>
    <div class="a_link">
        <a href="Add_basicInfo.php" class="btn btn-default btn-sm">添加</a>
    </div>
    <?php }?>

</div>
</body>
</html>