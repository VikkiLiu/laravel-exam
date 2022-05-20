@extends('common.layoutadmin')

@section('content')
    <div class="layui-body">
        <!-- 内容主体区域 -->
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;
    margin-left: 50px;width:1558px">
            <legend>教师数据</legend>
        </fieldset>

        <form class="layui-form"  method="post" action="">
        <table class="layui-table" lay-size="lg" style="margin: 50px ; width: 1600px">
            <colgroup>
                <col width="200">
                <col width="200">
                <col width="200">
                <col width="200">
                <col width="200">
            </colgroup>
            <thead>
            <tr>
                <th>编号</th>
                <th>姓名</th>
                <th>账号</th>
                <th>密码</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
{{--            @foreach($teachers as $teacher)--}}
            <tr>
                <td>
                <input type="text"
                           name="teacher[tno]"
                           value="{{ old('teacher')['tno'] ? old('teacher')['tno'] : $teacher->tno }}"
                           lay-verify="title"
                           autocomplete="off"
                           placeholder="请输入修改的分数"
                           class="layui-input"
                           style="width: 150px"
                    >
{{--                    {{$teacher->tno}}--}}
                </td>
                <td>
                    <input type="text"
                           name="teacher[tname]"
                           value="{{ old('teacher')['tname'] ? old('teacher')['tname'] : $teacher->tname }}"
                           lay-verify="title"
                           autocomplete="off"
                           placeholder="请输入修改的分数"
                           class="layui-input"
                           style="width: 150px"
                    >
{{--                    {{$teacher->tname}}--}}
                </td>
                <td>
                    <input type="text"
                           name="teacher[tuser]"
                           value="{{ old('teacher')['tuser'] ? old('teacher')['tuser'] : $teacher->tuser }}"
                           lay-verify="title"
                           autocomplete="off"
                           placeholder="请输入修改的分数"
                           class="layui-input"
                           style="width: 150px"
                    >
{{--                    {{$teacher->tuser}}--}}
                </td>
                <td>
                    <input type="text"
                           name="teacher[tpassword]"
                           value="{{ old('teacher')['tpassword'] ? old('teacher')['tpassword'] : $teacher->tpassword }}"
                           lay-verify="title"
                           autocomplete="off"
                           placeholder="请输入修改的分数"
                           class="layui-input"
                           style="width: 150px"
                    >
{{--                    {{$teacher->tpassword}}--}}
                </td>
                <td>
                    <div class="layui-input-block">
                        <button type="submit" class="layui-btn" lay-submit="" lay-filter="demo1" >
                            立即提交
                        </button>
                        <button type="reset" class="layui-btn layui-btn-primary" >
                            返回
                        </button>
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