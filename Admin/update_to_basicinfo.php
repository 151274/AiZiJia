<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 15:19
 */
require "Common.php";

if ($_POST["sitename"]==""||$_POST["sitelogo"]==""||$_POST["copyinfo"]==""||$_POST["siteurl"]==""){
    header("location:Show_basicinfo.php?insert=1");
}else {


    $id = $_POST["id"];
    $sitename = $_POST["sitename"];
    $sitelogo = $_POST["sitelogo"];
    $copyinfo = $_POST["copyinfo"];
    $siteurl = $_POST["siteurl"];
    $table = $_POST["table"];

    $ljx = new Sql();

    $ljx->table($table)->where("id='$id'");

    $bind = array("sitename" => $sitename, "sitelogo" => $sitelogo, "copyinfo" => $copyinfo, "siteurl" => $siteurl);

    $result = $ljx->setData($bind)->update();
    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_basicinfo.php");
    } else {
        header("location:Show_basicinfo.php?insert=1");
    }

}



?>