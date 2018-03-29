<?php /* Smarty version Smarty-3.0.5, created on 2018-03-08 14:58:39
         compiled from "banner.php" */ ?>
<?php /*%%SmartyHeaderCode:281395aa0df1f50fe86-77404286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '355f644e320bc86253816abbea402db0e861c791' => 
    array (
      0 => 'banner.php',
      1 => 1520491824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281395aa0df1f50fe86-77404286',
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
 * Time: 14:50
 */

require "Common.php";

//轮播图
$banner_select = new Sql("banner");
$banner=$banner_select->where("bankuai=1")->select();
