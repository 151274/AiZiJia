<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:49
 */

require "Common.php";

if ($_POST["huodongfeiyong"]==""||$_POST["feiyongbaohan"]==""||$_POST["feiyongbuhan"]==""){
    header("location:Add_feiyongmingxi.php?insert=1");
}else{


    $id = $_POST["id"];
    $table = $_POST["table"];

    $huodongfeiyong=$_POST["huodongfeiyong"];
    $feiyongbaohan=$_POST["feiyongbaohan"];
    $feiyongbuhan=$_POST["feiyongbuhan"];


    $ljx = new Sql();

    $ljx->table($table)->where("id='$id'");

    $bind = array("huodongfeiyong"=>"$huodongfeiyong","feiyongbaohan"=>"$feiyongbaohan","feiyongbuhan"=>"$feiyongbuhan");


    $result = $ljx->setData($bind)->update();
    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_feiyongmingxi.php");
    } else {
        header("location:Show_feiyongmingxi.php?insert=1");
    }

}

