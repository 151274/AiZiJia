<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 08:43:40
         compiled from "Home\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:3175aa1dc51be4ee8-92569752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce52bebcdf7f315d163e9b0fb7fb7309b142dfb6' => 
    array (
      0 => 'Home\\footer.html',
      1 => 1522283896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3175aa1dc51be4ee8-92569752',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<footer>
    <div class="footer_top">
        <div class="content">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
?>
                <?php if ($_smarty_tpl->tpl_vars['val']->value['pid']==2){?>
                <li><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</li>
                <?php }?>
                <?php }} ?>
            </ul>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="content">
            <p><?php echo $_smarty_tpl->getVariable('arr')->value['basicinfo']['copyinfo'];?>
</p>
        </div>
    </div>
</footer>