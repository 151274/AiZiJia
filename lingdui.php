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
if (isset($_GET["login"])){
    if($_GET["login"]=="no") {
        echo "<script>alert('账号或密码输入错误！！！<br>请重新输入')";
    }
}


$arr=[];
//基本信息
$select = new Sql();
$arr["basicinfo"]=$select->table("basicinfo")->first();
//目录菜单
$arr["menu"]=$select->table("menuinfo")->select();
//轮播图
$arr["banner"]=$select->table("banner")->where("bankuai=1")->select();
//列表
$arr["list"]=$select->table("xianluxiangqing")->join("xianlupic","xianluxiangqing.id=xianlupic.xid")->select();
//领队
$arr["lingdui"]=$select->table("lingdui")->where("id=".$_GET["id"])->first();
//活动数
$arr["huodong"]=$select->table("xianluxiangqing")->where("lingduiid=".$_GET["id"])->rowCount();
$smarty->assign("arr",$arr);
$smarty->display("lingdui.html");