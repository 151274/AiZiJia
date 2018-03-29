<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 16:24:45
         compiled from ".\templates\Show_feiyongmingxi.html" */ ?>
<?php /*%%SmartyHeaderCode:199155abca2cd43f994-87990931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6fdba72e5e5349cbd3b5b3463fcdb0e4a822a51' => 
    array (
      0 => '.\\templates\\Show_feiyongmingxi.html',
      1 => 1522311881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199155abca2cd43f994-87990931',
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
            <td valign="top">费用明细</td>
            <td valign="top">操作</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
        <tr>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['feiyongmingxi'];?>
</td>
            <td valign="top">
                <a href="Add_feiyongmingxi.php?table=feiyongmingxi&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                <a href="delete.php?table=feiyongmingxi&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
            </td>
        </tr>
        <?php }} ?>
    </table>
</div>

</div>
</body>
</html>