@extends('common.layoutstudent')

@section('content')
    <div class="layui-body">
        <!-- 内容主体区域 -->
        <fieldset class="layui-elem-field layui-field-title"
                  style="margin-top: 20px;
                  margin-left: 50px;
                  width:1400px">
            <legend>成绩查询</legend>
        </fieldset>


        <table class="layui-table" lay-size="lg" style="margin: 50px ; width: 1400px">
            <colgroup>
                <col width="200">
                <col width="200">
                <col width="200">
                <col width="200">
                <col width="200">
                <col width="200">
            </colgroup>
            <thead>
            <tr>
                <th>用户名</th>
                <th>学号</th>
                <th>考试名称</th>
                <th>试卷</th>
                <th>成绩</th>
                <th>考试时间</th>
            </tr>
            </thead>
            <tbody>
            @foreach($grades1 as $grade1)
            <tr>
                <td>{{$grade1->sname}}</td>
                <td>{{$grade1->sno}}</td>
                <td>{{$grade1->ename}}</td>
                <td>{{$grade1->tname}}</td>
                <td>{{$grade1->grades}}</td>
                <td>{{$grade1->etime}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>

        <div>
{{--            {{$grades1}}--}}
        </div>
    </div>
@stop