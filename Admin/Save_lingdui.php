<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:48
 */


require "Common.php";

print_r($_FILES);
echo "<br>";
print_r($_POST);
if ($_POST["name"]==""||$_POST["content"]==""){
    header("location:Add_lingdui.php?insert=1");
}else{

//    foreach($_POST as $k=>$v){
//        if($k == "pdtj"){
//            $pdtj=$_POST[$k];
//            unset($_POST[$k]);
//        }
//    }

    $pic=$_FILES["pic"]["name"];#上传文件名

    $path=APP_PATH."Uploads/".$pic;#保存到的位置
    if(!$_FILES["pic"]["error"]){
        move_uploaded_file($_FILES["pic"]["tmp_name"],$path);
    }
//添加数据库

$arr = array("name"=>$_POST["name"],"pic"=>$pic,"content"=>$_POST["content"]);

    $add=new Sql("lingdui");

    if($_POST['pdtj']){
        $result = $add->setData($arr)->where("id=".$_POST['pdtj'])->update();
//    echo $result;
        if ($result == 1) {
            echo "<script>alert('修改成功！');</script>";
            header("location:Show_lingdui.php");
        } else {
            header("location:Add_lingdui.php?insert=1");
        }
    }else {
        $result = $add->setData($arr)->insert();
        if ($result == 1) {
            echo "<script>alert('添加成功！');</script>";
            header("location:Add_lingdui.php");
        } else {
            header("location:Add_lingdui.php?insert=1");
        }
    }
}