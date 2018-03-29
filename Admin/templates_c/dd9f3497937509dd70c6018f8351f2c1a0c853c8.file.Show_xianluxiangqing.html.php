<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 08:56:08
         compiled from ".\templates\Show_xianluxiangqing.html" */ ?>
<?php /*%%SmartyHeaderCode:223705abb2856c04cf8-22396626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd9f3497937509dd70c6018f8351f2c1a0c853c8' => 
    array (
      0 => '.\\templates\\Show_xianluxiangqing.html',
      1 => 1522283896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223705abb2856c04cf8-22396626',
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
            <td valign="top">单价</td>
            <td valign="top">行程概要</td>
            <td valign="top">出发日期</td>
            <td valign="top">天数</td>
            <td valign="top">简短介绍</td>
            <td valign="top">领队id</td>
            <td valign="top">查看次数</td>
            <td valign="top">点赞次数</td>
            <td valign="top">查看图片</td>
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
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['danjia'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['xingchenggaiyao'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['chufariqi'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['tianshu'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['jianduanjieshao'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['lingduiid'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['chakancishu'];?>
</td>
            <td valign="top"><?php echo $_smarty_tpl->tpl_vars['value']->value['qitaid'];?>
</td>
            <td valign="top"><a href="Show_xianlupic.php">线路图片</a></td>
            <td valign="top">
                <a href="Add_xianluxiangqing.php?table=xianluxiangqing&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                <a href="delete.php?table=xianluxiangqing&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
            </td>
        </tr>
        <?php }} ?>
    </table>
    <div class="a_link">
        <a href="Add_xianluxiangqing.php" class="btn btn-default btn-sm">添加</a>
    </div>
</div>
</body>
</html>