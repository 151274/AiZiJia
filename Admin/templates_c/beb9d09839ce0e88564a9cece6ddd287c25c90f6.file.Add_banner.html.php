<?php /* Smarty version Smarty-3.0.5, created on 2018-03-28 11:54:10
         compiled from ".\templates\Add_banner.html" */ ?>
<?php /*%%SmartyHeaderCode:187505abb11e2d7f943-31461338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'beb9d09839ce0e88564a9cece6ddd287c25c90f6' => 
    array (
      0 => '.\\templates\\Add_banner.html',
      1 => 1522209241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187505abb11e2d7f943-31461338',
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
    <form action="Save_banner.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
        <?php if ($_smarty_tpl->getVariable('arr')->value){?><div><input class="form-control" type="hidden" name="pdtj" value="<?php echo $_smarty_tpl->getVariable('arr')->value['id'];?>
"></div><?php }?>
        <tr class="logo">
            <td><label for="sit_img">图片名称</label></td>
            <!--<td><input class="form-control" type="text" name="pic" id="pic" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['pic'];?>
<?php }?>"></td>-->

            <td>
                <div class="pic"></div>
                <label for="sit_img" id="input_file" <?php if ($_smarty_tpl->getVariable('arr')->value){?>style="background:transparent;"<?php }?>>
                <?php if ($_smarty_tpl->getVariable('arr')->value){?><img src="../<?php echo $_smarty_tpl->getVariable('Uploads')->value;?>
/<?php echo $_smarty_tpl->getVariable('arr')->value['pic'];?>
"><?php }?>
                <input style="display: none;" type="file" name="pic" id="sit_img" accept="image/png, image/jpeg, image/gif, image/jpg" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['sitelogo'];?>
<?php }?>">
                </label>
            </td>
        </tr>
        <tr>
            <td><label for="url">链接地址</label></td>
            <td><input class="form-control" type="text" name="url" id="url" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['url'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="bankuai">轮播图板块id</label></td>
            <td><input class="form-control" type="text" name="bankuai" id="bankuai" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['bankuai'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td></td>
            <td align="right"><input class="btn btn-default" type="submit"></td>
        </tr>
        </table>
    </form>
</div>
</body>
</html>