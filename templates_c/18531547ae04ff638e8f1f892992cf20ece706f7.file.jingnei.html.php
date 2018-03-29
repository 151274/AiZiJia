<?php /* Smarty version Smarty-3.0.5, created on 2018-03-25 10:00:47
         compiled from "Home\jingnei.html" */ ?>
<?php /*%%SmartyHeaderCode:245125ab702cf4e4eb7-85090659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18531547ae04ff638e8f1f892992cf20ece706f7' => 
    array (
      0 => 'Home\\jingnei.html',
      1 => 1521943244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245125ab702cf4e4eb7-85090659',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>境内首页</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/reset.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
css/denglu.css">
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
js/jquery-1.9.1.js"></script>
</head>
<body>
<div class="wrap">
    <!--头部-->
    <?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <!--轮播图-->
    <?php $_template = new Smarty_Internal_Template("banner.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <!--主体内容-->
    <div id="main">
        <div class="content">
            <!--热门搜索-->
            <div class="search">
                <form action="chengshisousuo.php">
                    <div class="input"><input type="text" name="name" id="name"></div>
                    <div class="submit"><input type="submit" value=""></div>
                </form>
                <div class="remen">
                    <ul>
                        <li class="first">热门搜索：</li>
                        <li>北京</li>
                        <li>西安</li>
                        <li>天津</li>
                        <li>上海</li>
                        <li>杭州</li>
                        <li>青海</li>
                        <li>西藏</li>
                        <li>云南</li>
                    </ul>
                </div>
            </div>
            <!--境内-->
            <div class="jingnei h1_ys">
                <h1><a href="jingnei.php">境内 </a><span><a href="jingnei.php">Territory</a></span></h1>
                <ul class="jingwai_list list">
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
                    <li>
                        <div class="pic"><a href="xiangqing.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
&&lingduiid=<?php echo $_smarty_tpl->tpl_vars['value']->value['lingduiid'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('Home')->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['value']->value['pic'];?>
" alt="img1.png"><p><?php echo $_smarty_tpl->tpl_vars['value']->value['xianlumingcheng'];?>
</p></a></div>
                        <div>
                            <div><span class="price"><?php echo $_smarty_tpl->tpl_vars['value']->value['danjia'];?>
</span>起</div>
                            <span class="chufa"><?php echo $_smarty_tpl->tpl_vars['value']->value['chufariqi'];?>
出发</span>
                            <span class="tianshu"><?php echo $_smarty_tpl->tpl_vars['value']->value['tianshu'];?>
天</span>
                        </div>
                        <div class="xianlu"><h2><?php echo $_smarty_tpl->tpl_vars['value']->value['xingchenggaiyao'];?>
</h2></div>
                        <div class="biaoti_min"><?php echo $_smarty_tpl->tpl_vars['value']->value['jianduanjieshao'];?>
</div>
                        <div class="bottom">
                            <div class="left"><a href="lingdui.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['lingduiid'];?>
" style="color: #808080;"><span></span>
                                <?php  $_smarty_tpl->tpl_vars['lingdui_val'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr')->value['lingdui']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lingdui_val']->key => $_smarty_tpl->tpl_vars['lingdui_val']->value){
?>
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['value']->value['lingduiid'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['lingdui_val']->value['id']==$_tmp1){?>
                                <?php echo $_smarty_tpl->tpl_vars['lingdui_val']->value['name'];?>

                                <?php }?>
                                <?php }} ?></a>
                            </div>
                            <div class="liulan"><span></span><?php echo $_smarty_tpl->tpl_vars['value']->value['chakancishu'];?>
</div>
                            <div class="dianzan"><span></span><?php echo $_smarty_tpl->tpl_vars['value']->value['dianzancishu'];?>
</div>
                        </div>
                    </li>
                    <?php }} ?>
                </ul>
            </div>
        </div>
    </div>
    <!--尾部-->
    <?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</div>
</body>
</html>