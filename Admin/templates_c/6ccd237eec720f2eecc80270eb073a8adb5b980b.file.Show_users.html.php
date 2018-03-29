<?php /* Smarty version Smarty-3.0.5, created on 2018-03-28 09:35:04
         compiled from ".\templates\Show_users.html" */ ?>
<?php /*%%SmartyHeaderCode:277105abaf148356ee6-02392851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ccd237eec720f2eecc80270eb073a8adb5b980b' => 
    array (
      0 => '.\\templates\\Show_users.html',
      1 => 1522199976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277105abaf148356ee6-02392851',
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
            <td valign="top">用户名</td>
            <td valign="top">邮箱</td>
            <td valign="top">手机号</td>
            <td valign="top">密码</td>
            <td valign="top">邀请码</td>
            <td valign="top">头像</td>
            <td valign="top">等级</td>
            <td valign="top">二维码</td>
            <td valign="top">关注数量</td>
            <td valign="top">粉丝数量</td>
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
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['email'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['phone'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['password'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['yaoqingma'];?>
</td>
            <td valign="top" align="center"><img src="<?php echo $_smarty_tpl->getVariable('uploads')->value;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['photo'];?>
" alt="" style="width: 50px;align-items: center;"></td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['level'];?>
</td>
            <td valign="top" align="center"><img src="<?php echo $_smarty_tpl->getVariable('uploads')->value;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['erweima'];?>
" alt="" style="width: 50px;align-items: center;"></td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['guanzhu'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['fensi'];?>
</td>
            <td valign="top">
                <a href="Add_users.php?table=users&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                <a href="delete.php?table=users&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
            </td>
        </tr>
        <?php }} ?>
    </table>

</div>
</body>
</html>