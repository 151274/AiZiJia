<?php /* Smarty version Smarty-3.0.5, created on 2018-03-28 11:55:04
         compiled from ".\templates\Add_lingdui.html" */ ?>
<?php /*%%SmartyHeaderCode:307575abb1218c68647-01356280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0e66f664980c158c6bd651cb9e43e8391f6ad1a' => 
    array (
      0 => '.\\templates\\Add_lingdui.html',
      1 => 1522209011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307575abb1218c68647-01356280',
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
    <form action="Save_lingdui.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
        <?php if ($_smarty_tpl->getVariable('arr')->value){?><input class="form-control" type="hidden" name="pdtj" value="<?php echo $_smarty_tpl->getVariable('arr')->value['id'];?>
"><?php }?>
        <tr>
            <td><label for="name">领队名称</label></td>
            <td><input class="form-control" type="text" name="name" id="name" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['name'];?>
<?php }?>"></td>
        </tr>

        <tr class="logo">
           <td><label for="sit_img">领队图标</label></td>
            <td>
                <div class="pic"></div>
                <label class="form-control" for="sit_img" id="input_file" <?php if ($_smarty_tpl->getVariable('arr')->value){?>style="background:transparent;"<?php }?>>
                    <?php if ($_smarty_tpl->getVariable('arr')->value){?><img src="<?php echo $_smarty_tpl->getVariable('uploads')->value;?>
<?php echo $_smarty_tpl->getVariable('arr')->value['pic'];?>
"><?php }?>
                    <input style="display: none;" type="file" name="pic" id="sit_img" accept="image/png, image/jpeg, image/gif, image/jpg" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['pic'];?>
<?php }?>">
                </label>
            </td>
        </tr>
        <tr>
            <td><label for="content">领队介绍</label></td>
            <td><textarea class="form-control" name="content" id="content" cols="26" rows="10"><?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['content'];?>
<?php }?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td align="right"><input type="submit" class="btn btn-default"></td>
        </tr>
        </table>
    </form>
</div>
</body>
</html>
<script type="text/javascript" src="js/input_file.js"></script>
<script src="js/kindeditor/kindeditor.js"></script>
<script src="js/kindeditor/lang/zh_CN.js"></script>
<script>
    var editor;
    KindEditor.ready(function (K) {
        editor = K.create('textarea', {
            allowFileManager: false, resizeType: 0, //resizeType 2或1或0，2时可以拖动改变宽度和高度，1时只能改变高度，0时不能拖动。默认值: 2
            items: [
                'source', 'undo', 'redo', '|', 'preview', 'print', 'template', 'code', 'cut', 'copy', 'paste',
                'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
                'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
                'superscript', 'clearhtml', 'quickformat', 'selectall', '/',
                'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
                'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', 'media', 'insertfile', 'table', 'hr', 'emoticons']
        });
    });
</script>