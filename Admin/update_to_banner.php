<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:49
 */

require "Common.php";

if ($_POST["pic"]==""||$_POST["url"]==""||$_POST["bankuai"]==""){
    header("location:Show_banner.php?insert=1");
}else {


    $id = $_POST["id"];
    $table = $_POST["table"];

    $pic=$_POST["pic"];
    $url=$_POST["url"];
    $bankuai=$_POST["bankuai"];


    $ljx = new Sql();

    $ljx->table($table)->where("id='$id'");

    $bind = array("pic"=>"$pic","url"=>"$url","bankuai"=>"$bankuai");

    $result = $ljx->setData($bind)->update();
    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_banner.php");
    } else {
        header("location:Show_banner.php?insert=1");
    }

}

