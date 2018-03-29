<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/30 0030
 * Time: 15:02
 */


require "Common.php";

if (isset($_GET["insert"])){
    if ($_GET["insert"]==1){
        echo "所填不能为空！ ";
    }
}




$basic_select = new Sql("basicinfo");

$basicinfo=$basic_select->select();
//print_r($basicinfo);

$smarty->assign("arr",$basicinfo);

$smarty->assign("css","Show_basicinfo.css");
$smarty->display("Show_basicinfo.html");



