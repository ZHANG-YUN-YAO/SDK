<?php
/* Smarty version 3.1.33, created on 2018-11-15 07:39:07
  from 'F:\phpbulider\wamp\www\sdk\app\view\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bed229b1ec007_77826383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae18e4ecb6bc69e13226952f4b70b1dbfa4ad54d' => 
    array (
      0 => 'F:\\phpbulider\\wamp\\www\\sdk\\app\\view\\index.html',
      1 => 1542267542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bed229b1ec007_77826383 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title></title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper-4.4.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-3.3.1.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
swiper-4.4.1.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
index.css"/>
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
		<div class="position">
			<a href="">
			    <i class="iconfont icon-location"></i>
			    <span>凯通大厦</span>
			</a>
		</div>
		<div class="search">
			<a href="sousuo.html">
				<i class="iconfont icon-sousuo"></i>
			</a>
		</div>
	</header>
	<!--header结束-->
	
	<!--banner开始-->
    <div class="banner">
    	<ul class="imgbox">
    		<li><a href="javascript:void(false)"><img src="<?php echo IMAGE_PATH;?>
banner-1.png"/></a></li>
    		<li><a href="javascript:void(false)"><img src="<?php echo IMAGE_PATH;?>
sj-1.webp.png"/></a></li>
    		<li><a href="javascript:void(false)"><img src="<?php echo IMAGE_PATH;?>
sj-2.webp.png"/></a></li>
    	</ul>
    	<ul class="btns">
    		<li class="active"></li>
    		<li></li>
    		<li></li>
    	</ul>
    </div>
    <!--banner结束-->
    
    <!--分类开始-->
    <div class=" swiper-container ">
		<div class="swiper-wrapper">
			<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['number']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['number']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
			<?php $_smarty_tpl->_assignInScope('foo', $_smarty_tpl->tpl_vars['i']->value*8+7);?>
			<?php if ($_smarty_tpl->tpl_vars['foo']->value > count($_smarty_tpl->tpl_vars['cate']->value)-1) {?>
			<?php $_smarty_tpl->_assignInScope('foo', count($_smarty_tpl->tpl_vars['cate']->value)-1);?>
			<?php }?>

			<div class="swiper-slide">
				<div class="category">
					<ul>
						<?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['foo']->value+1 - ($_smarty_tpl->tpl_vars['i']->value*8) : $_smarty_tpl->tpl_vars['i']->value*8-($_smarty_tpl->tpl_vars['foo']->value)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['i']->value*8, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration === 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration === $_smarty_tpl->tpl_vars['j']->total;?>
						<li>
							<a href="/sdk/index.php/food?id=<?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->tpl_vars['j']->value]['id'];?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->tpl_vars['j']->value]['thumb'];?>
" alt="">
							<p><?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->tpl_vars['j']->value]['title'];?>
</p>
							</a>
						</li>
						<?php }
}
?>
					</ul>
				</div>
			</div>
			<?php }
}
?>
		</div>
    </div>
    <!--分类结束-->
	<!--如果需要分液器-->
    <div class="swiper-pagination"></div>


    <!--<!--商家推荐开始-->
    <div class="sjtj">
    	<ul>
    		<li><img src="<?php echo IMAGE_PATH;?>
sjtj-1.png"/></li>
    		<li><h2>商家推荐</h2></li>
    		<li><img src="<?php echo IMAGE_PATH;?>
sjtj-2.png"/></li>
    	</ul>
    	<div class="sjtj-bottom">RECOMMEND FOOD</div>
    </div>
    <div class="pxfs">
    	<ul>
    		<li><a href="">综合排序</a></li>
    		<li><a href="">好评优先</a></li>
    		<li><a href="">距离最近</a></li>
    		<li><a href="">筛选<i class="iconfont icon-shaixuan"></i></a></li>
    	</ul>
    </div>
    <div class="main">
    	<ul class="main-1">
    		<!--<li class="main-1-1">-->
    			<!--<a href="dpxq.html">-->
    				<!--<div class="main-img">-->
    					<!--<img src="<?php echo IMAGE_PATH;?>
sj4.png" alt="" />-->
    				<!--</div>-->
    				<!--<div class="main-text">-->
    					<!--<h2>肯德基欢乐送</h2>-->
    					<!--<div class="star">-->
    						<!--<div class="stargrgy">-->
    							<!--<img src="<?php echo IMAGE_PATH;?>
stargrgy.png"/>-->
    						<!--</div>-->
    						<!--<div class="star5" style="width: 80%;">-->
    							<!--<img src="<?php echo IMAGE_PATH;?>
star.png"/>-->
    						<!--</div>-->
    					<!--</div>-->
    					<!--<div class="text-1">-->
    						<!--<span>起送￥20</span>-->
    						<!--<span>配送￥3.5</span>-->
    					<!--</div>-->
    					<!--<div class="text-2">-->
    						<!--<i class="iconfont icon-drink"></i>-->
    						<!--<span>美味炸鸡卷</span>-->
    					<!--</div>-->
    					<!--<div class="text-3">-->
    						<!--<span>首单减5</span>-->
    					<!--</div>-->
    				<!--</div>-->
    				<!--<div class="main-right">-->
    					<!--<div class="main-right-1">-->
    						<!--<i class="iconfont icon-gengduo"></i>-->
    					<!--</div>-->
    					<!--<div class="main-right-2">-->
    						<!--<span>30分钟</span>-->
    						<!--<span>909M</span>-->
    					<!--</div>-->
    					<!--<div class="main-right-3">美团专送</div>-->
    				<!--</div>-->
    			<!--</a>-->
    		<!--</li>-->
    		<!--<li class="main-1-1">-->
    			<!--<a href="">-->
    				<!--<div class="main-img">-->
    					<!--<img src="<?php echo IMAGE_PATH;?>
sj4.png" alt="" />-->
    				<!--</div>-->
    				<!--<div class="main-text">-->
    					<!--<h2>肯德基欢乐送</h2>-->
    					<!--<div class="star">-->
    						<!--<div class="stargrgy">-->
    							<!--<img src="<?php echo IMAGE_PATH;?>
stargrgy.png"/>-->
    						<!--</div>-->
    						<!--<div class="star5" style="width: 80%;">-->
    							<!--<img src="<?php echo IMAGE_PATH;?>
star.png"/>-->
    						<!--</div>-->
    					<!--</div>-->
    					<!--<div class="text-1">-->
    						<!--<span>起送￥20</span>-->
    						<!--<span>配送￥3.5</span>-->
    					<!--</div>-->
    					<!--<div class="text-2">-->
    						<!--<i class="iconfont icon-drink"></i>-->
    						<!--<span>美味炸鸡卷</span>-->
    					<!--</div>-->
    					<!--<div class="text-3">-->
    						<!--<span>首单减5</span>-->
    					<!--</div>-->
    				<!--</div>-->
    				<!--<div class="main-right">-->
    					<!--<div class="main-right-1">-->
    						<!--<i class="iconfont icon-gengduo"></i>-->
    					<!--</div>-->
    					<!--<div class="main-right-2">-->
    						<!--<span>30分钟</span>-->
    						<!--<span>909M</span>-->
    					<!--</div>-->
    					<!--<div class="main-right-3">美团专送</div>-->
    				<!--</div>-->
    			<!--</a>-->
    		<!--</li>-->
    		<!--<li class="main-1-1">-->
    			<!--<a href="">-->
    				<!--<div class="main-img">-->
    					<!--<img src="<?php echo IMAGE_PATH;?>
sj4.png" alt="" />-->
    				<!--</div>-->
    				<!--<div class="main-text">-->
    					<!--<h2>肯德基欢乐送</h2>-->
    					<!--<div class="star">-->
    						<!--<div class="stargrgy">-->
    							<!--<img src="<?php echo IMAGE_PATH;?>
stargrgy.png"/>-->
    						<!--</div>-->
    						<!--<div class="star5" style="width: 80%;">-->
    							<!--<img src="<?php echo IMAGE_PATH;?>
star.png"/>-->
    						<!--</div>-->
    					<!--</div>-->
    					<!--<div class="text-1">-->
    						<!--<span>起送￥20</span>-->
    						<!--<span>配送￥3.5</span>-->
    					<!--</div>-->
    					<!--<div class="text-2">-->
    						<!--<i class="iconfont icon-drink"></i>-->
    						<!--<span>美味炸鸡卷</span>-->
    					<!--</div>-->
    					<!--<div class="text-3">-->
    						<!--<span>首单减5</span>-->
    					<!--</div>-->
    				<!--</div>-->
    				<!--<div class="main-right">-->
    					<!--<div class="main-right-1">-->
    						<!--<i class="iconfont icon-gengduo"></i>-->
    					<!--</div>-->
    					<!--<div class="main-right-2">-->
    						<!--<span>30分钟</span>-->
    						<!--<span>909M</span>-->
    					<!--</div>-->
    					<!--<div class="main-right-3">美团专送</div>-->
    				<!--</div>-->
    			<!--</a>-->
    		<!--</li>-->
    	</ul>
    </div>
    <!--商家推荐结束-->
    
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
    
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
funciton.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
   window.onload=function () {
       let btns = document.querySelectorAll('.btns li');
       let imgs = document.querySelectorAll('.imgbox img');
       let banner = document.querySelector('.banner');
       banner_oi(btns, imgs, banner, null, null, 'active', 3000);

       let mySwiper = new Swiper('.swiper-container', {
           loop: true,//循环模式
           pagination: {
               el: '.swiper-pagination',

           },
       })
   }
    <?php echo '</script'; ?>
>

</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index.js"><?php echo '</script'; ?>
>
</html><?php }
}
