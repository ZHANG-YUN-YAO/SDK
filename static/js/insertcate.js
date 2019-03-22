//获取到layui中的模块
let {upload} = layui;
//获取页面中的隐藏域对象
let thumb = $("input:hidden:first");
console.log(thumb);
let thumbimg=$("#thumb");
let imgbox=$(".imgbox");
//上传文件
upload.render({
    // 上传按钮的id
    elem: '#test1' //选择器
    ,acceptMime: 'image/jpg, image/png, image/webp,image/jpeg'
    ,exts:'jpg|png|gif|webp|jpeg'
    //上传接口
    ,url: '/sdk/index.php/upload/init'
    // 成功后的回调函数（res存储成功之后的数据）
    // ,done: function(res,index,upload){
    ,done: function(res){
        // console.log(res);

        let html=`
        <img src="${res.msg}" name="thumb" id="thumb" alt="" width="100px" height="100px" >        
                        <div class="mask"></div>
                        <div class="button">
                            <i class="layui-icon layui-icon-search"></i>
                            <i class="layui-icon layui-icon-delete"></i>
                        </div>`;
        thumb.val(res.msg);
        // thumbimg.attr('src',res.msg)
        //上传完毕回调
        $('<li>').html(html).appendTo(imgbox);
    }
})

imgbox.on('click','.layui-icon-delete',function () {
    $(this).closest('li').remove();
    thumb.val('');
    // console.log(data);


})
//提交表单
form.on('submit(submit1)',function (data) {
    //获取表单中所有数据
    // html中隐藏域也要传给name
    // let qs=data.field;

    if(!data.field.thumb){
        layer.alert("请上传图片")
        return false;
    }
    let gs= $("form").serialize();


    $.ajax({
        url:"/sdk/index.php/managecate/insert1",
        data: gs,
        dataType:'json',
        success:function(res) {
            // {code:'0',msg:'插入成功'}； {code:'1',msg:'插入失败'}
            console.log(1);
            if(res.code==0){
                layer.open({
                    title:res.msg,
                    type:1,
                    icon:1
                })
                location.href='/sdk/index.php/managecate';
            }else{
                layer.open({
                    title:res.msg,
                    type:1,
                    icon:2
                })
            }
        }
    });
    //防止表单跳转,阻止默认行为
    return false;
})
