//
// let form=layui.form;
// let $=layui.$;
// let layer=layui.layer;
let {form,$,layer}=layui;
form.verify({
    username: function(value, item){ //value：表单的值、item：表单的DOM对象
        if(!/("^[a-z]{3,10}")/.test(value)){
            return '请输入3-10个小写字母';
        }
    }
    ,pass: [
        /^[\S]{4,12}$/
        ,'密码必须6到12位，且不能出现空格'
    ]
});

// window.jquery=jquery=$   三个是一样的
form.on('submit(formDemo)', function(data){
    // console.log(data);
    let aaa=$("form").serialize();
    $.ajax({
       url:'/sdk/index.php/adminlogin/check',
        // 拿到表单数据
        data:aaa,
        //格式化表单
        success: function(res) {
           if(res=='ok'){
               layer.open({
                   type: 1
                   ,title: '登陆成功' //不显示标题栏
                   // ,closeBtn: false

                       });
                                          //跳转到
               location.href='/sdk/index.php/managecate/init';
           }else{
               layer.open({
                   type: 0
                   , title: '登陆失败'
                   // ,content:
               })

           }
           // console.log( res)
        }

    });
    return false;

});