<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/3/3
 * Time: 17:16
 */

require "Common.php";

//登录
if(isset($_SESSION["username"])){
    $arr["username"]=$_SESSION["username"];
//    echo $arr["username"];
}
$id=$_POST["xid"];
//print_r($_POST);
$arr=[];
$arr["post"]=$_POST;
//基本信息
$select = new Sql();
$arr["basicinfo"]=$select->table("basicinfo")->first();
//目录菜单
$arr["menu"]=$select->table("menuinfo")->select();
//列表
$arr["list"]=$select->fileds("xianluxiangqing.xianlumingcheng,xianluxiangqing.danjia,lingdui.name as lingduiname")->table("xianluxiangqing")->join("lingdui","xianluxiangqing.lingduiid=lingdui.id")->where("xianluxiangqing.id=$id")->first();
//print_r($arr["list"]);
$smarty->assign("arr",$arr);
$smarty->display("tianxiedingdan.html");