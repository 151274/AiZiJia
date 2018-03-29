<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:49
 */

require "Common.php";

if ($_POST["userid"]==""||$_POST["xid"]==""||$_POST["dingdanriqi"]==""||$_POST["chengrenshuliang"]==""||$_POST["ertongshuliang"]==""||$_POST["fangjianshuliang"]==""||$_POST["pinfang"]==""||$_POST["baoxianid"]==""||$_POST["zongjiage"]==""||$_POST["zhuangtaiid"]==""){
    header("location:Add_dingdan.php?insert=1");
}else{


    $id = $_POST["id"];
    $table = $_POST["table"];

    $userid=$_POST["userid"];
    $xid=$_POST["xid"];
    $dingdanriqi=$_POST["dingdanriqi"];
    $chengrenshuliang=$_POST["chengrenshuliang"];
    $ertongshuliang=$_POST["ertongshuliang"];
    $fangjianshuliang=$_POST["fangjianshuliang"];
    $pinfang=$_POST["pinfang"];
    $baoxianid=$_POST["baoxianid"];
    $zongjiage=$_POST["zongjiage"];
    $zhuangtaiid=$_POST["zhuangtaiid"];

    $ljx = new Sql();

    $ljx->table($table)->where("id='$id'");

    $bind = array("userid"=>"$userid","xid"=>"$xid","dingdanriqi"=>"$dingdanriqi","chengrenshuliang"=>"$chengrenshuliang","ertongshuliang"=>"$ertongshuliang","fangjianshuliang"=>"$fangjianshuliang","pinfang"=>"$pinfang","baoxianid"=>"$baoxianid","zongjiage"=>"$zongjiage","zhuangtaiid"=>"$zhuangtaiid");


    $result = $ljx->setData($bind)->update();
    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_dingdan.php");
    } else {
        header("location:Show_dingdan.php?insert=1");
    }

}

