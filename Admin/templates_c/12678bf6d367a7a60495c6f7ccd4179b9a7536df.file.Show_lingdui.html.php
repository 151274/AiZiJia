<?php /* Smarty version Smarty-3.0.5, created on 2018-03-28 10:54:27
         compiled from ".\templates\Show_lingdui.html" */ ?>
<?php /*%%SmartyHeaderCode:10525abb03e356a2f7-01978211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12678bf6d367a7a60495c6f7ccd4179b9a7536df' => 
    array (
      0 => '.\\templates\\Show_lingdui.html',
      1 => 1522204390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10525abb03e356a2f7-01978211',
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
            <td valign="top">领队名称</td>
            <td valign="top">领队图标</td>
            <td valign="top">领队介绍</td>
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
            <td valign="top"><img src="<?php echo $_smarty_tpl->getVariable('uploads')->value;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['pic'];?>
" alt=""></td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</td>
            <td valign="top">
                <a href="Add_lingdui.php?table=lingdui&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                <a href="delete.php?table=lingdui&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
            </td>
        </tr>
        <?php }} ?>
    </table>
    <div class="a_link">
        <a href="Add_lingdui.php" class="btn btn-default btn-sm">添加</a>
    </div>

</div>
</body>
</html>