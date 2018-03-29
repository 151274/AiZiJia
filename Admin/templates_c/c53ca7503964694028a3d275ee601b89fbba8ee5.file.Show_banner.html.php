<?php /* Smarty version Smarty-3.0.5, created on 2018-03-28 11:36:40
         compiled from ".\templates\Show_banner.html" */ ?>
<?php /*%%SmartyHeaderCode:16035abb0dc87ce443-80082641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c53ca7503964694028a3d275ee601b89fbba8ee5' => 
    array (
      0 => '.\\templates\\Show_banner.html',
      1 => 1522208198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16035abb0dc87ce443-80082641',
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
            <td valign="top">轮播图片</td>
            <td valign="top">链接地址</td>
            <td valign="top">轮播图板块id</td>
            <td valign="top">操作</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
        <tr>
            <td valign="top"><img class="banner" src="<?php echo $_smarty_tpl->getVariable('uploads')->value;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['pic'];?>
" alt=""></td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['bankuai'];?>
</td>
            <td valign="top">
                <a href="Add_banner.php?table=banner&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                <a href="delete.php?table=banner&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
            </td>
        </tr>
        <?php }} ?>
    </table>
    <div class="a_link">
        <a href="Add_banner.php" class="btn btn-default btn-sm">添加</a>
    </div>

</div>
</body>
</html>