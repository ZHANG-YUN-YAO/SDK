let {$,upload,form,layer,table} = layui;

//执行渲染
table.render({
    elem: '#demo' //指定原始表格元素选择器（推荐id选择器）
    // ,height: 315 //表格高度
    ,cols: [[
        {type: 'checkbox', fixed: 'left'},//多加上最左边的一列 并且位置固定到最左边
        // 返回的数据
        {field: 'id', title: 'CID', width: 80}
        ,{field: 'title', title: '栏目名称', width: 120}
        ,{field: 'thumb', title: '缩略图', width: 120,templet:'<div><img src="{{d.thumb}}"></div>'}
        ,{field: 'pid', title: 'PID', width: 120}
        ,{fixed: 'right', title:'操作', toolbar: '#barDemo', width:150}
    ]] ,//设置表头 必须是二维数组
    url:'/sdk/index.php/managecate/query'//请求数据的接口
    // ,page: true//开启分页
    ,page:{
        prev:'&lsaquo;&lsaquo;',
        next:'&rsaquo;&rsaquo;'
    }
    ,limit:2
    ,loading:true
    ,toolbar: '#toolbarDemo'//上面的工具栏
    ,id:'testReload'
});


// 头部工具栏事件
table.on('toolbar(test)', function(obj){
    // obj中是当前表格的配置项，事件类型
    // console.log(obj);
    var checkStatus = table.checkStatus(obj.config.id);
    switch(obj.event){
        case 'getCheckData':
            var data = checkStatus.data;
            layer.alert(JSON.stringify(data));
            break;
        case 'getCheckLength':
            var data = checkStatus.data;
            layer.msg('选中了：'+ data.length + ' 个');
            break;
        case 'isAll':
            layer.msg(checkStatus.isAll ? '全选': '未全选');
            break;
    };
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
                url:'/sdk/index.php/managecate/delete',
                data:{id:data.id},

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
        location.href='/sdk/index.php/managecate/edit?id='+data.id;

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
                id:id,
                pid:pid

            }
        });
    }
};


