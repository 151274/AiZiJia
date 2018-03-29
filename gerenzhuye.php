<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/3/3
 * Time: 17:15
 */

require "Common.php";

//登录
if(isset($_SESSION["username"])){
    $username=$arr["username"]=$_SESSION["username"]["name"];
//    echo $arr["username"];
}else{
    header("location:index.php");
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
//用户
$arr["users"]=$select->table("users")->where("name='$username'")->first();
//订单
$arr["dingdan"]=$select->table("dingdan")->join("xianlupic","dingdan.xid=xianlupic.xid")->join("xianluxiangqing","dingdan.xid=xianluxiangqing.id")->join("zhuangtai","dingdan.zhuangtaiid=zhuangtai.id")->where("userid=".$_SESSION["username"]["userid"])->select();
//print_r($arr["dingdan"]);
$smarty->assign("arr",$arr);
$smarty->display("gerenzhuye.html");