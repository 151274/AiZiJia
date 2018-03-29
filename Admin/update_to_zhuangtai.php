<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:49
 */

require "Common.php";

if ($_POST["zhuangtai"]==""){
    header("location:Add_zhuangtai.php?insert=1");
}else{


    $id = $_POST["id"];
    $table = $_POST["table"];

    $zhuangtai=$_POST["zhuangtai"];


    $ljx = new Sql();

    $ljx->table($table)->where("id='$id'");

    $bind = array("zhuangtai"=>"$zhuangtai");

    $result = $ljx->setData($bind)->update();
    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_zhuangtai.php");
    } else {
        header("location:Show_zhuangtai.php?insert=1");
    }

}

