<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 17:08:58
         compiled from ".\templates\Add_baoxian.html" */ ?>
<?php /*%%SmartyHeaderCode:177585abcad2ac4a871-52744091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7ed96dd6d64e4d0caf9330547dcd53c252e2880' => 
    array (
      0 => '.\\templates\\Add_baoxian.html',
      1 => 1522314534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177585abcad2ac4a871-52744091',
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
    <form action="Save_baoxian.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
        <?php if ($_smarty_tpl->getVariable('arr')->value){?><input type="hidden" name="pdtj" value="<?php echo $_smarty_tpl->getVariable('arr')->value['id'];?>
"><?php }?>
        <tr>
            <td><label for="">保险种类</label></td>
            <td><input class="form-control" type="text" name="xianzhong" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['xianzhong'];?>
<?php }?>"></td>
        </tr>

        <tr>
            <td><label for="">保险份数</label></td>
            <td><input class="form-control" type="number" name="fenshu" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['fenshu'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="">保险价格</label></td>
            <td><input class="form-control" type="text" name="jiage" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['jiage'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="">保险详情</label></td>
            <td><textarea class="form-control" name="xiangqing" id=""><?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['xiangqing'];?>
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