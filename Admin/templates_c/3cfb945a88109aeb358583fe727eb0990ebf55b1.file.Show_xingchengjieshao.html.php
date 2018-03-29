<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 15:21:41
         compiled from ".\templates\Show_xingchengjieshao.html" */ ?>
<?php /*%%SmartyHeaderCode:271205abaf23f9d11e4-97855506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cfb945a88109aeb358583fe727eb0990ebf55b1' => 
    array (
      0 => '.\\templates\\Show_xingchengjieshao.html',
      1 => 1522283896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271205abaf23f9d11e4-97855506',
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
            <td valign="top">线路id</td>
            <td valign="top">第几天</td>
            <td valign="top">线路</td>
            <td valign="top">住宿</td>
            <td valign="top">路线详情</td>
            <td valign="top">第一张图</td>
            <td valign="top">第二张图</td>
            <td valign="top">操作</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
        <tr>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['xid'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['days'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['xianlu'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['zhusu'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['luxianxiangqing'];?>
</td>
            <td valign="top"><img style="width: 100px;" src="<?php echo $_smarty_tpl->getVariable('uploads')->value;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['img1'];?>
" alt=""></td>
            <td valign="top"><img style="width: 100px;" src="<?php echo $_smarty_tpl->getVariable('uploads')->value;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['img2'];?>
" alt=""></td>
            <td valign="top">
                <a href="Add_xingchengjieshao.php?table=xingchengjieshao&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                <a href="delete.php?table=xingchengjieshao&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
            </td>
        </tr>
        <?php }} ?>
    </table>
    <div class="a_link">
        <a href="Add_xingchengjieshao.php" class="btn btn-default btn-sm">添加</a>
    </div>

</div>
</body>
</html>