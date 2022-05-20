<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Student</title>
    <link rel="stylesheet" href="{{asset('layuione/layui/css/layui.css')}}">
</head>
<body>



<div>
    <ul>
        <img src="../exam/images/ks.jpeg" width="100" height="80">
    </ul>
    <ul class="layui-nav" lay-filter="">
        <li class="layui-nav-item">
{{--            {{Request::getPathInfo() == '/students/ggao'? 'active' : ''}}">--}}
            <a href="{{url('login/logout')}}">退出</a>
        </li>
        <li class="layui-nav-item
            {{Request::getPathInfo() == '/students/ggao'? 'active' : ''}}">
            <a href="{{url('students/ggao')}}">公告</a>
        </li>
        <li class="layui-nav-item
            {{Request::getPathInfo() == '/students/ksjm'? 'active' : ''}}">
            <a href="{{url('students/ksjm')}}">考试界面</a>
        </li>
        <li class="layui-nav-item
            {{Request::getPathInfo() == '/students/kclx'? 'active' : ''}}">
            <a href="{{url('students/kclx')}}">课程练习</a>
        </li>
        <li class="layui-nav-item
            {{Request::getPathInfo() == '/students/cjcx'? 'active' : ''}}"
        ><a href="{{url('students/cjcx')}}">成绩查询</a>
        </li>
    </ul>

   @yield('content')
</div>


<script>
    layui.use('table', function(){
        var table = layui.table;

        //第一个实例
        table.render({
            elem: '#demo'
            ,height: 312
            ,url: '/demo/table/user/' //数据接口
            ,page: true //开启分页
            ,cols: [[ //表头
                {field: 'id', title: 'ID', width:400, sort: true, fixed: 'left'}
                ,{field: 'csname', title: '课程名称', width:400}
                ,{field: 'csgrade', title: '成绩', width:400, sort: true}
                ,{field: 'cstime', title: '成绩', width:400, sort: true}
            ]]
        });

    });

</script>
<script src="{{asset('layuione/layui/layui.js')}}"></script>
<script>
    layui.use(['carousel', 'form'], function(){
        var carousel = layui.carousel
            ,form = layui.form;

        //常规轮播
        carousel.render({
            elem: '#test1'
            ,arrow: 'always'
        });

        //改变下时间间隔、动画类型、高度
        carousel.render({
            elem: '#test2'
            ,interval: 1800
            ,anim: 'fade'
            ,height: '120px'
        });

        //设定各种参数
        var ins3 = carousel.render({
            elem: '#test3'
        });
        //图片轮播
        carousel.render({
            elem: '#test10'
            ,width: '1920px'
            ,height: '720px'
            ,interval: 5000
        });

        //事件
        carousel.on('change(test4)', function(res){
            console.log(res)
        });

        var $ = layui.$, active = {
            set: function(othis){
                var THIS = 'layui-bg-normal'
                    ,key = othis.data('key')
                    ,options = {};

                othis.css('background-color', '#5FB878').siblings().removeAttr('style');
                options[key] = othis.data('value');
                ins3.reload(options);
            }
        };

        //监听开关
        form.on('switch(autoplay)', function(){
            ins3.reload({
                autoplay: this.checked
            });
        });

        $('.demoSet').on('keyup', function(){
            var value = this.value
                ,options = {};
            if(!/^\d+$/.test(value)) return;

            options[this.name] = value;
            ins3.reload(options);
        });

        //其它示例
        $('.demoTest .layui-btn').on('click', function(){
            var othis = $(this), type = othis.data('type');
            active[type] ? active[type].call(this, othis) : '';
        });
    });
</script>
</body>
</html>