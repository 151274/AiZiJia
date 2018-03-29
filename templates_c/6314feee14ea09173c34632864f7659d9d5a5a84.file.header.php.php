<?php /* Smarty version Smarty-3.0.5, created on 2018-03-08 14:58:39
         compiled from "header.php" */ ?>
<?php /*%%SmartyHeaderCode:156745aa0df1f4f41d8-83377065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6314feee14ea09173c34632864f7659d9d5a5a84' => 
    array (
      0 => 'header.php',
      1 => 1520492037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156745aa0df1f4f41d8-83377065',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<<?php ?>?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/3/8
 * Time: 14:49
 */

require "Common.php";

//基本信息
$basic_select = new Sql("basicinfo");
$basicinfo=$basic_select->first();
//目录菜单
$menu_select = new Sql("menuinfo");
$menu=$menu_select->select();

$smarty->assign("basicinfo",$basicinfo);
$smarty->assign("menu",$menu);

$smarty->display("header.html");