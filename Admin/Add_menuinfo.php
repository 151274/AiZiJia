<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:47
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
    $result=$sel->fileds("menuinfo.*,menuinfo_pid.name as pid_name")->join("menuinfo_pid","menuinfo.pid=menuinfo_pid.id ")->where("menuinfo.id=".$_GET["id"])->first();
}
//print_r($result);
$smarty->assign("arr",$result);

$smarty->assign("css","Add.css");

$smarty->display("Add_menuinfo.html");
