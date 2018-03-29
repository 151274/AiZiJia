<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/3/18
 * Time: 15:05
 */

require "Common.php";
if($_POST["password"] == $_POST["password_shi"]){
    $arr = array("phone"=>"","yaoqingma"=>"","photo"=>"","level"=>"普通","erweima"=>"erweima.png","guanzhu"=>0,"fensi"=>0);
    foreach($_POST as $k=>$val){$arr[$k] = $val;}
    unset($arr["password_shi"]);//移除password_shi

    $insert = new Sql("users");
    $sel = $insert->where("name=".$arr['name'])->rowCount();
    if ($sel == 1){
        header("location:".$_SERVER['HTTP_REFERER']."?zhuce_false=no");
//        echo "用户已存在";
    }else{
        $result=$insert->table("users")->setData($arr)->insert();
        print_r($result);
        if ($result){
            $_SESSION["username"] = $arr["name"];
            header("location:".$_SERVER['HTTP_REFERER']);
        }else{
//            echo "注册失败";
            header("location:".$_SERVER['HTTP_REFERER']."?zhuce_false=no");
        }
    }


} else{
    header("location:".$_SERVER['HTTP_REFERER']."?zhuce_false=no");
}