<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:49
 */

require "Common.php";

if ($_POST["name"]==""||$_POST["sex"]==""||$_POST["phone"]==""||$_POST["email"]==""||$_POST["dingdanid"]==""){
    header("location:Add_lianxiren.php?insert=1");
}else{


    $id = $_POST["id"];
    $table = $_POST["table"];

    $name=$_POST["name"];
    $sex=$_POST["sex"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $dingdanid=$_POST["dingdanid"];


    $ljx = new Sql();

    $ljx->table($table)->where("id='$id'");

    $bind = array("name"=>"$name","sex"=>"$sex","phone"=>"$phone","email"=>"$email","dingdanid"=>"$dingdanid");

    $result = $ljx->setData($bind)->update();
    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_lianxiren.php");
    } else {
        header("location:Show_lianxiren.php?insert=1");
    }

}

