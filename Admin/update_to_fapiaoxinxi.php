<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:49
 */

require "Common.php";

if ($_POST["sffp"]==""||$_POST["fapiaotaitou"]==""||$_POST["fapiaomingxi"]==""||$_POST["peisongdizhi"]==""||$_POST["dingdanid"]==""){
    header("location:Add_fapiaoxinxi.php?insert=1");
}else{


    $id = $_POST["id"];
    $table = $_POST["table"];

    $sffp=$_POST["sffp"];
    $fapiaotaitou=$_POST["fapiaotaitou"];
    $fapiaomingxi=$_POST["fapiaomingxi"];
    $peisongdizhi=$_POST["peisongdizhi"];
    $dingdanid=$_POST["dingdanid"];


    $ljx = new Sql();

    $ljx->table($table)->where("id='$id'");

    $bind = array("sffp"=>"$sffp","fapiaotaitou"=>"$fapiaotaitou","fapiaomingxi"=>"$fapiaomingxi","peisongdizhi"=>"$peisongdizhi","dingdanid"=>"$dingdanid");

    $result = $ljx->setData($bind)->update();
    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_fapiaoxinxi.php");
    } else {
        header("location:Show_fapiaoxinxi.php?insert=1");
    }

}

