<?php
/* Smarty version 3.1.33, created on 2018-11-15 06:28:54
  from 'F:\phpbulider\wamp\www\sdk\app\view\wode.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bed1226c46009_37326884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e30ea84c370413f006ede03aae873aff5a82fb6e' => 
    array (
      0 => 'F:\\phpbulider\\wamp\\www\\sdk\\app\\view\\wode.html',
      1 => 1542263333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bed1226c46009_37326884 (Smarty_Internal_Template $_smarty_tpl) {
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
wode.css"/>
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
		<ul>
			<li>我的</li>
			<li>
				<a href="">
					<i class="iconfont icon-tongzhi"></i>
				</a>
			</li>
			<li>
				<a href="">
					<i class="iconfont icon-shezhi"></i>
				</a>
			</li>
		</ul>
	</header>
	<!--header结束-->
	
	<!--个人信息开始-->
	<div class="grxx">
		<div class="grxx-1">
			<div class="imgthumb">
				<img src="img/touxiang.png"/>
			</div>
			<div class="info">
				<!--<div class="name">小明</div>-->
				<!--<div class="vip">-->
					<!--<span>VIP</span>-->
					<!--<div class="star">-->
					   <!--<img src="img/vipstar.png"/>-->
					<!--</div>-->
				<!--</div>-->
				<!--<div class="number">152****6350</div>-->
			</div>
			<div class="btns">
				<a href="">
				    <i class="iconfont icon-arrow-right"></i>
				</a>
			</div>
		</div>
	</div>
	<!--个人信息结束-->
	
	<!--钱包开始-->
	<div class="money">
		<div class="qianbao">
			<div class="qianbao-text">
				<a href="">
				    <span>68.00</span>
				    <span>元</span>
				</a>
			</div>
			<div class="qianbao-img">
				<span>
					<i class="iconfont icon-qianbao"></i>
				</span>
				<span>钱包</span>
			</div>
		</div>
		<div class="qianbao">
			<div class="qianbao-text">
				<a href="">
				    <span>22</span>
				    <span>个</span>
				</a>
			</div>
			<div class="qianbao-img">
				<span>
					<i class="iconfont icon-hongbao"  style="color: #FF0000;"></i>
				</span>
				<span>红包</span>
			</div>
		</div>
		<div class="qianbao">
			<div class="qianbao-text">
				<a href="">
				    <span>2400</span>
				    <span>个</span>
				</a>
			</div>
			<div class="qianbao-img">
				<span>
					<i class="iconfont icon-29"  style="color: #fafd23;"></i>
				</span>
				<span>金币</span>
			</div>
		</div>
	</div>
	<!--钱包结束-->
	
	<!--列表开始-->
    <div class="list">
    	<ul class="list-1">
    		<li>
    			<a href="">
    			    <span>
    				    <i class="iconfont icon-location"></i>
    			    </span>
    			    <span>收货地址</span>
    			</a>
    		</li>
    		<li>
    			<a href="">
    			    <span>
    				    <i class="iconfont icon-shoucang"></i>
    			    </span>
    			    <span>我的收藏</span>
    			</a>
    		</li>
    		<li>
    			<a href="">
    			    <span>
    				    <i class="iconfont icon-kefu"></i>
    			    </span>
    			    <span>在线客服</span>
    			</a>
    		</li>
    	</ul>
    </div>
     <div class="list">
    	<ul class="list-1">
    		<li>
    			<a href="">
    			    <span>
    				    <i class="iconfont icon-location"></i>
    			    </span>
    			    <span>收货地址</span>
    			</a>
    		</li>
    		<li>
    			<a href="">
    			    <span>
    				    <i class="iconfont icon-shoucang"></i>
    			    </span>
    			    <span>我的收藏</span>
    			</a>
    		</li>
    		<li>
    			<a href="">
    			    <span>
    				    <i class="iconfont icon-kefu"></i>
    			    </span>
    			    <span>在线客服</span>
    			</a>
    		</li>
    	</ul>
    </div>    
    <!--底部状态栏开始-->
    <footer>
    	<ul>
    		<li>
    			<a href="/sdk/index.php">
    				<i class="iconfont icon-shouye"></i>
    				<p>首页</p>
    			</a>
    		</li>
    		<li>
    			<a href="/sdk/index.php/dpxq/wode">
    				<i class="iconfont icon-wode"></i>
    				<p>我的</p>
    			</a>
    		</li>
    		<li>
    			<a href="/sdk/index.php/dpxq/look">
    				<i class="iconfont icon-single"></i>
    				<p>订单</p>
    			</a>
    		</li>
    		<li>
    			<a href="">
    				<i class="iconfont icon-icon--"></i>
    				<p>更多</p>
    			</a>
    		</li>
    	</ul>
    </footer>
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
wode.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
