<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/1/14
 * Time: 15:51
 */

require "Common.php";

$sitelogo=$_FILES["sitelogo"]["name"];#上传文件名
$_POST['sitelogo']=$sitelogo;
$path=APP_PATH."Uploads/".$sitelogo;#保存到的位置
if(!$_FILES["sitelogo"]["error"]){
    move_uploaded_file($_FILES["sitelogo"]["tmp_name"],$path);
}
//echo $path;
//print_r($_POST);


foreach($_POST as $k=>$v){
    if($k == "pdtj"){
        $pdtj=$_POST[$k];
        unset($_POST[$k]);
    }
}
//先判断数据库basic info表中是否有数据
$basic=new Sql("basicinfo");
if(isset($pdtj)){
    $result = $basic->setData($_POST)->where("id=$pdtj")->update();
//    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_basicinfo.php");
    } else {
        header("location:Add_basicinfo.php?insert=1");
    }
}else {
    $result = $basic->setData($_POST)->insert();
    if ($result == 1) {
        echo "<script>alert('添加成功！');</script>";
        header("location:Show_basicinfo.php");
    } else {
        header("location:Add_basicinfo.php?insert=1");
    }
}