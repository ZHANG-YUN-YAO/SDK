<?php
/* Smarty version 3.1.33, created on 2018-10-25 05:38:32
  from 'F:\phpbulider\wamp\www\sdk\app\view\adminlogin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd156d83f3df9_26771716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '540fef0e4f51999a54c9b95091118c2463ef17a5' => 
    array (
      0 => 'F:\\phpbulider\\wamp\\www\\sdk\\app\\view\\adminlogin.html',
      1 => 1540445911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd156d83f3df9_26771716 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SDK后台登录</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
layui.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
adminlogin.css">

</head>
<body>
<!--页面变成全屏-->
<!--<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-->
<div class="box">
    <h2>SDK（cms）后台登录</h2>
    <form class="layui-form" action="">
        <div class="layui-form-item">
            <label class="layui-form-label">   <i class="layui-icon layui-icon-username "></i></label>
            <div class="layui-input-block">
                <input type="text" name="username" required  lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"> <i class="layui-icon layui-icon-password"></i></label>
            <div class="layui-input-block">
                <input type="password" name="password" required lay-verify="required|password" placeholder="请输入密码" autocomplete="off" class="layui-input">
            </div>

        </div>

        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>

            </div>
        </div>
    </form>
</div>


<?php echo '<script'; ?>
 src="<?php echo LAYUIJS_PATH;?>
layui.all.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
adminlogin.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
