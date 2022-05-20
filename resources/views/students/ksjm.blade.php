@extends('common.layoutstudent')

@section('content')
    <div>
        <div class="layui-body">
            <!-- 内容主体区域 -->
            <fieldset class="layui-elem-field layui-field-title"
                      style="margin-top: 20px;
                  margin-left: 50px;
                  width:1400px">
                <legend>考试界面</legend>
            </fieldset>


            <table class="layui-table" lay-size="lg" style="margin: 50px ; width: 1400px">
                <colgroup>
                    <col width="200">
                    <col width="200">
                    <col width="200">
                    <col width="200">
                    <col width="200">
                </colgroup>
                <thead>
                <tr>
                    <th>考试名称</th>
                    <th>考试类型</th>
                    <th>考试试卷</th>
                    <th>考试时间</th>
                    <th>考试总分</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($exams as $exam)
                <tr>
                    <td>{{$exam->ename}}</td>
                    <td>{{$exam->etype}}</td>
                    <td>{{$exam->tname}}</td>
                    <td>{{$exam->etime}}</td>
                    <td>{{$exam->escore}}</td>
                    <td>
                        <div class="layui-btn-group">
                              <button type="button" class="layui-btn">
                                  <a href="{{url('students/cjks',['eid'=>$exam->eid])}}">参加</a>
                              </button>
                              <button type="button" class="layui-btn ">
                                  <a href="">不参加</a>
                              </button>
                        </div>
                        </td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@stop