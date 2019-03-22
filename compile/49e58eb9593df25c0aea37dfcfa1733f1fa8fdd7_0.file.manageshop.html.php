<?php
/* Smarty version 3.1.33, created on 2018-11-01 06:54:19
  from 'F:\phpbulider\wamp\www\sdk\app\view\manageshop.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bdaa31b837b46_97797834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49e58eb9593df25c0aea37dfcfa1733f1fa8fdd7' => 
    array (
      0 => 'F:\\phpbulider\\wamp\\www\\sdk\\app\\view\\manageshop.html',
      1 => 1541055221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bdaa31b837b46_97797834 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>layout 后台大布局 - Layui</title>

    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
layui.css">
</head>
<style>
    /*.laytable-cell-1-0-2*/
    .layui-table-cell{
        height: 100px;
        line-height: 100px;
        text-align: center;
    }
</style>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">

    <!--引入头部-->
    <?php $_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="layui-side layui-bg-black">
        <!--引入侧边栏-->
        <?php $_smarty_tpl->_subTemplateRender('file:slide.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <?php echo '<script'; ?>
 type="text/html" id="toolbarDemo">
            <div class="layui-btn-container">
                <button class="layui-btn layui-btn-sm" lay-event="getCheckData">获取选中行数据</button>
                <button class="layui-btn layui-btn-sm" lay-event="getCheckLength">获取选中数目</button>
                <button class="layui-btn layui-btn-sm" lay-event="isAll">验证是否全选</button>
                <button class="layui-btn layui-btn-sm" lay-event="deles">删除</button>
            </div>
        <?php echo '</script'; ?>
>

        <!--右边删除修改的操作列-->
        <?php echo '<script'; ?>
 type="text/html" id="barDemo">
            <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
            <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/html" >

        <?php echo '</script'; ?>
>


        <div class="demoTable">
            按ID搜索：
            <div class="layui-inline">
                <input class="layui-input" name="sid" id="demoReload" autocomplete="off">
            </div>
            按店铺名称搜索：
            <div class="layui-inline">
                <input class="layui-input" name="sname" id="sname" autocomplete="off">
            </div>
            按cID搜索：
            <div class="layui-inline">
                <input class="layui-input" name="cid" id="cid" autocomplete="off">
            </div>
            <button class="layui-btn" data-type="reload">搜索</button>
        </div>


        <div style="padding: 15px;">
            <table id="demo" lay-filter="test"></table>
        </div>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © 版权是我的
    </div>

</div>
<?php echo '<script'; ?>
 src="<?php echo LAYUIJS_PATH;?>
layui.all.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
manageshop.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
