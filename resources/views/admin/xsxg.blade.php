@extends('common.layoutadmin')

@section('content')

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;
    margin-left: 50px;width:1558px">
            <legend>学生数据</legend>
        </fieldset>

        <form class="layui-form"  method="post" action="">
        <table class="layui-table" lay-size="lg" style="margin: 50px ; width: 1600px">
            <colgroup>
                <col width="150">
                <col width="200">
                <col width="200">
                <col width="200">
                <col width="200">
                <col width="300">
            </colgroup>
            <thead>
            <tr>
                <th>学号</th>
                <th>姓名</th>
                <th>性别</th>
                <th>账号</th>
                <th>密码</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            {{--            @foreach($students as $student)--}}
            <tr>
                <td><input type="text"
                           name="student[sno]"
                           value="{{ old('student')['sno'] ? old('student')['sno'] : $student->sno }}"
                           lay-verify="title"
                           autocomplete="off"
                           placeholder="请输入修改的分数"
                           class="layui-input"
                           style="width: 150px">
                    {{--                    {{$student->sno}}--}}
                </td>
                <td><input type="text"
                           name="student[sname]"
                           value="{{ old('student')['sname'] ? old('student')['sname'] : $student->sname }}"
                           lay-verify="title"
                           autocomplete="off"
                           placeholder="请输入修改的分数"
                           class="layui-input"
                           style="width: 150px"
                    >
                    {{--                    {{$student->sname}}--}}
                </td>
                <td><input type="text"
                           name="student[ssex]"
                           value="{{ old('student')['ssex'] ? old('student')['ssex'] : $student->ssex }}"
                           lay-verify="title"
                           autocomplete="off"
                           placeholder="请输入修改的分数"
                           class="layui-input"
                           style="width: 150px"
                    >
                    {{--                    {{$student->ssex}}--}}
                </td>
                <td><input type="text"
                           name="student[suser]"
                           value="{{ old('student')['suser'] ? old('student')['suser'] : $student->suser }}"
                           lay-verify="title"
                           autocomplete="off"
                           placeholder="请输入修改的分数"
                           class="layui-input"
                           style="width: 150px"
                    >
                    {{--                    {{$student->suser}}--}}
                </td>
                <td><input type="text"
                           name="student[spassword]"
                           value="{{ old('student')['spassword'] ? old('student')['spassword'] : $student->spassword }}"
                           lay-verify="title"
                           autocomplete="off"
                           placeholder="请输入修改的分数"
                           class="layui-input"
                           style="width: 150px"
                    >
                    {{--                    {{$student->spassword}}--}}
                </td>
                <td>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button type="submit" class="layui-btn" lay-submit="" lay-filter="demo1" >
                                立即提交
                            </button>
                            <button type="reset" class="layui-btn layui-btn-primary" >
                                返回
                            </button>
                        </div>
                    </div>
                </td>
            </tr>
            {{--            @endforeach--}}
            </tbody>
        </table>
        </form>










        <div class="layui-footer">
            <!-- 底部固定区域 -->
            底部固定区域
        </div>
    </div>
@stop