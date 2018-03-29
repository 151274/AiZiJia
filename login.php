<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/3/8
 * Time: 15:36
 */

//$_POST;

require_once "Common.php";
$username=$_POST["username"];
$password=$_POST["password"];
$login_select=new Sql("users");
$result=$login_select->fileds("id as userid,name,photo")->where("name='$username' and password='$password'")->first();
//print_r($result);
if($result){
    $_SESSION["username"]=$result;
    header("location:".$_SERVER['HTTP_REFERER']);
}else{
    header("location:".$_SERVER['HTTP_REFERER']."?login=no");
}