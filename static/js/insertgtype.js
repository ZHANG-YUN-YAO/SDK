//获取到layui中的模块
let {upload} = layui;

let arr=[];

//提交表单
form.on('submit(submit1)',function (data) {
    //获取表单中所有数据
    // html中隐藏域也要传给name
    // let qs=data.field;

    // let gs= $("form").serialize();
    let fd=new FormData($('form')[0]);
    $.ajax({
        type:'post',
        url:"/sdk/index.php/managetype/insert1",
        data: fd,
    contentType:false,
        processData:false,
        dataType:'json',
        success:function(res) {

            if(res.code==0){
                layer.open({
                    title:res.msg,
                    type:1,
                    icon:1
                })
                location.href='/sdk/index.php/managetype';
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
