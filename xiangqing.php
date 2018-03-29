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

$list_id=$_GET["id"];
$lingdui_id=$_GET["lingduiid"];
$arr=[];
//基本信息
$select = new Sql();
$arr["basicinfo"]=$select->table("basicinfo")->first();
//目录菜单
$arr["menu"]=$select->table("menuinfo")->select();
//轮播图
$arr["banner"]=$select->table("banner")->where("bankuai=1")->select();
//列表
$arr["list"]=$select->table("xianluxiangqing")->join("xianlupic","xianluxiangqing.id=xianlupic.xid")->where("xianluxiangqing.id=$list_id")->first();
//城市
$chengshi=explode("—",$arr["list"]["xingchenggaiyao"]);
$arr["chengshi"]=$chengshi;
//路线详情
$arr["xingchengjieshao"]=$select->table("xingchengjieshao")->where("xid=$list_id")->select();
//费用明细
$arr["feiyongmingxi"]=$select->table("feiyongmingxi")->first();
//其他说明
$arr["qitashuoming"]=$select->table("qitashuoming")->first();
//领队
$arr["lingdui"]=$select->table("lingdui")->where("id=$lingdui_id")->first();


$smarty->assign("arr",$arr);$smarty->display("xiangqing.html");