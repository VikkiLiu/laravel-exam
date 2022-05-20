@extends('common.layoutteacher')

@section('content')
    <div class="layui-body">
        <!-- 内容主体区域 -->
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;
    margin-left: 50px;width:1558px">
            <legend>考试管理</legend>
        </fieldset>


        <div class="layui-tab layui-tab-card" style="width: 1610px; margin-left: 50px">
            <ul class="layui-tab-title">
                <li class="layui-this">创建考试</li>
                <li>考试管理</li>
                <li class="layui-disabled">考试查看</li>
            </ul>
            <div class="layui-tab-content" style="height: 700px; ">
                <div class="layui-tab-item layui-show">
                    <form class="layui-form" action="{{url('teacher/savea')}}">
                        <div class="layui-form-item" style="width: 500px">
                            <label class="layui-form-label">考试名称</label>
                            <div class="layui-input-block">
                                <input type="text" name="exam[ename]"
                                       lay-verify="title"
                                       autocomplete="off"
                                       placeholder="请输入考试名称"
                                       class="layui-input">
                            </div>
                        </div>

                        <div class="layui-form-item" style="width: 500px">
                            <label class="layui-form-label">考试分类</label>
                            <div class="layui-input-block">
                                <select name="exam[etype]" lay-filter="aihao">
                                    <option value=""></option>
                                    <option value="测试">测试</option>
                                    <option value="正式考试">正式考试</option>
                                </select>
                            </div>
                        </div>

                        <div class="layui-inline">
                            <label class="layui-form-label">试卷选择</label>
                            <div class="layui-input-inline">
                                <select name="exam[tname]"
                                        lay-verify="required"
                                        lay-search="">
                                    <option value="">直接选择或搜索选择</option>
                                    @foreach($tests as $test)
                                    <option value="{{$test->tname}}">{{$test->tname}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="layui-form-item" style="width: 500px;margin-top: 15px">
                            <label class="layui-form-label">试卷总分</label>
                            <div class="layui-input-block">
                                <input type="text" name="exam[escore]" lay-verify="title" autocomplete="off" placeholder="请输入试卷总分" class="layui-input">
                            </div>
                        </div>

                        <div class="layui-form">
                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <label class="layui-form-label">考试时间</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="exam[etime]" class="layui-input" id="test5" placeholder="yyyy-MM-dd HH:mm:ss">
                                    </div>
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <button type="submit" class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
                                </div>
                            </div>
                    </form>
                </div>

            </div>

            <div class="layui-tab-item" style="margin: 50px;">
                <table class="layui-table">
                    <colgroup>
                        <col width="200">
                        <col width="200">
                        <col width="200">
                        <col width="200">
                        <col width="200">
                        <col width="200">
                        <col width="200">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>考试名称</th>
                        <th>分类</th>
                        <th>试卷</th>
                        <th>考试时间</th>
                        <th>考试人数</th>
                        <th>试卷总分</th>
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
                            <td>{{$exam->enum}}</td>
                            <td>{{$exam->escore}}</td>
                            <td>
                                <div class="layui-btn-group">
                                    <button type="button" class="layui-btn">
                                        <a href="{{url('teacher/ksglck',['eid'=>$exam->ename])}}">
                                            查看
                                        </a>
                                    </button>
                                    <button type="button" class="layui-btn">
                                        <a href="{{url('teacher/deletea',['eid'=>$exam->eid])}}">
                                            删除
                                        </a>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


{{--            <div class="layui-tab-item" style="margin: 50px;">--}}
{{--                考试名称：{{$exam->ename}}--}}
{{--                <table class="layui-table">--}}
{{--                    <colgroup>--}}
{{--                        <col width="150">--}}
{{--                        <col width="200">--}}
{{--                        <col width="200">--}}
{{--                        <col width="200">--}}
{{--                        <col width="200">--}}
{{--                    </colgroup>--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th>学号</th>--}}
{{--                        <th>姓名</th>--}}
{{--                        <th>成绩</th>--}}
{{--                        <th>考试时间</th>--}}
{{--                        <th>操作</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($grades as $grade)--}}
{{--                    <tr>--}}
{{--                        <td>{{$grade->sno}}</td>--}}
{{--                        <td>{{$grade->sname}}</td>--}}
{{--                        <td>{{$grade->grades}}</td>--}}
{{--                        <td>{{$grade->etime}}</td>--}}
{{--                        <td>--}}
{{--                            <div class="layui-btn-group">--}}
{{--                                <button type="button" class="layui-btn">打分</button>--}}
{{--                                <button type="button" class="layui-btn ">编辑</button>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
                </table>
            </div>


        </div>












    <div class="layui-footer">
        <!-- 底部固定区域 -->
        底部固定区域
    </div>
    </div>
@stop