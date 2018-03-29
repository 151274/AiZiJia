<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 17:27:23
         compiled from ".\templates\Add_zhuangtai.html" */ ?>
<?php /*%%SmartyHeaderCode:228095abcb17b670914-50125858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c20ddf8c2cd3c9fdf82e9b30a7a035dbc4022832' => 
    array (
      0 => '.\\templates\\Add_zhuangtai.html',
      1 => 1522315640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228095abcb17b670914-50125858',
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
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="wrap scroll-1">
    <form action="Save_zhuangtai.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
        <?php if ($_smarty_tpl->getVariable('arr')->value){?><input type="hidden" name="pdtj" value="<?php echo $_smarty_tpl->getVariable('arr')->value['id'];?>
"><?php }?>

        <tr>
            <td><label for="zhuangtai">订单状态</label></td>
            <td><input class="form-control" type="text" name="zhuangtai" id="zhuangtai" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['zhuangtai'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class="btn btn-default"></td>
        </tr>
        </table>
    </form>
</div>
</body>
</html>