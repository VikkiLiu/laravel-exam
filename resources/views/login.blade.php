<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>登录</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{asset('layuione/layui/css/layui.css')}}" tppabs="{{asset('layuione/layui/css/layui.css')}}"  media="all">
</head>
<body bgcolor="#cdffea">

<div class="" style="padding: 30px;height: 900px">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md6">
            <div class="layui-card"
                 style="height: 300px;
           width:600px ;
           margin-left: 600px;
           margin-top: 250px">
                <div class="layui-card-header" style="font-size: 20px;padding-left: 250px">考试系统</div>
                <div style="padding-left: 80px">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul style="color: red">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                </div>
{{--                @if(count($errors)>0)--}}
{{--                    <div class="alert alert-danger">--}}
{{--                        <ul>--}}
{{--                            @if(is_object($errors))--}}
{{--                                @foreach($errors->all() as $errors)--}}
{{--                                <li>{{$error}}</li>--}}
{{--                                @endforeach--}}
{{--                            @else--}}
{{--                                <li>{{$error}}}</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                @endif--}}




                <div class="layui-card-body">
                    <form class="layui-form"
                          action="{{url('login/dologin')}}"
                          method="post"
                          lay-filter="example">
                          {{csrf_field()}}
                        <div class="layui-form-item" style="width: 500px">
                            <label class="layui-form-label">账号</label>
                            <div class="layui-input-block">
                                <input type="text"
                                       name="username"
                                       lay-verify="required"
                                       autocomplete="off"
                                       placeholder="请输入账号"
                                       class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item" style="width: 500px">
                            <label class="layui-form-label">密码</label>
                            <div class="layui-input-block">
                                <input type="password"
                                       name="password"
                                       placeholder="请输入密码"
                                       autocomplete="off"
                                       class="layui-input"
                                       lay-verify="required">
                            </div>
                        </div>
                        <div class="layui-form-item" style="width: 200px">
                            <label class="layui-form-label">身份选择</label>
                            <div class="layui-input-block">
                                <select name="type" lay-filter="aihao" class="layui-input">
                                    <option value=""></option>
                                    <option value="0">学生</option>
                                    <option value="1">教师</option>
                                    <option value="2">管理员</option>
                                </select>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button type="submit" class="layui-btn" lay-submit="" lay-filter="demo1
                                {{Request::getPathInfo() == '/login'? 'active' : ''}}">
                                    <a href="{{url('login')}}">登录</a>
                                </button>
                                <button type="reset" class="layui-btn layui-btn-primary
                                {{Request::getPathInfo() == 'register/create'? 'active' : ''}}">
                                    <a href="{{url('/register')}}">学生注册</a>
                                </button>
                                <button type="reset" class="layui-btn layui-btn-primary
                                {{Request::getPathInfo() == 'registerjs/createjs'? 'active' : ''}}">
                                    <a href="{{url('/registerjs')}}">教师注册</a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="{{asset('layuione/layui/layui.js')}}" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述 JS 路径需要改成你本地的 -->
<script>

</script>


</body>
</html>