let {$,upload,layer,table} = layui;

//执行渲染
table.render({
    elem: '#demo' //指定原始表格元素选择器（推荐id选择器）
    // ,height: 315 //表格高度
    ,cols: [[

        // 返回的数据
        {field: 'gid', title: 'gid'}
        ,{field: 'title', title: '商品分类名称',sort:true ,edit:'text'}
        ,{field: 'sname', title: '所属店铺',edit:'text'}//d整条数据
        // ,{fixed: 'right', title:'操作', toolbar: '#barDemo',edit:'text'}
    ]] ,//设置表头 必须是二维数组
    url:'/sdk/index.php/managetype/query1'//请求数据的接口
    // ,page: true//开启分页
    ,page:{
        prev:'&lsaquo;&lsaquo;',
        next:'&rsaquo;&rsaquo;'
    }
    ,limit:2
    ,autoSort:false
    ,loading:true
    ,toolbar: '#toolbarDemo'//上面的工具栏
    ,id:'testReload'

});

//监听单元格编辑
table.on('edit(test)', function(obj){ //注：edit是固定事件名，test是table原始容器的属性 lay-filter="对应的值"
   let index= layer.load(2);
    let fd=new FormData();
   let gid=obj.data.gid;
   let value=obj.value;//得到修改后的值
   let title =obj.field; //当前编辑的字段名
   // let data=obj.data; //所在行的所有相关数据

    fd.append('gid',gid);
    fd.append('title',title);
    fd.append('value',value);
    $.ajax({
        url:'/sdk/index.php/managetype/update',
        data:fd,
        type:'post',
        dataType:'json',
        contentType:false,
        processData:false,
        success:function (res) {
            layer.close(index);

        }
    });
    return false;
});

// 头部工具栏事件
table.on('toolbar(test)', function(obj){
    // obj中是当前表格的配置项，事件类型
    let checkStatus = table.checkStatus(obj.config.id);
    if(obj.event == 'deles'){
        let data=checkStatus.data;
        let arr=data.map(ele=>ele.sid);
        console.log(arr);
        $.ajax({
            url:'/sdk/index.php/managetype/deletes',
            data:{sid:arr.join(',')},
            dataType:'json',
            success:function (res) {
                // location.href= '/sdk/index.php/manageshop/query';
                if (res.code == 0) {
                    table.reload('testReload', {
                        page: {
                            curr: 1 //重新从第 1 页开始
                        }
                    });
                }else{
                    alert('失败');
                }
            }
        })

    }
    // switch(obj.event){
    //     case 'getCheckData':
    //         let data = checkStatus.data;
    //         layer.alert(JSON.stringify(data));
    //         break;
    //     case 'getCheckLength':
    //         let  data = checkStatus.data;
    //         layer.msg('选中了：'+ data.length + ' 个');
    //         break;
    //     case 'isAll':
    //         layer.msg(checkStatus.isAll ? '全选': '未全选');
    //         break;
    // case 'deles':
    //         layer.msg(checkStatus.deles ? '全选': '未全选');
    //         break;
    // };
});

//监听行工具事件
table.on('tool(test)', function(obj){
    // 当前一行所对应的数据
    let data = obj.data;
    //console.log(obj)
    // 用来删除
    if(obj.event === 'del'){
        //confirm有确定和取消按钮，alert只有确定按钮
        layer.confirm('真的删除行么', function(index){
            $.ajax({
                url:'/sdk/index.php/managetype/delete',
                data:{sid:data.sid},

                dataType:'json',
                success:function (res) {
                    console.log(res);
                    layer.close(index);
                    obj.del();

                }
            })
        });
        // 用来编辑更改
    } else if(obj.event === 'edit'){
        location.href='/sdk/index.php/managetype/edit?sid='+data.sid;
    }
});
$('.demoTable .layui-btn').on('click', function(){
    let type = $(this).data('type');
    active[type] ? active[type].call(this) : '';
});

let  active = {
    reload: function(){
        let id = $('#demoReload').val();
        // let  id=$('#id').val();
        let  title=$('#title').val();
        let  pid=$('#pid').val();
        //执行重载
        table.reload('testReload', {
            page: {
                curr: 1 //重新从第 1 页开始
            }
            ,where: {//where还额外的参数
                title: title,
                sid:id,
                pid:pid

            }
        });
    }
};
table.on('sort(test)', function(obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter="对应的值"
    console.log(obj.field); //当前排序的字段名
    console.log(obj.type); //当前排序类型：desc（降序）、asc（升序）、null（空对象，默认排序）


    //尽管我们的 table 自带排序功能，但并没有请求服务端。
    //有些时候，你可能需要根据当前排序的字段，重新向服务端发送请求，从而实现服务端排序，如：
    table.reload('testReload', {
        initSort: obj //记录初始排序，如果不设的话，将无法标记表头的排序状态。
        ,
        page: {
            curr: 1 //重新从第 1 页开始
        }
        ,where: { //请求参数（注意：这里面的参数可任意定义，并非下面固定的格式）
            field: obj.field //排序字段
            , order: obj.type //排序方式
        }
    });
});


