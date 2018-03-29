<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:48
 */


require "Common.php";

if ($_POST["xianzhong"]==""||$_POST["fenshu"]==""||$_POST["jiage"]==""||$_POST["xiangqing"]==""){
    header("location:Add_baoxian.php?insert=1");
}else{


    foreach($_POST as $k=>$v){
        if($k == "pdtj"){
            $pdtj=$_POST[$k];
            unset($_POST[$k]);
        }
    }
//添加数据库


    $add=new Sql("baoxian");

    if($pdtj){
        $result = $add->setData($_POST)->where("id=$pdtj")->update();
//    echo $result;
        if ($result == 1) {
            echo "<script>alert('修改成功！');</script>";
            header("location:Show_baoxian.php");
        } else {
            header("location:Add_baoxian.php?insert=1");
        }
    }else {
        $result = $add->setData($_POST)->insert();
        if ($result == 1) {
            echo "<script>alert('添加成功！');</script>";
            header("location:Add_baoxian.php");
        } else {
            header("location:Add_baoxian.php?insert=1");
        }
    }

}