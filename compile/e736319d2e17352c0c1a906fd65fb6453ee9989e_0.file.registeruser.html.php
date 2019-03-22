<?php
/* Smarty version 3.1.33, created on 2018-11-09 14:57:14
  from 'F:\phpbulider\wamp\www\sdk\app\view\registeruser.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be5a04a4f89e9_59650484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e736319d2e17352c0c1a906fd65fb6453ee9989e' => 
    array (
      0 => 'F:\\phpbulider\\wamp\\www\\sdk\\app\\view\\registeruser.html',
      1 => 1541775430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be5a04a4f89e9_59650484 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title></title>
	<style>
		.error{
			font-size: 0.28rem;
			font-weight: normal;
			margin-top: 0.5rem;
		}
	</style>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
registeruser.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
iconfont.css"/>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-3.3.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
    	
   		document.addEventListener('plusready', function(){
   			//console.log("所有plus api都应该在此事件发生后调用，否则会出现plus is undefined。"
   			
   		});
   		
    <?php echo '</script'; ?>
>
</head>
<body>

	<!--header-->
	<header>
		<img src="<?php echo IMAGE_PATH;?>
logo.png"/>
	</header>
	<!--登录框-->
	<div class="denglu">
		<div class="lan"></div>
		<form id="myform">
	    <div class="denglu-1">
	    	<ul>
	    		<li>
	    			<div class="zhuangshi"></div>
	    			<input type="text" placeholder="请输入您的手机号"  name="phone"  form="myform" id="phone">
	    		</li>
	    		<li>
	    			<div class="zhuangshi"></div>
	    			<input type="text" placeholder="请输入密码"  name="password"  form="myform" id="password">
	    		</li>
				<li style="background-color: #fff">
					<div class="zhuangshi"></div>
					<input type="text" placeholder="请确认密码"  name="password1"  form="myform" id="password1" >
				</li>
	    		<li>
	    			<!--<a href="">点击注册</a>-->
					<input id="submit" type="submit" value="点击注册">
	    		</li>
	    	</ul>

	    	<div class="info">
	    		<a href="">忘记密码？</a>
	    		<a href="/sdk/index.php/my/init">直接登录</a>
	    	</div>
	    </div>
		</form>
	</div>
	<!--第三方登陆-->
	<div class="sjtj">
    	<ul>
    		<li><img src="<?php echo IMAGE_PATH;?>
sjtj-1.png"/></li>
    		<li><h2>第三方登陆</h2></li>
    		<li><img src="<?php echo IMAGE_PATH;?>
sjtj-2.png"/></li>
    	</ul>
    </div>
    <div class="disanfang">
    	<a href="">
    		<i class="iconfont icon-qq-copy-copy"></i>
    	</a>
    	<a href="">
    		<i class="iconfont icon-weixin-copy"></i>
    	</a>
    	<a href="">
    		<i class="iconfont icon-logo-weibo"></i>
    	</a>
    </div>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
registeruser.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
