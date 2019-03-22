<?php
/* Smarty version 3.1.33, created on 2018-11-02 07:50:02
  from 'F:\phpbulider\wamp\www\sdk\app\view\insertgtype.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bdc01aa8b97c4_63547798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0109069fae98f9e7050112501fc07b65d4f4e654' => 
    array (
      0 => 'F:\\phpbulider\\wamp\\www\\sdk\\app\\view\\insertgtype.html',
      1 => 1541144856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bdc01aa8b97c4_63547798 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>layout 后台大布局 - Layui</title>

    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
layui.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
insertcate.css">
</head>
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
        <div style="padding: 15px;">
            <form class="layui-form" action="" id="myform">
                <div class="layui-form-item">
                    <label class="layui-form-label" type="sel">商品分类</label>
                    <div class="layui-input-block">
                            <select name="gid" lay-verify="required">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['show']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['sname'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <!--<option value="1">上海</option>-->
                                <!--<option value="2">广州</option>-->
                                <!--<option value="3">深圳</option>-->
                                <!--<option value="4">杭州</option>-->
                            </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">商品分类名称</label>
                    <div class="layui-input-inline">
                        <input type="text" name="title" required lay-verify="required" placeholder="商品分类名称" autocomplete="off" class="layui-input" value="">
                    </div>
                </div>
                <!--<div class="layui-form-item">-->
                    <!--<label class="layui-form-label">商品分类</label>-->
                    <!--<div class="layui-input-inline">-->
                        <!--<input type="text" name="cid" required lay-verify="required" placeholder="商品分类" autocomplete="off" class="layui-input" value="">-->
                    <!--</div>-->
                <!--</div>-->
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn" lay-submit lay-filter="submit1">立即提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © layui.com - 底部固定区域
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo LAYUIJS_PATH;?>
layui.all.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
adminlogin.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
insertgtype.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
