<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:48
 */


require "Common.php";

if ($_POST["name"]==""||$_POST["sex"]==""||$_POST["phone"]==""||$_POST["email"]==""||$_POST["dingdanid"]==""){
    header("location:Add_lianxiren.php?insert=1");
}else{

    foreach($_POST as $k=>$v){
        if($k == "pdtj"){
            $pdtj=$_POST[$k];
            unset($_POST[$k]);
        }
    }
//添加数据库


    $add=new Sql("lianxiren");

    if($pdtj){
        $result = $add->setData($_POST)->where("id=$pdtj")->update();
//    echo $result;
        if ($result == 1) {
            echo "<script>alert('修改成功！');</script>";
            header("location:Show_lianxiren.php");
        } else {
            header("location:Add_lianxiren.php?insert=1");
        }
    }else {
        $result = $add->setData($_POST)->insert();
        if ($result == 1) {
            echo "<script>alert('添加成功！');</script>";
            header("location:Add_lianxiren.php");
        } else {
            header("location:Add_lianxiren.php?insert=1");
        }
    }

}