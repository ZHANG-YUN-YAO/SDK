<?php
/* Smarty version 3.1.33, created on 2018-12-29 01:04:02
  from 'F:\phpbulider\wamp\www\sdk\app\view\cate.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c26c80272f109_46278082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2796e3f009f61a8c568c7a8a8cfbfcbcc06c887c' => 
    array (
      0 => 'F:\\phpbulider\\wamp\\www\\sdk\\app\\view\\cate.html',
      1 => 1546045439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c26c80272f109_46278082 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0, user-scalable=no " />
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
meishi.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
swiper-4.4.1.min.css"/>
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
		<ul class="header-top">
			<li>
				<a href="javascript:history.back();">
					<i class="iconfont icon-zuojiantou"></i>					
				</a>
			</li>

			<li>
				<p><?php echo $_smarty_tpl->tpl_vars['currentcate']->value['title'];?>
</p>
			</li>
			<li>
				<a href="">
					<i class="iconfont icon-sousuo"></i>
				</a>
			</li>
		</ul>
		<div class="header-bottom ">
		    <ul class="header-bottom-1  " style="white-space: nowrap">
			    <li cid="0">
				   <a href="">全部</a>
			    </li>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['soncate']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			    <li cid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
				   <a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
			    </li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			 <!--   <li>
				   <a href="">香锅冒菜</a>
			    </li>
			    <li>
				   <a href="">面食粥点</a>
			    </li>
			    <li>
			       <a href="">小吃炸串</a>
			    </li>
			    <li>
			       <a href="">地方菜系</a>
			    </li>
			    <li>
			       <a href="">汉堡披萨</a>
			    </li>
			    <li>
			       <a href="">日韩料理</a>
			    </li>		    -->
		    </ul>
		</div>
	</header>
	<!--header结束-->
	<!--排序方式开始-->
	<div class="pxfs">
		<ul>
			<li type="sid">
				综合排序
					<i class="iconfont icon-jiantou9"></i>
			</li>
			<li type="sale">
				销量
			</li>
			<li type="score">
				评价
			</li>
			<li>
				筛选
					<i class="iconfont icon-shaixuan"></i>				         

			</li>
		</ul>
	</div>
	<!--商家列表开始-->
	<div class="main">
		<div class="wrapper">
			<div class="scrollUp" style=" text-align: center;display: none">
				<i class="iconfont icon-load"></i>
				<span style="font-size: 0.2rem;color: #333;">正在加载。。。</span>
			</div>
			<ul class="main-1 ">
				<!--<li class="main-1-1">-->
					<!--<a href="dpxq.html">-->
						<!--<div class="main-img">-->
							<!--<img src="<?php echo IMAGE_PATH;?>
sj4.png" alt="" />-->
						<!--</div>-->
						<!--<div class="main-text">-->
							<!--<h2>COCO都可（百花谷店）</h2>-->
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
								<!--<span>奶茶果汁</span>-->
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
							<!--<div class="main-right-3">蜂鸟专送</div>-->
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
							<!--<h2>COCO都可（百花谷店）</h2>-->
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
								<!--<span>奶茶果汁</span>-->
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
							<!--<div class="main-right-3">蜂鸟专送</div>-->
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
							<!--<h2>COCO都可（百花谷店）</h2>-->
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
								<!--<span>奶茶果汁</span>-->
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
							<!--<div class="main-right-3">蜂鸟专送</div>-->
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
							<!--<h2>COCO都可（百花谷店）</h2>-->
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
								<!--<span>奶茶果汁</span>-->
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
							<!--<div class="main-right-3">蜂鸟专送</div>-->
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
							<!--<h2>COCO都可（百花谷店）</h2>-->
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
								<!--<span>奶茶果汁</span>-->
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
							<!--<div class="main-right-3">蜂鸟专送</div>-->
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
							<!--<h2>COCO都可（百花谷店）</h2>-->
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
								<!--<span>奶茶果汁</span>-->
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
							<!--<div class="main-right-3">蜂鸟专送</div>-->
						<!--</div>-->
					<!--</a>-->
				<!--</li>-->
			</ul>
			<div class="scrollDown" style=" text-align: center;display: none">
				<i class="iconfont icon-load"></i>
				<span style="font-size: 0.2rem;color: #333;">正在加载。。。</span>
			</div>
		</div>
	</div>
<div class="loadBox">
	<div class="loadimg">
	</div>
</div>
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
cate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll-probe.js"><?php echo '</script'; ?>
>
</html>
<?php }
}