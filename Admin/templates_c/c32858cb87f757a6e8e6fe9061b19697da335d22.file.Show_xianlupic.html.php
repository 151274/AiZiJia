<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 08:54:12
         compiled from ".\templates\Show_xianlupic.html" */ ?>
<?php /*%%SmartyHeaderCode:166275abb28b0356998-22159450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c32858cb87f757a6e8e6fe9061b19697da335d22' => 
    array (
      0 => '.\\templates\\Show_xianlupic.html',
      1 => 1522283896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166275abb28b0356998-22159450',
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
            <td valign="top">线路名称</td>
            <td valign="top">图片</td>
            <td valign="top">操作</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
        <tr>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['xianlumingcheng'];?>
</td>
            <td valign="top"><img src="<?php echo $_smarty_tpl->getVariable('uploads')->value;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['pic'];?>
" alt=""></td>
            <td valign="top">
                <a href="Add_xianlupic.php?table=xianlupic&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                <a href="delete.php?table=xianlupic&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
            </td>
        </tr>
        <?php }} ?>
    </table>
    <div class="a_link">
        <a href="Add_xianlupic.php" class="btn btn-default btn-sm">添加</a>
    </div>

</div>
</body>
</html>