<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:49
 */

require "Common.php";

if ($_POST["huodongshijian"]==""||$_POST["zucheshuoming"]==""||$_POST["zhuyishixiang"]==""){
    header("location:Add_qitashuoming.php?insert=1");
}else{


    $id = $_POST["id"];
    $table = $_POST["table"];

    $huodongshijian=$_POST["huodongshijian"];
    $zucheshuoming=$_POST["zucheshuoming"];
    $zhuyishixiang=$_POST["zhuyishixiang"];


    $ljx = new Sql();

    $ljx->table($table)->where("id='$id'");

    $bind =array("huodongshijian"=>"$huodongshijian","zucheshuoming"=>"$zucheshuoming","zhuyishixiang"=>"$zhuyishixiang");

    $result = $ljx->setData($bind)->update();
    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_qitashuoming.php");
    } else {
        header("location:Show_qitashuoming.php?insert=1");
    }

}

