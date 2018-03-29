<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:48
 */


require "Common.php";

if ($_POST["userid"]==""||$_POST["xid"]==""||$_POST["anpai"]==""||$_POST["canshi"]==""||$_POST["jiaotong"]==""||$_POST["zonghepingjia"]==""||$_POST["pinglun"]==""||$_POST["dingdanid"]==""||$_POST["pinglunriqi"]==""){
    header("location:Add_pinglun.php?insert=1");
}else{


    foreach($_POST as $k=>$v){
        if($k == "pdtj"){
            $pdtj=$_POST[$k];
            unset($_POST[$k]);
        }
    }
//添加数据库


    $add=new Sql("pinglun");

    if($pdtj){
        $result = $add->setData($_POST)->where("id=$pdtj")->update();
//    echo $result;
        if ($result == 1) {
            echo "<script>alert('修改成功！');</script>";
            header("location:Show_pinglun.php");
        } else {
            header("location:Add_pinglun.php?insert=1");
        }
    }else {
        $result = $add->setData($_POST)->insert();
        if ($result == 1) {
            echo "<script>alert('添加成功！');</script>";
            header("location:Add_pinglun.php");
        } else {
            header("location:Add_pinglun.php?insert=1");
        }
    }

}