$(function () {
    let oid=location.search.split('=')[1];
    let a=$('.footer-right>a');
    let total=0;
    $.ajax({
        url:'/sdk/index.php/dpxq/orderdetail',
        dataType:'json',
        type:'post',
        data:{oid},
        success:function (res) {
            // console.log(res);
            //调用方方法
            total=res.goods[0]['total'];
            rendergoods(res.result);
            setorders(res.goods);
            setshopname(res.shopname);
            setfeet(res.goods);
            a.attr('href','/sdk/index.php/dpxq/pay?oid='+oid+'&total='+total);
        }
    })
    
    function rendergoods(arr) {
     let tab=$('.tab');
        let html='';
        for(let i=0;i<arr.length;i++) {
            html += `
        <li class="ll">
            <div class="imgthumb">
				<img src="${arr[i]['thumb']}"/>
			</div>
			<div class="xdxq-1-text1">
				<h3>${arr[i]['title']}</h3>
				<p>${arr[i]['des']}</p>
			</div>
			<div class="xdxq-1-text2">
				<span>*${arr[i]['numbers']}</span>
				<span>￥${arr[i]['price']}</span>
			</div>
		</li>
        `;
        }
        tab.after(html);
    }
    function setshopname(arr) {
        let right=$('.tab');
        // console.log(right);
        right.text(arr);
    }
    function setorders(arr) {
        let forth=$('.forth');
        let html='';
        html+=  `
            <li >
				<span>小计</span>
				<span>￥${arr[0]['total']}</span>
			</li>`;
        forth.after(html);
    }
    function setfeet(arr) {
      let left=  $('.footer-left');
      left.text('￥'+arr[0]['total'])
    }
});
