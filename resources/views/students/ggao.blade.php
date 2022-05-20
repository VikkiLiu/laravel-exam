@extends('common.layoutstudent')

@section('content')
    <div>
        <fieldset class="layui-elem-field layui-field-title"
                  style="margin-top: 20px;
                  margin-left: 100px;
                  width:1650px">
            <legend>公告</legend>
        </fieldset>

        <div class="layui-bg-gray" style="padding: 30px;width: 1600px;margin-left: 100px">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md6">
                    <div class="layui-panel" style="width: 1000px;height: 600px;margin-left:300px">
                        <div style="padding: 50px 30px;">
                        <ul style="margin: 30px;font-size: 15px " >
{{--                            @foreach($students as $student)--}}
{{--                            <li style="margin: 30px ">欢迎您，用户：{{$student->sname}}</li>--}}
{{--                            @endforeach--}}
                            <li style="margin: 30px ">欢迎您，用户：{{$student1}}</li>
                            <li style="margin: 30px ">
                                管理员于{{$time1}}添加了一试卷（暂无权限查看）
                            </li>
                            <li style="margin: 30px ">
                                管理员于{{$time2}}添加了一试题（暂无权限查看）
                            </li>
                            <li style="margin: 30px ">
                                管理员于{{$time3}}添加了一考试
                                <a href="{{url('students/ksjm')}}">(点击查看)</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop