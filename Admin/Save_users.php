<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:48
 */


require "Common.php";

if ($_POST["name"]==""||$_POST["email"]==""||$_POST["phone"]==""||$_POST["password"]==""||$_POST["yaoqingma"]==""||$_POST["photo"]==""||$_POST["level"]==""||$_POST["erweima"]==""||$_POST["guanzhu"]==""||$_POST["fensi"]==""){
    header("location:Add_users.php?insert=1");
}else{

    foreach($_POST as $k=>$v){
        if($k == "pdtj"){
            $pdtj=$_POST[$k];
            unset($_POST[$k]);
        }
    }
//添加数据库


    $add=new Sql("users");

    if($pdtj){
        $result = $add->setData($_POST)->where("id=$pdtj")->update();
//    echo $result;
        if ($result == 1) {
            echo "<script>alert('修改成功！');</script>";
            header("location:Show_users.php");
        } else {
            header("location:Add_users.php?insert=1");
        }
    }else {
        $result = $add->setData($_POST)->insert();
        if ($result == 1) {
            echo "<script>alert('添加成功！');</script>";
            header("location:Add_users.php");
        } else {
            header("location:Add_users.php?insert=1");
        }
    }


}