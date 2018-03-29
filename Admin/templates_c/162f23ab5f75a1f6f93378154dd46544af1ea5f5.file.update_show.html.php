<?php /* Smarty version Smarty-3.0.5, created on 2018-02-02 17:06:02
         compiled from ".\templates\update.html" */ ?>
<?php /*%%SmartyHeaderCode:26475a7429fab99e78-20594730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '162f23ab5f75a1f6f93378154dd46544af1ea5f5' => 
    array (
      0 => '.\\templates\\update.html',
      1 => 1517562356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26475a7429fab99e78-20594730',
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
<form action="update_to_<?php echo $_smarty_tpl->getVariable('table')->value;?>
.php" method="post">

    <input type="hidden" name="table" value="<?php echo $_smarty_tpl->getVariable('table')->value;?>
">
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>

    <div>
        <label for=""><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</label>
        <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">
    </div>

    <?php }} ?>
    <input id="submit" type="submit">

</form>


</body>
</html>