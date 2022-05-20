<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>注册</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{asset('layuione/layui/css/layui.css')}}"
          tppabs="{{asset('layuione/layui/css/layui.css')}}"  media="all">
</head>
<body bgcolor="#cdffea">

<div class="" style="padding: 30px;height: 900px" >
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md6">
            <div class="layui-card"
                 style="height: 350px;
           width:600px ;
           margin-left: 600px;
           margin-top: 250px">
                <div class="layui-card-header" style="font-size: 20px;padding-left: 250px">学生注册</div>
                <div class="layui-card-body">
                    <form class="layui-form"  method="post" action="{{url('register/create')}}" lay-filter="example">
                        <div class="layui-form-item" style="width: 500px">
                            <label class="layui-form-label">账号</label>
                            <div class="layui-input-block">
                                <input type="text" name="student[suser]" lay-verify="title" autocomplete="off" placeholder="请输入账号" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item" style="width: 500px">
                            <label class="layui-form-label">密码</label>
                            <div class="layui-input-block">
                                <input type="password" name="student[spassword]" placeholder="请输入密码" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item" style="width: 500px">
                            <label class="layui-form-label">真实姓名</label>
                            <div class="layui-input-block">
                                <input type="text" name="student[sname]" lay-verify="title" autocomplete="off" placeholder="请输入账号" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">性别</label>
                            <div class="layui-input-block" >
                                <input type="radio" name="student[ssex]" value="男" title="男" checked="" >
                                <input type="radio" name="student[ssex]" value="女" title="女">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button type="submit" class="layui-btn" lay-submit="" lay-filter="demo1">
                                    注册
                                </button>
                                <button type="reset" class="layui-btn layui-btn-primary
                                {{Request::getPathInfo() == '/login'? 'active' : ''}}">
                                    <a href="{{url('login')}}">返回</a>
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
