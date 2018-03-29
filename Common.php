<?php
/**
 * Common -- 公共文件
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/1/14
 * Time: 14:43
 */

define("APP_PATH",$_SERVER["DOCUMENT_ROOT"]."/");
require APP_PATH."Public/libs/Smarty.class.php";

$smarty=new Smarty();

//修改模板模板文件的存放位置
$smarty->template_dir="Home";
$smarty->assign("Home","Home/");
$smarty->assign("uploads","Uploads/");
session_start();

require APP_PATH."Public/DB/DB.class.php";
require APP_PATH."Public/DB/Sql.class.php";
