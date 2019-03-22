$(function () {
    $.ajax({
        url:'/sdk/index.php/dpxq/wodeorder',
        dataType:'json',
        type:'post',
        success:function (res) {
            // console.log(res);

            if(res.code==1){
                location.href="/sdk/index.php/my?redirect=/index";
            }

            renderwodetitle(res)
            renderwodeorder(res);

        }
    });

    let wode=$('.info');
    function renderwodeorder(arr) {
        let html='';
        html=`
				<div class="name">${arr[0]['nickname']}</div>
				<div class="vip">
					<span>VIP</span>
					<div class="star">
					   <img src="/sdk/static/images/vipstar.png">
					</div>
				</div>
				<div class="number">${arr[0]['phone']}</div>
			`;
        wode.html(html);
    }


    let image=$('.imgthumb>img');
    function renderwodetitle(arr) {
        image.attr('src',`${arr[0]['thumb']}`);
    }
});
