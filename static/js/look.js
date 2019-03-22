$(function () {

    $.ajax({
        url:'/sdk/index.php/dpxq/lookorder',
        dataType:'json',
        type:'post',
        success:function (res3) {
            console.log(res3);

            if(res3.code==1){
                location.href="/sdk/index.php/my?redirect=/index";
            }

            renderorder(res3);
        }
    });

    function renderorder(arr){

        let ul=$('.main>ul');
        // console.log(ul);
        let html='';
        arr.forEach(ele=>{
             html+=`
            <li class="main-1-1">
    			<a href="/sdk/index.php/dpxq/orderdetails?oid=${ele.orders['oid']}">
    				<div class="main-img">
    					<img src="${ele.shop['sthumb']}" alt="" />
    				</div>
    				<div class="main-text">
    					<h2>${ele.shop['sname']}</h2>
    					<div class="star">
    						<div class="stargrgy">
    							<img src="/sdk/static/images/stargrgy.png"/>
    						</div>
    						<div class="star5" style="width: 80%;">
    							<img src="/sdk/static/images/star.png"/>
    						</div>
    					</div>
    					<div class="text-2">
    						<i class="iconfont icon-shijian"></i>
    						<span>${ele.orders['ctime']}</span>
    					</div>
    					<div class="text-3">
    						<button >再来一单</button>
    						<button>立即评价</button>
    					</div>
    				</div>
    				<div class="main-right">
    					<div class="main-right-1">订单已送达</div>
    					<div class="main-right-2">￥${ele.orders['discount']}</div>
    				</div>
    			</a>
    		</li>`
        });
        console.log(html);
        ul.html(html);
    }
});