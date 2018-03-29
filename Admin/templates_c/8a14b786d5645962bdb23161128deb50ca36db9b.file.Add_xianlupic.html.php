<?php /* Smarty version Smarty-3.0.5, created on 2018-03-08 14:27:00
         compiled from ".\templates\Add_xianlupic.html" */ ?>
<?php /*%%SmartyHeaderCode:40915aa0d7b4e278a3-04278368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a14b786d5645962bdb23161128deb50ca36db9b' => 
    array (
      0 => '.\\templates\\Add_xianlupic.html',
      1 => 1520490196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40915aa0d7b4e278a3-04278368',
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
<div class="wrap scroll-">
    <form action="Save_xianlupic.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="xid">线路id</label>
            <input type="text" name="xid" id="xid" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['xid'];?>
<?php }?>">
        </div>

        <div>
            <label for="pic">图片</label>
            <input type="text" name="pic" id="pic" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['pic'];?>
<?php }?>">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</div>
</body>
</html>