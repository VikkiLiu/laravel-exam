@extends('common.layoutadmin')

@section('content')
    <div class="layui-body">
        <!-- 内容主体区域 -->
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;
    margin-left: 50px;width:1558px">
            <legend>成绩数据  共计{{$num}}条</legend>
        </fieldset>


        <table class="layui-table" lay-size="lg" style="margin: 50px ; width: 1600px">
            <colgroup>
                <col width="150">
                <col width="200">
                <col width="200">
                <col width="200">
                <col width="200">
            </colgroup>
            <thead>
            <tr>
                <th>学生姓名</th>
                <th>试卷</th>
                <th>成绩</th>
                <th>考试名称</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($grades as $grade)
            <tr>
                <td>{{$grade->sname}}</td>
                <td>{{$grade->tname}}</td>
                <td>{{$grade->grades}}</td>
                <td>{{$grade->ename}}</td>
                <td>
                    <div class="layui-btn-group">
                        <button type="button" class="layui-btn">
                            <a href="{{url('admin/cjsjxg',['gid'=>$grade->gid])}}">打分/修改成绩</a>
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