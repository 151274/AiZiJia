<?php /* Smarty version Smarty-3.0.5, created on 2018-03-29 17:25:13
         compiled from ".\templates\Add_dingdan.html" */ ?>
<?php /*%%SmartyHeaderCode:27065abcb0f9ed3a12-35814987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8630a7ac9432a93e85a49679ddab681667e82954' => 
    array (
      0 => '.\\templates\\Add_dingdan.html',
      1 => 1522315506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27065abcb0f9ed3a12-35814987',
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
    <form action="Save_dingdan.php" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
        <?php if ($_smarty_tpl->getVariable('arr')->value){?><input type="hidden" name="pdtj" value="<?php echo $_smarty_tpl->getVariable('arr')->value['id'];?>
"><?php }?>
        <tr>
            <td><label for="userid">用户编号</label></td>
            <td><input class="form-control"s type="number" name="userid" id="userid" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['userid'];?>
<?php }?>"></td>
        </tr>

        <tr>
            <td><label for="xid">线路id</label></td>
            <td><input class="form-control" type="number" name="xid" id="xid" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['xid'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="dingdanriqi">订单日期</label></td>
            <td><input class="form-control" type="datetime-local" name="dingdanriqi" id="dingdanriqi" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['dingdanriqi'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="chengrenshuliang">成人数量</label></td>
            <td><input class="form-control" type="number" name="chengrenshuliang" id="chengrenshuliang" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['chengrenshuliang'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="ertongshuliang">儿童数量</label></td>
            <td><input class="form-control" type="number" name="ertongshuliang" id="ertongshuliang" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['ertongshuliang'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="fangjianshuliang">房间数量</label></td>
            <td><input class="form-control" type="number" name="fangjianshuliang" id="fangjianshuliang" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['fangjianshuliang'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="pinfang">是否拼房0,1</label></td>
            <td><input class="form-control" type="number" name="pinfang" id="pinfang" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['pinfang'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="baoxianid">保险id</label></td>
            <td><input class="form-control" type="number" name="baoxianid" id="baoxianid" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['baoxianid'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="zongjia">订单总价格</label></td>
            <td><input class="form-control" type="text" name="zongjiage" id="zongjia" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['zongjiage'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td><label for="zhuangtaiid">状态id</label></td>
            <td><input class="form-control" type="number" name="zhuangtaiid" id="zhuangtaiid" value="<?php if ($_smarty_tpl->getVariable('arr')->value){?><?php echo $_smarty_tpl->getVariable('arr')->value['zhuangtaiid'];?>
<?php }?>"></td>
        </tr>
        <tr>
            <td></td>
            <td align="right"><input type="submit"></td>
        </tr>
        </table>
    </form>
</div>
</body>
</html>