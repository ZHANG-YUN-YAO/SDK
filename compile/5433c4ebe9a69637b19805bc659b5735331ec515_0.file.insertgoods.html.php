<?php
/* Smarty version 3.1.33, created on 2018-11-07 09:33:19
  from 'F:\phpbulider\wamp\www\sdk\app\view\insertgoods.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be2b15f4a77b8_02798343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5433c4ebe9a69637b19805bc659b5735331ec515' => 
    array (
      0 => 'F:\\phpbulider\\wamp\\www\\sdk\\app\\view\\insertgoods.html',
      1 => 1541583197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5be2b15f4a77b8_02798343 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form class="layui-form" action="get" id="myform"  lay-filter="test2">
                <div class="layui-form-item">
                    <label class="layui-form-label" type="sel">所属店铺</label>
                    <div class="layui-input-block">
                        <select name="cid" lay-verify="required" lay-filter="shop" >
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['str']->value, 'v', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['v']->value['sname'];?>

                            </option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        </select>
                    </div>
                </div>
                <div class="layui-form-item" >
                    <label class="layui-form-label" type="sel">所属分类</label>
                    <div class="layui-input-block">
                        <select name="nid"  lay-filter="shop" >
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['str2']->value, 'v2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v2']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v2']->value['gid'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['v2']->value['title'];?>

                            </option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">商品名称</label>
                    <div class="layui-input-inline">
                        <input type="text" name="title"  placeholder="请输入店铺名称" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">商品描述</label>
                    <div class="layui-input-inline">
                        <input type="text" name="des" required lay-verify="required" placeholder="公告" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">商品价格</label>
                    <div class="layui-input-inline">
                        <input type="text" name="price"  placeholder="配送信息" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">商品原价</label>
                    <div class="layui-input-inline">
                        <input type="text" name="discount"  placeholder="配送信息" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div  class="layui-form-item">
                    <label class="layui-form-label">商品缩略图</label>
                    <button type="button" class="layui-btn" id="test1">
                        <i class="layui-icon">&#xe67c;</i>上传图片
                    </button>
                </div>
                <ul class="imgbox">
                    <!--<li>
                    <img src="/sdk/static/images/logo.png" name="thumb" id="thumb" alt="" width="100px" height="80px">
                    <div class="mask"></div>
                    <div class="button">
                    <i class="layui-icon layui-icon-delete"></i>
                    <i class="layui-icon layui-icon-search"></i>
                    </div>
                    </li>-->
                </ul>
                <input type="hidden" name="thumb" id="thumb">


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
insertgoods.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
