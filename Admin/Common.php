<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/14 0014
 * Time: 14:45
 */

define("APP_PATH",$_SERVER["DOCUMENT_ROOT"]."/");

require APP_PATH."Public/libs/Smarty.class.php";

$smarty=new Smarty();
$smarty->assign("uploads","../Uploads/");
session_start();

require APP_PATH."Public/DB/DB.class.php";
require APP_PATH."Public/DB/Sql.class.php";



?>