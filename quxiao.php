<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/3/22
 * Time: 8:30
 */

require "Common.php";
$dingdanid=$_GET["dingdanid"];

$del = new Sql();
$result = $del->table("dingdan")->where("id = $dingdanid")->delete();
if ($result == 1) {
    header("location:gerenzhuye.php");
}else{
    echo "<script>history.go(-1)</script>";
}
