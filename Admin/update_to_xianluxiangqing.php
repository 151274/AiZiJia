<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2 0002
 * Time: 17:49
 */

require "Common.php";

if ($_POST["xianlumingcheng"]==""||$_POST["xianlujianjie"]==""||$_POST["danjia"]==""||$_POST["xingchenggaiyao"]==""||$_POST["chufariqi"]==""||$_POST["tianshu"]==""||$_POST["jianduanjieshao"]==""||$_POST["lingduiid"]==""||$_POST["chakancishu"]==""||$_POST["dianzancishu"]==""||$_POST["feiyongid"]==""||$_POST["qitaid"]==""){
    header("location:Add_xianluxiangqing.php?insert=1");
}else{


    $id = $_POST["id"];
    $table = $_POST["table"];

    $xianlumingcheng=$_POST["xianlumingcheng"];
    $xianlujianjie=$_POST["xianlujianjie"];
    $danjia=$_POST["danjia"];
    $xingchenggaiyao=$_POST["xingchenggaiyao"];
    $chufariqi=$_POST["chufariqi"];
    $tianshu=$_POST["tianshu"];
    $jianduanjieshao=$_POST["jianduanjieshao"];
    $lingduiid=$_POST["lingduiid"];
    $chakancishu=$_POST["chakancishu"];
    $dianzancishu=$_POST["dianzancishu"];
    $feiyongid=$_POST["feiyongid"];
    $qitaid=$_POST["qitaid"];



    $ljx = new Sql();

    $ljx->table($table)->where("id='$id'");

    $bind =array("xianlumingcheng"=>"$xianlumingcheng","xianlujianjie"=>"$xianlujianjie","danjia"=>"$danjia","xingchenggaiyao"=>"$xingchenggaiyao","chufariqi"=>"$chufariqi","tianshu"=>"$tianshu","jianduanjieshao"=>"$jianduanjieshao","lingduiid"=>"$lingduiid","chakancishu"=>"$chakancishu","dianzancishu"=>"$dianzancishu","feiyongid"=>"$feiyongid","qitaid"=>"$qitaid");


    $result = $ljx->setData($bind)->update();
    echo $result;
    if ($result == 1) {
        echo "<script>alert('修改成功！');</script>";
        header("location:Show_xianluxiangqing.php");
    } else {
        header("location:Show_xianluxiangqing名.php?insert=1");
    }

}

