<?php
/* Smarty version 3.1.33, created on 2018-11-03 06:42:47
  from 'F:\phpbulider\wamp\www\sdk\app\view\slide.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bdd4367e24955_13101713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e2c1145fcc3bfcb173417b95c08d97e8322eb55' => 
    array (
      0 => 'F:\\phpbulider\\wamp\\www\\sdk\\app\\view\\slide.html',
      1 => 1541227366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdd4367e24955_13101713 (Smarty_Internal_Template $_smarty_tpl) {
?><!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
    <!--<meta charset="UTF-8">-->
    <!--<title>Title</title>-->
<!--</head>-->
<!--<body>-->

<!--</body>-->
<!--</html>-->

<div class="layui-side-scroll">
    <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
    <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <li class="layui-nav-item layui-nav-itemed">
            <a class="" href="javascript:;">管理栏目</a>
            <dl class="layui-nav-child">
                <dd><a href="/sdk/index.php/managecate">查看栏目</a></dd>
                <dd><a href="/sdk/index.php/managecate/insert">添加栏目</a></dd>
            </dl>
        </li>

        <li class="layui-nav-item layui-nav-itemed">
            <a class="" href="javascript:;">管理店铺</a>
            <dl class="layui-nav-child">
                <dd><a href="/sdk/index.php/manageshop/query">查看店铺</a></dd>
                <dd><a href="/sdk/index.php/manageshop/insert">添加店铺</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item layui-nav-itemed">
            <a class="" href="javascript:;" lay-verify="required">管理店铺商品分类</a>
            <dl class="layui-nav-child">
                <dd><a href="/sdk/index.php/managetype/query" lay-verify="required">查看店铺商品分类</a></dd>
                <dd><a href="/sdk/index.php/managetype">添加店铺商品分类</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item layui-nav-itemed">
            <a class="" href="javascript:;" lay-verify="required">管理商品</a>
            <dl class="layui-nav-child">
                <dd><a href="/sdk/index.php/managegoods/query" lay-verify="required">查看商品</a></dd>
                <dd><a href="/sdk/index.php/managegoods">添加商品</a></dd>
            </dl>
        </li>
    </ul>
</div><?php }
}
