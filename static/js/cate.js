$(function () {
    let cid=0;
    let mains=$('.main-1');
    let lists=$('.header-bottom-1>li');
    let orderlist=$('.pxfs>ul>li');
    let pages=1;
    let iscroll = new IScroll('.main',{
        probeType:3,//滚动的位置
        click:true,
        scrollbars:true,//滚动条
        fadeScrollbars:true
    });
    let order;
    let flag=false;//放手时是否加载的标识
    let flag1=false;// 加载完成的标识
    /*
    * 下拉距离
    *
    * */
    iscroll.on('scroll',function () {
        let scrollUp=$('.scrollUp');
        let scrollDown=$('.scrollDown');
        //滚动条在纵向的距离this.y
        if(this.y>60){
            scrollUp.css("display","block");
            flag=true;
            return ;
        }
        if(this.y>=0 && this.y<60){
            scrollUp.css("display","none");
            return ;
        }

    });
    iscroll.on('scrollEnd',function () {
        if(flag && flag1) {
            // load.css('display','flex')
            getData();
        }

    })

    lists.on('click',function () {
        cid=$(this).attr('cid');//category表cid
        page=0;
        pages=1;
        order='sid';
        mains.empty();
        getData();
    });

    //打开时就触发,先加载一瓶（点击全部）
    lists.triggerHandler('click');

    //排序
    orderlist.on('click',function () {
        page=0;
        pages=1;
        order=$(this).attr('type');
        mains.empty();
        orderlist.removeClass('hot').filter(this).addClass('hot');
        getData();
    });
    //获取数据
    function getData() {
        page++;
       if(page>pages){
          alert('没有更多数据');
          return;
       }
        flag = false;
        flag1 = false;
        let id=location.search.split("=")[1];//获取地址栏中的id
             $.ajax({
            url: '/sdk/index.php/food/lists',
            data:{
                page:page,
                cid:cid,//（category的id,shop里的cid）美食下的
                limit:5,
                order:order,
                id:id  //美食的id
            },
            dataType: 'json',
            success: function (res) {
                pages=res.pages;
                render(res.res);
            }
        })

    function render(data) { z

        flag1=true;
        let html='';
        data.forEach(ele=>{
            html +=  `
                    <li class="main-1-1">
					<a href="/sdk/index.php/dpxq?id=${ele.sid}">
						<div class="main-img">
							<img src="/sdk/static/images/sj4.png" alt="" />
						</div>
						<div class="main-text">
							<h2>${ele.sname}</h2>
							<div class="star">
								<div class="stargrgy">
									<img src="/sdk/static/images/stargrgy.png"/>
								</div>
								<div class="star5" style="width: 80%;">
									<img src="/sdk/static/images/star.png"/>
								</div>
							</div>
							<div class="text-1">
								<span>${ele.fee}</span>
								<span>${ele.score}</span>
							</div>
							<div class="text-2">
								<i class="iconfont icon-drink"></i>
								<span>${ele.sale}</span>
							</div>
							<div class="text-3">
								<span>${ele.notice}</span>
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
							<div class="main-right-3">蜂鸟专送</div>
						</div>
					</a>
				</li>`;
        })
        mains.html(function(index,value) {
            return html+value;
        })
        iscroll.refresh(); // 页面结构发生改变时
         }
    }
});
