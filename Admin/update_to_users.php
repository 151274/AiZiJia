<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:49
 */

require "Common.php";

if ($_POST["name"]==""||$_POST["email"]==""||$_POST["phone"]==""||$_POST["password"]==""||$_POST["yaoqingma"]==""||$_POST["photo"]==""||$_POST["level"]==""||$_POST["erweima"]==""||$_POST["guanzhu"]==""||$_POST["fensi"]==""){
    header("location:Add_users.php?insert=1");
}else{


    $id = $_POST["id"];
    $table = $_POST["table"];

    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $password=$_POST["password"];
    $yaoqingma=$_POST["yaoqingma"];
    $photo=$_POST["photo"];
    $level=$_POST["level"];
    $erweima=$_POST["erweima"];
    $guanzhu=$_POST["guanzhu"];
    $fensi=$_POST["fensi"];


    $ljx = new Sql();

    $ljx->table($table)->where("id='$id'");

    $bind = array("name"=>"$name","email"=>"$email","phone"=>"$phone","password"=>"$password","yaoqingma"=>"$yaoqingma","photo"=>"$photo","level"=>"$level","erweima"=>"$erweima","guanzhu"=>"$guanzhu","fensi"=>"$fensi");

    $result = $ljx->setData($bind)->update();
    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_users.php");
    } else {
        header("location:Show_users.php?insert=1");
    }

}

