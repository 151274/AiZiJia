<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/1 0001
 * Time: 13:32
 */

require "Common.php";

$table=$_GET["table"];
$id=$_GET["id"];

$del=new Sql($table);
$result=$del->where("id=$id")->delete();
if ($result){
    echo "<script> history.back();</script>";
}else{
    echo "<script>alert('删除未成功！'); history.back();</script>";
}







