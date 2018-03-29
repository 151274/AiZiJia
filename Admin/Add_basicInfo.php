<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/14 0014
 * Time: 15:39
 */
if (isset($_GET["insert"])){
    if ($_GET["insert"]==1){
        echo "输入有误，请正确输入，谢谢！ ";
    }
}


require "Common.php";
$result=[];
if(isset($_GET["table"])){
    $sel=new Sql($_GET['table']);
    $result=$sel->where("id=".$_GET["id"])->first();
}
$smarty->assign("arr",$result);
$smarty->assign("Uploads","Uploads");
//$smarty->assign("header",require APP_PATH.'Public/body/header.html');
$smarty->assign("css","Add.css");

$smarty->display("Add_basicInfo.html");


?>