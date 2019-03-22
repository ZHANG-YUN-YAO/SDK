<?php
/* Smarty version 3.1.33, created on 2018-11-02 03:18:20
  from 'F:\phpbulider\wamp\www\sdk\app\view\insertshop.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bdbc1fcb12f45_49285248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '545046f28321aaea988641a05e995414724cd6a5' => 
    array (
      0 => 'F:\\phpbulider\\wamp\\www\\sdk\\app\\view\\insertshop.html',
      1 => 1541128659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bdbc1fcb12f45_49285248 (Smarty_Internal_Template $_smarty_tpl) {
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
            <form class="layui-form" action="post" id="myform" enctype="application/x-www-form-urlencoded">
                <div class="layui-form-item">
                    <label class="layui-form-label" type="sel">店铺分类</label>

                    <div class="layui-input-block">
                        <!--<input type="text" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">-->
                        <select name="cid" lay-verify="required">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['str']->value, 'v', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>

                            </option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <!--<option value="0">一级栏目</option>-->
                                <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                            <!--<option value="1">上海</option>-->
                            <!--<option value="2">广州</option>-->
                            <!--<option value="3">深圳</option>-->
                            <!--<option value="4">杭州</option>-->
                        </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">店铺名称</label>
                    <div class="layui-input-inline">
                        <input type="text" name="sname" required lay-verify="required" placeholder="请输入店铺名称" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <!--上传文件-->


                <div class="layui-form-item">
                    <label class="layui-form-label">公告</label>
                    <div class="layui-input-inline">
                        <input type="text" name="notice" required lay-verify="required" placeholder="公告" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">配送信息</label>
                    <div class="layui-input-inline">
                        <input type="text" name="fee" required lay-verify="required" placeholder="配送信息" autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">店铺口号</label>
                    <div class="layui-input-inline">
                        <input type="text" name="slogan" required lay-verify="required" placeholder="店铺理念" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">经营范围</label>
                    <div class="layui-input-inline">
                        <input type="text" name="stype" required lay-verify="required" placeholder="经营范围" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">联系方式</label>
                    <div class="layui-input-inline">
                        <input type="text" name="phone" required lay-verify="required" placeholder="联系方式" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div  class="layui-form-item">
                    <label class="layui-form-label">上传缩略图</label>
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
                <input type="hidden" name="sthumb">

                <div  class="layui-form-item">
                    <label class="layui-form-label">实景图</label>
                    <button type="button" class="layui-btn" id="test2">
                        <i class="layui-icon">&#xe67c;</i>多图上传
                    </button>
                </div>
                <!--<div class="layui-form-item">-->
                <!--<label class="layui-form-label"><img src="res.url" style="width: 80px;height: 80px; margin-left: 105px" id="thumb" alt=""></label>-->
                <!--</div>-->

                <ul class="imgbox2" style="display: flex">
          <!--          <li>
                    <img src="/sdk/static/images/logo.png" name="thumb" id="thumb" alt="" width="100px" height="80px">
                    <div class="mask"></div>
                    <div class="button">
                    <i class="layui-icon layui-icon-delete"></i>
                    <i class="layui-icon layui-icon-search"></i>
                    </div>
                    </li>-->
                </ul>
                <input type="hidden" name="view">

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
insertshop.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
