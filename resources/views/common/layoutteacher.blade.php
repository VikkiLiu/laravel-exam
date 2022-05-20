<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Student</title>
    <link rel="stylesheet" href="{{asset('layuione/layui/css/layui.css')}}">
</head>
<body>
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo layui-hide-xs layui-bg-black">Teacher</div>
        <div><img src="/images/ks.jpg" height="50" width="100"></div>
        <!-- 头部区域（可配合layui 已有的水平导航） -->
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item layui-hide layui-show-md-inline-block">
                <a href="javascript:;">
                    <img src="//tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" class="layui-nav-img">
                    {{$teacher1}}
                </a>
                <dl class="layui-nav-child">
{{--                    <dd><a href="">个人信息</a></dd>--}}
{{--                    <dd><a href="">设置</a></dd>--}}
                    <dd><a href="{{url('login/logout')}}">退出登录</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item" lay-header-event="menuRight" lay-unselect>
                <a href="javascript:;">
                    <i class="layui-icon layui-icon-more-vertical"></i>
                </a>
            </li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree" lay-filter="test" >
                <li class="layui-nav-item ">
                    <a class="{{Request::getPathInfo() == '/teacher/zhuye'? 'active' : ''}}"
                       href="{{url('teacher/zhuye')}}">主页
                    </a>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">题库</a>
                    <dl class="layui-nav-child">
                        <dd><a class="{{Request::getPathInfo() == '/teacher/sjgl'? 'active' : ''}}"
                               href="{{url('teacher/sjgl')}}">试卷管理</a></dd>
                        <dd><a class="{{Request::getPathInfo() == '/teacher/stgl'? 'active' : ''}}"
                               href="{{url('teacher/stgl')}}">试题管理</a></dd>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">考试</a>
                    <dl class="layui-nav-child">
                        <dd><a class="{{Request::getPathInfo() == '/teacher/cjsj'? 'active' : ''}}"
                               href="{{url('teacher/cjsj')}}">成绩数据</a></dd>
                        <dd><a class="{{Request::getPathInfo() == '/teacher/ksgl'? 'active' : ''}}"
                               href="{{url('teacher/ksgl')}}">考试管理</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

    @yield('content')


    <script src="{{asset('layuione/layui/layui.js')}}"></script>
    <script>
        //JS
        layui.use(['element', 'layer', 'util'], function(){
            var element = layui.element
                ,layer = layui.layer
                ,util = layui.util
                ,$ = layui.$;

            //头部事件
            util.event('lay-header-event', {
                //左侧菜单事件
                menuLeft: function(othis){
                    layer.msg('展开左侧菜单的操作', {icon: 0});
                }
                ,menuRight: function(){
                    layer.open({
                        type: 1
                        ,content: '<div style="padding: 15px;">处理右侧面板的操作</div>'
                        ,area: ['260px', '100%']
                        ,offset: 'rt' //右上角
                        ,anim: 5
                        ,shadeClose: true
                    });
                }
            });

        });
        //考试时间选择器js
        layui.use('laydate', function(){
            var laydate = layui.laydate;
            //日期时间选择器
            laydate.render({
                elem: '#test5'
                ,type: 'datetime'
            });
            //直接嵌套显示
            laydate.render({
                elem: '#test-n1'
                ,position: 'static'
            });
            laydate.render({
                elem: '#test-n2'
                ,position: 'static'
                ,lang: 'en'
            });
            laydate.render({
                elem: '#test-n3'
                ,type: 'month'
                ,position: 'static'
            });
            laydate.render({
                elem: '#test-n4'
                ,type: 'time'
                ,position: 'static'
            });
        });
    </script>
</body>
</html>
