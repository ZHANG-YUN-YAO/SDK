$(function () {
    let lcoid=location.search.split('&');
    let oid=lcoid[0].split('=')[1];
   let total= lcoid[1].split('=')[1];

    // console.log(oid,total);
    $.ajax({
        url:'/sdk/index.php/dpxq/payok',
        dataType:'json',
        type:'post',
        data:{oid},
        success:function (res2) {
            // console.log(res2);
            renderpay(res2.goods)
        }
    })
    let afford=$('.afford');
    // console.log(afford);
    function renderpay(arr) {
        afford.text(arr[0]['total']);

    }
});