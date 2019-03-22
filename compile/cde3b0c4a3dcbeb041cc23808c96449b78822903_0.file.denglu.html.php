<?php
/* Smarty version 3.1.33, created on 2018-11-10 01:40:25
  from 'F:\phpbulider\wamp\www\sdk\app\view\denglu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be637094058f7_29630537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cde3b0c4a3dcbeb041cc23808c96449b78822903' => 
    array (
      0 => 'F:\\phpbulider\\wamp\\www\\sdk\\app\\view\\denglu.html',
      1 => 1541814024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be637094058f7_29630537 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<style>
		.error{
			font-size: 0.28rem;
			font-weight: normal;
			margin-top: 0.5rem;
		}
		.denglu-1 li:nth-child(3) {
			height:auto;
			width: 0.2rem;

		}
	</style>
    <title></title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
denglu.css"/>
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
		<form action="" id="myform">
	    <div class="denglu-1">
	    	<ul>
	    		<li>
	    			<div class="zhuangshi"></div>
	    			<input type="text" placeholder="请输入您的手机号"form="myform" name="phone" value="" id="phone">
	    		</li>
	    		<li>
	    			<div class="zhuangshi"></div>
	    			<input type="password" placeholder="请输入密码"form="myform" name="password" value="" id="password">
	    		</li>
				<li style="background-color: #fff;border: 0rem;" >
					<input type="password" placeholder="请输入验证"form="myform" name="code" value="" id="code" style="width: 1.2rem;margin-right: 0.3rem;padding-left: 0.3rem">
					<img src="/sdk/index.php/my/code"  onclick="this.src='/sdk/index.php/my/code?id='+Date.now()" style="width: 2.5rem;height: 1.2rem">
				</li>
	    		<li>
					<!--<button type="submit">点击登录</button>-->
					<input id="submit" type="submit" value="点击登录" >
				</li>

	    	</ul>
	    	<div class="info">
	    		<a href="">忘记密码？</a>
	    		<a href="/sdk/index.php/my/register">注册账号</a>
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
<!--<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
registeruser.js"><?php echo '</script'; ?>
>-->
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
denglu.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
