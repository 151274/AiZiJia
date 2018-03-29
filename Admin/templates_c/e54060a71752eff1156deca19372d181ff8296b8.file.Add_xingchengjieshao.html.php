<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 15:27:02
         compiled from ".\templates\Add_xingchengjieshao.html" */ ?>
<?php /*%%SmartyHeaderCode:22925abc9546c4c8c2-08017387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e54060a71752eff1156deca19372d181ff8296b8' => 
    array (
      0 => '.\\templates\\Add_xingchengjieshao.html',
      1 => 1522308415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22925abc9546c4c8c2-08017387',
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
    <form action="Save_xingchengjieshao.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
        <?php if ($_smarty_tpl->getVariable('arr')->value){?><input type="hidden" name="pdtj" value="<?php echo $_smarty_tpl->getVariable('arr')->value['id'];?>
"><?php }?>
        <tr>
            <td><label for="xid">线路id</label></td>
            <td><input class="form-control" type="number" name="xid" id="xid" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['xid'];?>
<?php }?>"></td>
        </tr>

        <tr>
            <td><label for="days">第几天</label></td>
            <td><input class="form-control" type="text" name="days" id="days" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['days'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="xianlu">线路</label></td>
            <td><input class="form-control" type="text" name="xianlu" id="xianlu" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['xianlu'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="canshi">餐食</label></td>
            <td><input class="form-control" type="text" name="canshi" id="canshi" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['canshi'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="zhusu">住宿</label></td>
            <td><input class="form-control" type="text" name="zhusu" id="zhusu" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['zhusu'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="luxianxiangqing">路线详情</label></td>
            <td><textarea class="form-control" name="luxianxiangqing" id="luxianxiangqing" rows="10"><?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['luxianxiangqing'];?>
<?php }?></textarea></td>
        </tr>
        <tr>
            <td><label for="img1">图片1</label></td>
            <td><input class="form-control" type="text" name="img1" id="img1" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['img1'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="img2">图片2</label></td>
            <td><input class="form-control" type="text" name="img2" id="img2" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['img2'];?>
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