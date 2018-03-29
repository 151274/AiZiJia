<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:49
 */

require "Common.php";

if ($_POST["xid"]==""||$_POST["days"]==""||$_POST["xianlu"]==""||$_POST["zhusu"]==""||$_POST["luxianxiangqing"]==""){
    header("location:Add_xingchengjieshao.php?insert=1");
}else{


    $id = $_POST["id"];
    $table = $_POST["table"];

    $xid=$_POST["xid"];
    $days=$_POST["days"];
    $xianlu=$_POST["xianlu"];
    $zhusu=$_POST["zhusu"];
    $luxianxiangqing=$_POST["luxianxiangqing"];


    $ljx = new Sql();

    $ljx->table($table)->where("id='$id'");

    $bind =array("xid"=>"$xid","days"=>"$days","xianlu"=>"$xianlu","zhusu"=>"$zhusu","luxianxiangqing"=>"$luxianxiangqing");


    $result = $ljx->setData($bind)->update();
    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_xingchengjieshao.php");
    } else {
        header("location:Show_xingchengjieshao.php?insert=1");
    }

}

