$(function () {
    $.ajax({
        url:'/sdk/index.php/index/index',
        dataType:'json',
        type:'post',
        success:function (res) {
            renderlist(res);
        }
    });
    let li=$('.main-1');
       function renderlist(arr) {

        let  html='';
        for(let i=0;i<arr.length;i++) {
            html += `
    <li class="main-1-1" sid="">
        <a href="/sdk/index.php/dpxq?id=${arr[i]['sid']}">
    				<div class="main-img">
    					<img src="${arr[i]['sthumb']}" alt="" />
    				</div>
    				<div class="main-text">
    					<h2>${arr[i]['sname']}</h2>
    					<div class="star">
    						<div class="stargrgy">
    							<img src="/sdk/static/images/stargrgy.png"/>
    						</div>
    						<div class="star5" style="width: 80%;">
    							<img src="/sdk/static/images/star.png"/>
    						</div>
    					</div>
    					<div class="text-1">
    						<span>${arr[i]['notice']}</span>
    						<span>${arr[i]['fee']}</span>
    					</div>
    					<div class="text-2">
    						<i class="iconfont icon-drink"></i>
    						<span>${arr[i]['score']}</span>
    					</div>
    					<div class="text-3">
    						<span>首单减5</span>
    					</div>
    				</div>
    				<div class="main-right">
    					<div class="main-right-1">
    						<i class="iconfont icon-gengduo"></i>
    					</div>
    					<div class="main-right-2">
    						<span>30分钟</span>
    						<span>909M</span>
    					</div>
    					<div class="main-right-3">美团专送</div>
    				</div>
    			</a>
</li>`;

        } li.html(html);
    }

});
