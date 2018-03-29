<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:48
 */


require "Common.php";

if ($_POST["xianlumingcheng"]==""||$_POST["xianlujianjie"]==""||$_POST["danjia"]==""||$_POST["xingchenggaiyao"]==""||$_POST["chufariqi"]==""||$_POST["tianshu"]==""||$_POST["jianduanjieshao"]==""||$_POST["lingduiid"]==""){
    header("location:Add_xianluxiangqing.php?insert=1");
}else{

    foreach($_POST as $k=>$v){
        if($k == "pdtj"){
            $pdtj=$_POST[$k];
            unset($_POST[$k]);
        }
    }
//添加数据库

    $add=new Sql("xianluxiangqing");

    if($pdtj){
        $result = $add->setData($_POST)->where("id=$pdtj")->update();
//    echo $result;
        if ($result == 1) {
            echo "<script>alert('修改成功！');</script>";
            header("location:Show_xianluxiangqing.php");
        } else {
            header("location:Add_xianluxiangqing.php?insert=1");
        }
    }else {

        $_POST['chakancishu']=0;
        $_POST['dianzancishu']=0;
        $_POST['feiyongid']=1;
        $_POST['qitaid']=1;

        $result = $add->setData($_POST)->insert();
        if ($result == 1) {
            echo "<script>alert('添加成功！');</script>";
            header("location:Show_xianluxiangqing.php");
        } else {
            header("location:Add_xianluxiangqing.php?insert=1");
        }
    }

}