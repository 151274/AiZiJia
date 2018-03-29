<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:49
 */

require "Common.php";

if ($_POST["xianzhong"]==""||$_POST["fenshu"]==""||$_POST["jiage"]==""||$_POST["xiangqing"]==""){
    header("location:Add_baoxian.php?insert=1");
}else{


    $id = $_POST["id"];
    $table = $_POST["table"];

    $xianzhong=$_POST["xianzhong"];
    $fenshu=$_POST["fenshu"];
    $jiage=$_POST["jiage"];
    $xiangqing=$_POST["xiangqing"];


    $ljx = new Sql();

    $ljx->table($table)->where("id='$id'");

    $bind = array("xianzhong"=>"$xianzhong","fenshu"=>"$fenshu","jiage"=>"$jiage","xiangqing"=>"$xiangqing");

    $result = $ljx->setData($bind)->update();
    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_baoxian.php");
    } else {
        header("location:Show_baoxian.php?insert=1");
    }

}

