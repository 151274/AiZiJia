<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:49
 */

require "Common.php";

if ($_POST["xid"]==""||$_POST["pic"]==""){
    header("location:Add_xianlupic.php?insert=1");
}else{



    $id = $_POST["id"];
    $table = $_POST["table"];

    $xid=$_POST["xid"];
    $pic=$_POST["pic"];

    $ljx = new Sql();

    $ljx->table($table)->where("id='$id'");

    $bind =array("xid"=>"$xid","pic"=>"$pic");

    $result = $ljx->setData($bind)->update();
    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_xianlupic.php");
    } else {
        header("location:Show_xianlupic.php?insert=1");
    }

}

