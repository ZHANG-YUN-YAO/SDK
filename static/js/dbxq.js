//获取两边scroll，click，true，probeType3
let right2=$('.nav-right>ul');
let menu=$('.nav-left>ul');
let list=null;
let right=null;
let arr=[];
let left2=$('.nav-left');

// 发请求拿回数据
// 定义一个方法  计算每层高度calcheight
// 高度默认值0，将高度放进一个数组arr，遍历数组，
function calcheight() {
    list=$('.nav-right>ul>li');
    let height1=0;
    arr.push(height1);
    for(let i=0;i<list.length;i++){
        height1+=list[i].offsetHeight;
        arr.push(height1);
    }
}


// 发一个ajax
$.ajax({
    url:'/sdk/index.php/dpxq/detail',
    dataType:'json',
    data:{sid:location.search.split('=')[1] },
    success:function (res){
        let titles=res.map(ele=>ele.title);
        renderTitle(titles);//渲染左边标题
        renderLists(res);//渲染右边列
        initscroll();//初始化
        calcheight();//获取右边列表高度
    }
});


// isScrolling到对应的位置  list ul右li
function scroll(y) {
     list=$('.nav-right>ul>li');
        for (let i=0;i<list.length;i++){
            let top=arr[i];
            let bottom=arr[i+1];
            if(!bottom || y>top && y<bottom){
                return i;
            }
        }return 0;
    }


//初始化
function initscroll() {
     right=new IScroll('.nav-right',{click:true,probeType:3});
     left2=new IScroll('.nav-left',{click:true});
    right.on('scroll',function(){
        //abs绝对值
        let scrolly=Math.abs(Math.round(this.y));
        let index =scroll(scrolly);
        $ ('li',menu).removeClass('hot').eq(index).addClass('hot');//滑动列表左li选中状态

    })
}


//渲染标题   arr是点击的店铺的所有title
function renderTitle(arr) {
    let html='';
    menu.empty();
    for (let i = 0; i < arr.length; i++) {
        if (i == 0) {
             html += `
                <li class="hot">
					<a href="javascript:(false)">${arr[i]}</a>
				</li>`;

        } else {
            html += ` <li>
					<a href="javascript:(false)">${arr[i]}</a>
				</li>`;
        }
    }menu.html(html);
}


//渲染右边列表
function renderLists(arr) {
    let html ='';
    right2.empty();
    for(let i=0;i<arr.length;i++){
        html+=  `
                  <li>
					<div class="Rtitle">
						<span>${arr[i]['title']}</span>
					</div>
					<ul class="nav-cd">
						${renderGoods(arr[i]['goods'])}
					</ul>
				</li>`;
    }
   right2.html(html);
}


//渲染商品
function renderGoods(arr) {

    let html = '';
    for (let i = 0; i < arr.length; i++) {
        html += `
				<li id="${arr[i]['id']}" data=${JSON.stringify(arr[i])}>
					<a href="javascript:void (false)">
						<div class="imgthumb">
							<img src="${arr[i]['thumb']}"/>
						</div>
						<div class="info">
						    <div><h3>${arr[i]['title']}</h3></div>
						    <div class="nav-text-1">${arr[i]['des']}</div>
						    <div class="nav-text-2">
						    	<span>销量${arr[i]['discount']}</span>
						    	<span>赞1</span>
						    </div>
						    <div class="jq">￥${arr[i]['price']}</div>
						</div>
						<div class="button">
						    <button class="jian" style="display: none">
							    <img src="/sdk/static/images/jian.png" style="height: 0.36rem ;width: 0.36rem; position: relative">
							</button>							
							<span style="font-size: 0.24rem;display: none" >3</span>							
							<button class="jia" ><i class="iconfont icon--jia"></i></button>
						</div>
					</a>
				</li>
				`;
    }
return html;
}

// 事件委派
  menu.on('click','li',function(){
      let index=$(this).index();//点到左边li的下标
      $('li',menu).removeClass('hot').filter(this).addClass('hot');

      // 点击那个就到那一层
      right .scrollTo(0,-arr[index])//0 是左上角，向上滚动y<0

  });

    let total;
    let count=$('.count');
    let car={
        total:0,
        discount:0,
        numbers:0,
        fee:0,
    goods:[]};

//加
right2.on('click','.jia',function () {

    let id=$(this).closest('li').attr('id');
    let data=car.goods.filter(ele=>ele.id==id);//判断数组李是否有对应的商品
    let info=JSON.parse($(this).closest('li').attr('data'));//转换为字符串的对象在解析为对象

    //判断是否有商品
    if(data.length){
//累加   data是数组
        let numbers=++data[0].numbers;
        $(this).prevAll('span').text(numbers);

    }else {
//添加
        info.numbers = 1;
        car.goods.push(info);
        $(this).prevAll('.jian').css('display','block');
        $(this).prevAll('.button>span').text(1).css('display','block');
    }
    // 调用计算价格和数量的方法
    calcTotal();
    calcNumbers();
    renderCar(car.goods);
    saveCar();
});

//减
right2.on('click','.jian',function () {

    let id=$(this).closest('li').attr('id');  //商品id
    let data=car.goods.filter(ele=>ele.id==id);   //商品详情

    let numbers=--data[0].numbers;
    $(this).nextAll('span').text(numbers);

    if(numbers<=0){
        car.goods=car.goods.filter(ele=>ele.numbers!=0);
        $(this).css('display','none');
        $(this).nextAll('.button>span').text(1).css('display','none');
    }
    //调用俩方法
    calcTotal();
    calcNumbers();
    renderCar(car.goods);
    cancelCar();


});

