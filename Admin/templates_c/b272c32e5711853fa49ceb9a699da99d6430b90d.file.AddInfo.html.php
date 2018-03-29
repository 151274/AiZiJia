<?php /* Smarty version Smarty-3.0.5, created on 2018-01-14 16:10:25
         compiled from ".\templates\Add_basicInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:304895a5b1071aced21-28063928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b272c32e5711853fa49ceb9a699da99d6430b90d' => 
    array (
      0 => '.\\templates\\Add_basicInfo.html',
      1 => 1515917409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304895a5b1071aced21-28063928',
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
</head>
<body>
    <form action="SaveInfo.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="">网站名称</label>
            <input type="text" name="sitename">
        </div>
        <div>
            <label for="">网站logo</label>
            <input type="file" name="sitelogo">
        </div>
        <div>
            <label for="">版权信息</label>
            <textarea name="copyinfo" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="">网站地址</label>
            <input type="text" name="siteurl">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</body>
</html>