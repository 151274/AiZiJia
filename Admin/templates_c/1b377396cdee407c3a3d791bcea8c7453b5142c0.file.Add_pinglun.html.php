<?php /* Smarty version Smarty-3.0.5, created on 2018-03-04 16:33:12
         compiled from ".\templates\Add_pinglun.html" */ ?>
<?php /*%%SmartyHeaderCode:19145a9baf489ea3d4-04653996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b377396cdee407c3a3d791bcea8c7453b5142c0' => 
    array (
      0 => '.\\templates\\Add_pinglun.html',
      1 => 1520151697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19145a9baf489ea3d4-04653996',
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
<div class="wrap">
    <form action="Save_pinglun.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="userid">用户id</label>
            <input type="number" name="userid" id="userid">
        </div>
        <div>
            <label for="xid">线路id</label>
            <input type="number" name="xid" id="xid">
        </div>
        <div>
            <label for="anpai">行程安排1,2,3</label>
            <input type="number" name="anpai" id="anpai">
        </div>
        <div>
            <label for="canshi">餐食安排1,2,3</label>
            <input type="numbert" name="canshi" id="canshi">
        </div>
        <div>
            <label for="jiaotong">交通安排1,2,3</label>
            <input type="number" name="jiaotong" id="jiaotong">
        </div>
        <div>
            <label for="zonghepingjia">综合评价5分</label>
            <input type="number" name="zonghepingjia" id="zonghepingjia">
        </div>
        <div>
            <label for="pinglun">评论</label>
            <textarea name="pinglun" id="pinglun" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="dingdanid">订单id</label>
            <input type="number" name="dingdanid" id="dingdanid">
        </div>
        <div>
            <label for="pinglunriqi">评论日期</label>
            <input type="date" name="pinglunriqi" id="pinglunriqi">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</div>
</body>
</html>