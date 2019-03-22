<?php
/* Smarty version 3.1.33, created on 2018-12-03 15:31:59
  from 'F:\phpbulider\wamp\www\sdk\app\view\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c054c6f4f6069_81422536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5aaa7cd755b2323c2503e19913c3356f7ef621ee' => 
    array (
      0 => 'F:\\phpbulider\\wamp\\www\\sdk\\app\\view\\header.html',
      1 => 1543850824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c054c6f4f6069_81422536 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="layui-header">
        <div class="layui-logo">layui 后台管理</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left" style="display: none">
            <li class="layui-nav-item"><a href="">控制台</a></li>
            <li class="layui-nav-item"><a href="">商品管理</a></li>
            <li class="layui-nav-item"><a href="">用户</a></li>
            <li class="layui-nav-item">
                <a href="javascript:;">其它系统</a>
                <dl class="layui-nav-child">
                    <dd><a href="">邮件管理</a></dd>
                    <dd><a href="">消息管理</a></dd>
                    <dd><a href="">授权管理</a></dd>
                </dl>
            </li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['thumb'];?>
" class="layui-nav-img" >
                    <?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>

                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退了</a></li>
        </ul>
    </div>

<?php }
}
