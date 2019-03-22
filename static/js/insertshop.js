//获取到layui中的模块
let {upload} = layui;

let arr=[];

//获取页面中的隐藏域对象
let thumb = $("input:hidden:first");
let view = $("input:hidden:eq(1)");
let thumbimg=$("#thumb");
let thumbimg2=$("#view");
let imgbox=$(".imgbox");
let imgbox2=$(".imgbox2");
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
        let lis=$('.imgbox>li');//lis返回的是对象，对象永远是真的，不能作为判断条件
        if(lis.length){
            // 替换
            $('img',lis).attr('src',res.msg);
            thumb.val(res.msg);

        }else {
            //插入
            let html = `
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
    }
})
upload.render({
    // 上传按钮的id
    elem: '#test2' //选择器
    ,acceptMime: 'image/jpg, image/png, image/webp'
    ,exts:'jpg|png|gif|webp'
    ,multiple:true//多图上传
    //上传接口
    ,url: '/sdk/index.php/upload/init'
    // 成功后的回调函数（res存储成功之后的数据）
    // ,done: function(res,index,upload){
    ,done: function(res){
        // console.log(res);



            let html = `
        <img src="${res.msg}" name="thumb" id="thumb" alt="" width="100px" height="100px" >        
                        <div class="mask"></div>
                        <div class="button">
                            <i class="layui-icon layui-icon-search"></i>
                            <i class="layui-icon layui-icon-delete"></i>
                        </div>`;

            // thumbimg.attr('src',res.msg)
            //上传完毕回调
            let val = view.val();
            // view.val(res.msg);
        //判断原来有没有图片，就不需要去掉逗号了
        if(!val){
            //没有时新加入的图片就是val
            view.val( res.msg );
        }else{
            //val有值时就在原来的图后面叠加
            view.val(val+ ',' + res.msg );
        }
//          将删除后的图片路径放到数组中
            arr.push(res.msg);
            //存下图片路径信息
            $('<li>').html(html).appendTo(imgbox2);
    }
})

imgbox.on('click','.layui-icon-delete',function () {
    $(this).closest('li').remove();
    thumb.val('');
    // console.log(data);

})
imgbox2.on('click','.layui-icon-delete',function () {
    // $(this).closest('li').remove();
    // view.find('img');
    // 获取最近的li
    let lis=$(this).closest('li');
    //点击图片的下标
    let index=lis.index();

    //删除
    lis.remove();
    // 数组中删除点击的数据
    arr.splice(index,1);
   // 将删除后的数组放到li
   view.val(arr);


})
console.log($("form[id=myform]"));
//提交表单
form.on('submit(submit1)',function (data) {
    //获取表单中所有数据
    // html中隐藏域也要传给name
    // let qs=data.field;

    if(!data.field.sthumb){
        layer.alert("请上传缩略图片")
        return false;
    }
    if(!data.field.view){
        layer.alert("请上传实景图片")
        return false;
    }
    let gs= $("form[id=myform]").serialize();
    console.log(1);
    //删掉file属性
    delete data.field.file;


    $.ajax({
        type:'post',
        url:"/sdk/index.php/manageshop/insert1",
        data: gs,
        dataType:'json',
        success:function(res) {
            // {code:'0',msg:'插入成功'}； {code:'1',msg:'插入失败'}

            if(res.code==0){
                layer.open({
                    title:res.msg,
                    type:1,
                    icon:1
                })
                location.href='/sdk/index.php/manageshop';
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
