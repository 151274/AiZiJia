<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 08:43:40
         compiled from "Home\banner.html" */ ?>
<?php /*%%SmartyHeaderCode:146375aa1dc8b496a69-77159758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04bee50338d3f4f3aa4779b26c1b224ef8a2d306' => 
    array (
      0 => 'Home\\banner.html',
      1 => 1522283896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146375aa1dc8b496a69-77159758',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="banner">
    <div class="pic">
        <ul style="width:7680px;">
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value['banner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
            <li><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['value']->value['pic'];?>
" alt=""></li>
            <?php }} ?>
        </ul>
    </div>
    <div class="banner_btn">
        <ul>
        </ul>
    </div>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
js/carousel.js"></script>
    <script type="text/javascript">
        var li_num=document.getElementsByClassName('banner')[0].getElementsByClassName('pic')[0].getElementsByTagName('ul')[0].children.length;
        console.log(li_num);
        $(".banner .pic ul").css("width",1347*(li_num+1)+"px");
        $(".banner .banner_btn").css("width",50*li_num+"px");
        $(".banner .banner_btn").css("margin-left",-25*li_num+"px");
    </script>
</div>