<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/3/9
 * Time: 9:50
 */

require_once "Common.php";
unset($_SESSION["username"]);
header("location:".$_SERVER['HTTP_REFERER']);