//计算价格
function calcTotal() {
    let total = 0;
    let discount = 0 ;
    car.goods.forEach(ele=>{
        total+=ele.price * ele.numbers;
    });
    car.total=total.toFixed(2);
    car.total=Math.round(car.total*100)/100;
    car.discount =car.total * 0.9 .toFixed(2);
    car.discount=Math.round(car.discount*100)/100;
    $('.footer-left>.p2').text('总价:￥'+car.total);
    $('.footer-left>.p3').text('折扣价:￥'+car.discount);

if(car.total>=20){
        $('.footer-right').addClass('hot');
    }else{
        $('.footer-right').removeClass('hot');
    }
}

//计算数量
function calcNumbers(){
    let numbers=0;
    car.goods.forEach(ele=>{
        numbers+=ele.numbers;

    });car.numbers=numbers;
    $('.count>p').text(car.numbers);
    if(car.numbers){
        $('.count').css('display','block');
        $('.gwc').addClass('hot');
    }else{
        $('.count').css('display','none');
        $('.gwc').removeClass('hot');
    }
}

// 点击结算
$('.footer-bottom').on('click','.footer-right.hot',function () {
  $.ajax({
      url:"/sdk/index.php/dpxq/car",
      data:car,
      dataType:'json',
      type:'post',
      success:function (res) {
          if(res.code==1){
              location.href="/sdk/index.php/my?redirect=/dpxq?id="+location.search.split('=')[1];
          }
          else if(res.code==2){
              alert('请重新下单');
              location.href="/sdk/index.php/my?redirect=/dpxq?id="+location.search.split('=')[1];
          }
          else if(res.code==0){
              location.href="/sdk/index.php/dpxq/orderconfirm?oid="+res.oid;

          }
      }
  })
});


//点击购物车
$('.cartview-cartbodyOpen_b6tnR').css('top',0);
let flag=true;
$('.footer-bottom').on('click','.gwc.hot',function () {
    if(flag==true){
        $('.cartview-cartmask_3rV-M').css('display','block');
        $('.cartview-cartbody_15r9z>div').css('opacity','1');
        let height=$('.cartview-cartbody_15r9z>div').outerHeight()*(-1);
        $('.cartview-cartbodyOpen_b6tnR').css('transform',  `translateY(${height}px`)
    }else{
        $('.cartview-cartmask_3rV-M').css('display','none');
        $('.cartview-cartbody_15r9z>div').css('opacity','0');
        $('.cartview-cartbody_15r9z').css('transform',  `translateY(0)`)
    }
    flag=!flag;
});


// 渲染购物车
function renderCar(arr) {
    let html='';
    arr.forEach(ele=>{
        html+=  `
              
                    <li class="entityList-entityrow_3f6oE_0" style="display: flex;
    justify-content: space-between" my="${ele.id}" >
                        <span class="entityList-entityname_3EB7j_0">
                            <em class="entityList-name_3WPWD_0">${ele.title}</em>         &nbsp;
                            
                            <span class="entityList-entitytotalDiscount_2OrZA_0">￥${ele.price}</span>
                        </span>
                          <div class="button" style="display: inline-flex;justify-content: space-around">
						    <button class="jian" style="display: inline-block">
							    <img src="/sdk/static/images/jian.png" style="height: 0.36rem ;width: 0.36rem; position: relative">
							</button>							
							<span style="font-size: 0.24rem;" >${ele.numbers}</span>											<button class="jia" ><i class="iconfont icon--jia"></i></button>
					      </div>
                    </li> `;

    })

    $('.entityList-cartbodyScroller_GxeX__0>ul').html(html);
}

//点击车里的加号
$('.entityList-cartlist_-pDz7_0').on('click','.jia',function () {
    let mt=$(this).closest('li').attr('my');
   $('#' + mt).find('.icon--jia').trigger('click');//调用商品加号的方法

});
//点击车里减号
$('.entityList-cartlist_-pDz7_0').on('click','.jian',function () {
    let mt=$(this).closest('li').attr('my');
    $('#' + mt).find('.jian').trigger('click');
});

//点击清空
$('.cartview-cartheader_342ET').on('click',function () {
    flag=true;
    $('.cartview-cartbody_15r9z').css('transform',  `translateY(0)`);
    $('.cartview-cartbody_15r9z').on('webkitTransformEnd',function () {
        $(this).off(webkitTransformEnd);
    });
    clearCar(); //调用能删除数据方法
});

function clearCar() {
    car.goods=[];
    $('.count').empty();
    $('.count').css('background-color','');
    $('.footer-left>.p2').css('display','none');
    $('.footer-left>.p3').css('display','none');
    $('.footer-right.hot').removeClass('hot');
    $('.button>.jian').css('display','none');
    $('.button>span').css('display','none');
    $('.cartview-cartmask_3rV-M').css('display','none');
    $().css('display','none');
    $('.gwc.hot').removeClass('hot');
    $('.entityList-entityrow_3f6oE_0').empty();
}

//保存到本地
function saveCar(){
    localStorage.car=JSON.stringify(car);
}

//删除本地数据
function cancelCar() {
    localStorage.removeItem('car');
        let car=
        `={
        total:0,
        discount:0,
        numbers:0,
        fee:0,
        goods:[]
        }`;
}
