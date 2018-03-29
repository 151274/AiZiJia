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

        $dsn=sprintf("%s:host=%s;dbname=%s","mysql","mysql.coding.io","db-XiukLMOfJ1");
      	
        self::$pdo=new PDO($dsn,"user-aEbrkKorXw","1IlStv5Efkhg2KDa");
        self::$pdo->query("set names utf8");


    }

}