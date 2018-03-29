<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/14 0014
 * Time: 9:52
 */


class DB
{
    static $pdo;
    static function pdo(){

        $dsn=sprintf("%s:host=%s;dbname=%s","mysql","mysql.coding.io","db-UXTKLDlW3H");
      	
        self::$pdo=new PDO($dsn,"user-wE5V3ZfCPD","Nj5M[(HNm@:k/!K}`j$T");
        self::$pdo->query("set names utf8");


    }

}