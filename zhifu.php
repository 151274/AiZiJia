<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/3/3
 * Time: 17:17
 */

require "Common.php";
$Date=date("Y-m-d h:i:s");
//订单 -- 数组
$dingdanArr=array("userid"=>$_SESSION["username"]["userid"],"xid"=>$_POST["xid"],"dingdanriqi"=>$Date,"chengrenshuliang"=>$_POST["chuyourenshu_chengren"],"ertongshuliang"=>$_POST["chuyourenshu_ertong"],"fangjianshuliang"=>$_POST["fangjian"],"pinfang"=>$_POST["shifoupinfang"],"baoxianid"=>$_POST["baoxianid"],"zongjiage"=>$_POST["zongjiage"],"zhuangtaiid"=>1);
/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/

$select = new Sql();
//添加订单
$dingdan=$select->table("dingdan")->setData($dingdanArr)->insert();
if ($dingdan==1) {
//查询订单id
    $dingdanid = $select->table("dingdan")->fileds("id")->where("dingdanriqi='$Date'")->first();
//    print_r($dingdanid);
//游客 -- 数组
    $youkeArr = [];
//遍历post，获取里面的游客信息
    foreach ($_POST as $k => $val) {
        $k = explode("-", $k);
        if (isset($k[1])) {
            $num = $k[1];$type = $k[0];
            $youkeArr[$num][$type] = $val;
            $youkeArr[$num]["dingdanid"] = $dingdanid["id"];
            unset($youkeArr[$num]["name_type"]);
        }
    }

//添加游客
    foreach ($youkeArr as $val) {
        $youke = $select->table("youke")->setData($val)->insert();
    }

//联系人
    $lianxirenArr=array("name"=>$_POST["name"],"sex"=>$_POST["sex"],"phone"=>$_POST["phone"],"email"=>$_POST["email"],"dingdanid"=>$dingdanid["id"]);
    $lianxiren = $select->table("lianxiren")->setData($lianxirenArr)->insert();

//发票
    $fpxxArr=array("sffp"=>$_POST["sffp"],"fapiaotaitou"=>$_POST["fapiaotaitou"],"fapiaomingxi"=>$_POST["fapiaomingxi"],"peisongdizhi"=>$_POST["peisongdizhi"],"dingdanid"=>$dingdanid["id"]);
    $fpxx = $select->table("fapiaoxinxi")->setData($fpxxArr)->insert();
}

if($dingdan==1&&$youke==1&&$lianxiren==1&&$fpxx==1){//添加成功
    //登录
    if(isset($_SESSION["username"])){
        $arr["username"]=$_SESSION["username"];
//    echo $arr["username"];
    }
    $arr=[];
//基本信息
    $arr["basicinfo"]=$select->table("basicinfo")->first();
//目录菜单
    $arr["menu"]=$select->table("menuinfo")->select();
    $arr["zongjiage"]=$_POST["zongjiage"];
    $arr["datetime"]=$Date;
    $smarty->assign("arr",$arr);
    $smarty->display("zhifu.html");

}
else{//添加失败
    echo "<script>history.go(-2)</script>";
}



