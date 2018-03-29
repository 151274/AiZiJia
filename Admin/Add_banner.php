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
    $result=$sel->where("id=".$_GET["id"])->first();
}

$smarty->assign('Uploads','Uploads');
$smarty->assign("arr",$result);
$smarty->assign("css","Add.css");

$smarty->display("Add_banner.html");
