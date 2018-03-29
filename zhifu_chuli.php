<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/3/20
 * Time: 9:46
 */

require "Common.php";

$update = new Sql();
if (isset($_POST["date"])){
    $date=$_POST["date"];
}
else if (isset($_GET["date"])){
    $date=$_GET["date"];
}
$result=$update->table("dingdan")->setData("zhuangtaiid=2")->where("dingdanriqi='$date'")->update();
echo $result;
if (isset($_POST["date"])) {
    if ($result == 1) {
        header("location:gerenzhuye.php");
    } else {
        echo "<script>history.go(-3)</script>";
    }
}
else if (isset($_GET["date"])) {
    if ($result == 1) {
        header("location:gerenzhuye.php");
    } else {
        echo "<script>history.go(-1)</script>";
    }
}