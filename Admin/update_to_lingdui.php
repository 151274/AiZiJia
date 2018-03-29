<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:49
 */

require "Common.php";

if ($_POST["name"]==""||$_POST["pic"]==""||$_POST["content"]==""){
    header("location:Add_lingdui.php?insert=1");
}else{


    $id = $_POST["id"];
    $table = $_POST["table"];

    $name=$_POST["name"];
    $pic=$_POST["pic"];
    $content=$_POST["content"];


    $ljx = new Sql();

    $ljx->table($table)->where("id='$id'");

    $bind =array("name"=>"$name","pic"=>"$pic","content"=>"$content");

    $result = $ljx->setData($bind)->update();
    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_lingdui.php");
    } else {
        header("location:Show_lingdui.php?insert=1");
    }

}

