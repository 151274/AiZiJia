<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:49
 */

require "Common.php";

if ($_POST["name"]==""||$_POST["url"]==""){
    header("location:Show_menuinfo.php?insert=1");
}else {


    $id = $_POST["id"];
    $name = $_POST["name"];
    $url = $_POST["url"];
    if (isset($_POST["pid"])){
        $pid = $_POST["pid"];
    }else{
        $pid=null;
    }


    $table = $_POST["table"];

    $ljx = new Sql();

    $ljx->table($table)->where("id='$id'");

    $bind = array("name" => $name, "url" => $url,"pid" =>$pid,);

    $result = $ljx->setData($bind)->update();
    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_menuinfo.php");
    } else {
//        header("location:Show_menuinfo.php?insert=1");
    }

}

