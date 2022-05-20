@extends('common.layoutadmin')

@section('content')
    <div class="layui-body">
        <!-- 内容主体区域 -->
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;
    margin-left: 50px;width:1558px">
            <legend>学生数据  共计{{$num}}人</legend>
        </fieldset>


        <table class="layui-table" lay-size="lg" style="margin: 50px ; width: 1600px">
            <colgroup>
                <col width="150">
                <col width="200">
                <col width="200">
                <col width="200">
                <col width="200">
                <col width="200">
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
            @foreach($students as $student)
                <tr>
                    <td>{{$student->sno}}</td>
                    <td>{{$student->sname}}</td>
                    <td>{{$student->ssex}}</td>
                    <td>{{$student->suser}}</td>
                    <td>{{$student->spassword}}</td>
                    <td>
                        <div class="layui-btn-group">
                            <button type="button" class="layui-btn ">
                                <a href="{{url('admin/xsxg',['sno'=>$student->sno])}}">编辑</a>
                            </button>
                            <button type="button" class="layui-btn">
                                <a href="{{url('admin/xssc',['sno'=>$student->sno])}}">删除</a>
                            </button>

                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>











        <div class="layui-footer">
            <!-- 底部固定区域 -->
            底部固定区域
        </div>
    </div>
@stop