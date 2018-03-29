<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 08:56:56
         compiled from ".\templates\Add_xianluxiangqing.html" */ ?>
<?php /*%%SmartyHeaderCode:9895abb205357f441-59201140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a35398b1c2b69a1606f1aa60e35935d47aaf538' => 
    array (
      0 => '.\\templates\\Add_xianluxiangqing.html',
      1 => 1522283896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9895abb205357f441-59201140',
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
    <form action="Save_xianluxiangqing.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
        <?php if ($_smarty_tpl->getVariable('arr')->value){?><input type="hidden" name="pdtj" value="<?php echo $_smarty_tpl->getVariable('arr')->value['id'];?>
"><?php }?>
        <tr>
            <td><label for="xianlumingcheng">线路名称</label></td>
            <td><input class="form-control" type="text" name="xianlumingcheng" id="xianlumingcheng" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['xianlumingcheng'];?>
<?php }?>"></td>
        </tr>

        <tr>
            <td><label for="xianlujianjie">线路简介</label></td>
            <td><textarea class="form-control" name="xianlujianjie" id="xianlujianjie" cols="26" rows="10"><?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['xianlujianjie'];?>
<?php }?></textarea></td>
        </tr>
        <tr>
            <td><label for="danjia">单价</label></td>
            <td><input class="form-control" type="text" name="danjia" id="danjia" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['danjia'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="xingchenggaiyao">行程概要</label></td>
            <td><input class="form-control" type="text" name="xingchenggaiyao" id="xingchenggaiyao" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['xingchenggaiyao'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="chufariqi">出发日期</label></td>
            <td><input class="form-control" type="date" name="chufariqi" id="chufariqi" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['chufariqi'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="tianshu">天数</label></td>
            <td><input class="form-control" type="number" name="tianshu" id="tianshu" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['tianshu'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="jianduanjieshao">简短介绍</label></td>
            <td><input class="form-control" type="text" name="jianduanjieshao" id="jianduanjieshao" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['jianduanjieshao'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="lingduiid">领队id</label></td>
            <!--<td><input class="form-control" type="number" name="lingduiid" id="lingduiid" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['lingduiid'];?>
<?php }?>"></td>-->
            <td>
                <select class="form-control" name="lingduiid" id="lingduiid">
                    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lingdui')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" <?php if ($_smarty_tpl->getVariable('arr')->value){?><?php if ($_smarty_tpl->getVariable('arr')->value['lingduiid']==$_smarty_tpl->tpl_vars['val']->value['id']){?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</option>
                    <?php }} ?>
                </select>
            </td>
        </tr>
        <!--<tr>-->
            <!--<td><label for="chakancishu">查看次数</label></td>-->
            <!--<td><input class="form-control" type="number" name="chakancishu" id="chakancishu" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['chakancishu'];?>
<?php }?>"></td>-->
        <!--</tr>-->
        <!--<tr>-->
            <!--<td><label for="dianzancishu">点赞次数</label></td>-->
            <!--<td><input class="form-control" type="number" name="dianzancishu" id="dianzancishu" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['dianzancishu'];?>
<?php }?>"></td>-->
        <!--</tr>-->
        <!--<tr>-->
            <!--<td><label for="feiyongid">费用明细id</label></td>-->
            <!--<td><input class="form-control" type="number" name="feiyongid" id="feiyongid" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['feiyongid'];?>
<?php }?>"></td>-->
        <!--</tr>-->
        <!--<tr>-->
            <!--<td><label for="qitaid">其他说明id</label></td>-->
            <!--<td><input class="form-control" type="number" name="qitaid" id="qitaid" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['qitaid'];?>
<?php }?>"></td>-->
        <!--</tr>-->
        <tr>
            <td></td>
            <td align="right"><input class="btn btn-default" type="submit"></td>
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