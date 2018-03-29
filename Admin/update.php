<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 13:34
 */
require "Common.php";


$table=$_GET["table"];
$id=$_GET["id"];
//echo $table;
$ljx=new Sql();


$ljx->table("$table")->where("id=:id");
$bind=array("id"=>$id) ;

$result=$ljx->setData($bind)->select_update();

$smarty->assign("css","update.css");
$smarty->assign("table",$table);
$smarty->assign("arr",$result);

$smarty->display("update.html");



?>