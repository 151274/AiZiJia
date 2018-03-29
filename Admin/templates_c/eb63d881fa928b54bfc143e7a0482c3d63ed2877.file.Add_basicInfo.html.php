<?php /* Smarty version Smarty-3.0.5, created on 2018-03-28 11:40:27
         compiled from ".\templates\Add_basicInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:176005abb0eab377b84-17869935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb63d881fa928b54bfc143e7a0482c3d63ed2877' => 
    array (
      0 => '.\\templates\\Add_basicInfo.html',
      1 => 1522208374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176005abb0eab377b84-17869935',
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
    <form action="Save_basicinfo.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
        <?php if ($_smarty_tpl->getVariable('arr')->value){?><input type="hidden" name="pdtj" value="<?php echo $_smarty_tpl->getVariable('arr')->value['id'];?>
"><?php }?>
        <tr>
            <td><label for="sitename">网站名称</label></td>
            <td><input class="form-control" type="text" name="sitename" id="sitename" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['sitename'];?>
<?php }?>"></td>
        </tr>
        <tr class="logo">
            <td><label for="sit_img">网站logo</label></td>
            <td>
                <div class="pic"></div>
                <label for="sit_img" id="input_file" <?php if ($_smarty_tpl->getVariable('arr')->value){?>style="background:transparent;"<?php }?>>
                    <?php if ($_smarty_tpl->getVariable('arr')->value){?><img src="../<?php echo $_smarty_tpl->getVariable('Uploads')->value;?>
/<?php echo $_smarty_tpl->getVariable('arr')->value['sitelogo'];?>
"><?php }?>
                    <input style="display: none;" type="file" name="sitelogo" id="sit_img" accept="image/png, image/jpeg, image/gif, image/jpg" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['sitelogo'];?>
<?php }?>">
                </label>
            </td>
        </tr>
        <tr>
            <td><label for="copyinfo">版权信息</label></td>
            <td><textarea class="form-control" name="copyinfo" id="copyinfo" cols="30" rows="10"><?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['copyinfo'];?>
<?php }?></textarea></td>
        </tr>
        <tr>
            <td><label for="siteurl">网站地址</label></td>
            <td><input class="form-control" type="text" name="siteurl" id="siteurl" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['siteurl'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td></td>
            <td align="right"><input type="submit" value="提交" class="btn btn-default"></td>
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