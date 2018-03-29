<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:49
 */

require "Common.php";

if ($_POST["userid"]==""||$_POST["xid"]==""||$_POST["anpai"]==""||$_POST["canshi"]==""||$_POST["jiaotong"]==""||$_POST["zonghepingjia"]==""||$_POST["pinglun"]==""||$_POST["dingdanid"]==""||$_POST["pinglunriqi"]==""){
    header("location:Add_pinglun.php?insert=1");
}else{


    $id = $_POST["id"];
    $table = $_POST["table"];

    $userid=$_POST["userid"];
    $xid=$_POST["xid"];
    $anpai=$_POST["anpai"];
    $canshi=$_POST["canshi"];
    $jiaotong=$_POST["jiaotong"];
    $zonghepingjia=$_POST["zonghepingjia"];
    $pinglun=$_POST["pinglun"];
    $dingdanid=$_POST["dingdanid"];
    $pinglunriqi=$_POST["pinglunriqi"];

    $ljx = new Sql();

    $ljx->table($table)->where("id='$id'");

    $bind = array("userid"=>"$userid","xid"=>"$xid","anpai"=>"$anpai","canshi"=>"$canshi","jiaotong"=>"$jiaotong","zonghepingjia"=>"$zonghepingjia","pinglun"=>"$pinglun","dingdanid"=>"$dingdanid","pinglunriqi"=>"$pinglunriqi");


    $result = $ljx->setData($bind)->update();
    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_pinglun.php");
    } else {
        header("location:Show_pinglun.php?insert=1");
    }

}

