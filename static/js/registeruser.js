$(function () {
    /*  let submit=$('#submit');
     submit.on('click',function (e) {
     e.preventDefault();
     let form=$('form[id=myform]');
     let fd =new FormData(form[0]);

     $.ajax({
     url:'/sdk/index.php/my/registercheck',
     type:'post',
     data:fd,
     dataType:'json',
     processData:false,
     contentType:false,
     success:function (res) {
     // console.log(res);
     if (res.code == 0) {
     alert('注册成功')

     } else if (res.code == 1) {
     alert('注册失败')
     }
     }
     })
     })*/
    $.validator.addMethod('password',function (value,element) {
        return  this.optional(element) || /^[a-z0-9A-Z]{5,8}$/.test(value);
    },'hello');

    $('#myform').validate({
        rules: {
            phone: {
                required: true,
                minlength: 5,
                //异步验证 返回的是true和false
                remote: {
                    url: '/sdk/index.php/my/checkusername',
                    type: 'post',
                    data: {
                        phone: function () {
                            return $("#phone").val();
                        }
                    }
                }
            },
            password: {
                required: true,
                minlength: 5
            },
            password1: {
                required: true,
                minlength: 5,
                equalTo: '#password'
            },

        },
        messages: {
            phone: {
                required: "手机号必填",
                minlength: '最少5位',
                //异步验证
                remote:'手机号已注册'
            },
            password: {
                required: '密码必填',
                minlength: '最少5位'
            },
            password1: {
                required: '密码必填',
                equalTo: '两次密码保持一致'
            },

        },

        //验证通过自动触发，就不用再写点击事件
        submitHandler:function(){
            let form = $('form[id=myform]');
            let fd = new FormData(form[0]);

            $.ajax({
                url: '/sdk/index.php/my/registercheck',
                type: 'post',
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (res) {
                    // console.log(res);
                    if (res.code == 0) {
                        alert('注册成功')

                    } else if (res.code == 1) {
                        alert('注册失败')
                    }
                }
            });

        }
    });
})

