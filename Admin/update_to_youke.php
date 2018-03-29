<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:49
 */

require "Common.php";

if ($_POST["ykleibie"]==""||$_POST["ykname"]==""||$_POST["yksex"]==""||$_POST["ykphone"]==""||$_POST["zhengjianleixing"]==""||$_POST["zhengjianhaoma"]==""||$_POST["dingdanid"]==""){
    header("location:Add_youke.php?insert=1");
}else{


    $id = $_POST["id"];
    $table = $_POST["table"];

    $ykleibie=$_POST["ykleibie"];
    $ykname=$_POST["ykname"];
    $yksex=$_POST["yksex"];
    $ykphone=$_POST["ykphone"];
    $zhengjianleixing=$_POST["zhengjianleixing"];
    $zhengjianhaoma=$_POST["zhengjianhaoma"];
    $dingdanid=$_POST["dingdanid"];


    $ljx = new Sql();

    $ljx->table($table)->where("id='$id'");

    $bind =array("ykleibie"=>"$ykleibie","ykname"=>"$ykname","yksex"=>"$yksex","ykphone"=>"$ykphone","zhengjianleixing"=>"$zhengjianleixing","zhengjianhaoma"=>"$zhengjianhaoma","dingdanid"=>"$dingdanid");


    $result = $ljx->setData($bind)->update();
    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_youke.php");
    } else {
        header("location:Show_youke.php?insert=1");
    }

}

