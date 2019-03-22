<?php
/* Smarty version 3.1.33, created on 2018-11-15 01:43:09
  from 'F:\phpbulider\wamp\www\sdk\app\view\zfcg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beccf2db0d008_41948985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8120eb83bbc792dd5172ccbd1cadebff711046c' => 
    array (
      0 => 'F:\\phpbulider\\wamp\\www\\sdk\\app\\view\\zfcg.html',
      1 => 1542246186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beccf2db0d008_41948985 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title></title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
  src="<?php echo JS_PATH;?>
jquery-3.3.1.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
zfcg.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
iconfont.css"/>
    <?php echo '<script'; ?>
 type="text/javascript">
    	
   		document.addEventListener('plusready', function(){
   			//console.log("所有plus api都应该在此事件发生后调用，否则会出现plus is undefined。"
   			
   		});
   		
    <?php echo '</script'; ?>
>
</head>
<body>
	<!--header开始-->
	<header>
		<div class="header-img">
			<img src="<?php echo IMAGE_PATH;?>
zfcg.png"/>
		</div>
		<div class="header-text">
			<ul>
				<li>您本次共支付</li>
				<li class="afford">42.5元</li>
				<li>欢迎下次光临</li>
			</ul>
		</div>
	</header>
	<!--按钮开始-->
	<div class="btns">
		<ul>
			<li>
				<a href="/sdk/index.php">返回首页</a>
			</li>
			<li>
				<a href="/sdk/index.php/dpxq/look">查看订单</a>
			</li>
		</ul>
	</div>
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
pay.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
