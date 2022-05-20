@extends('common.layoutadmin')

@section('content')
    <div class="layui-body">
        <!-- 内容主体区域 -->
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;
    margin-left: 50px;width:1558px">
            <legend>教师数据  共计{{$num}}人</legend>
        </fieldset>


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
            @foreach($teachers as $teacher)
            <tr>
                <td>{{$teacher->tno}}</td>
                <td>{{$teacher->tname}}</td>
                <td>{{$teacher->tuser}}</td>
                <td>{{$teacher->tpassword}}</td>
                <td>
                    <div class="layui-btn-group">
                        <button type="button" class="layui-btn ">
                            <a href="{{url('admin/jsxg',['tno'=>$teacher->tno])}}">编辑</a>
                        </button>
                        <button type="button" class="layui-btn">
                            <a href="{{url('admin/jssc',['tno'=>$teacher->tno])}}">删除</a>
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