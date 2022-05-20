@extends('common.layoutteacher')

@section('content')
    <div class="layui-body">
        <!-- 内容主体区域 -->
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;
    margin-left: 50px;width:1610px">
            <legend>试题管理</legend>
        </fieldset>
        <div class="layui-tab layui-tab-card" style="width: 1610px; margin-left: 50px">
            <ul class="layui-tab-title">
                <li class="layui-this">
                    创建试题

                </li>
                <li>试题管理</li>
                <li class="layui-disabled">试题查看</li>
            </ul>

            <div class="layui-tab-content" style="height: 700px;">

                <div class="layui-tab-item layui-show">

                    <form class="layui-form" method="post" action="{{url('teacher/save')}}">
                        {{ csrf_field() }}
                        <div class="layui-form-item">
                            <label class="layui-form-label">分类选择</label>
                            <div class="layui-input-inline">
                                <select name="question[qsection]">
                                    <option value="">请选择章节</option>
                                    <option value="第一章" selected="">第一章</option>
                                    <option value="第二章">第二章</option>
                                    <option value="第三章">第三章</option>
                                    <option value="第四章">第四章</option>
                                    <option value="第五章">第五章</option>
                                    <option value="第六章">第六章</option>
                                </select>
                            </div>
                            <div class="layui-input-inline">
                                <select name="question[qknow]">
                                    <option value="">请选择知识点</option>
                                    <option value="知识点1">知识点1</option>
                                    <option value="知识点2">知识点2</option>
                                    <option value="知识点3">知识点3</option>
                                    <option value="知识点4">知识点4</option>
                                    <option value="知识点5">知识点5</option>
                                    <option value="知识点6">知识点6</option>
                                </select>
                            </div>
                            <div class="layui-input-inline">
                                <select name="question[tname]">
                                    <option value="">请加入试卷</option>
                                    @foreach($tests as $test)
                                    <option value="{{$test->tname}}">
                                        {{$test->tname}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="layui-form-item layui-form-text">
                            <label class="layui-form-label">题干</label>
                            <div class="layui-input-block">
                                <textarea placeholder="请输入内容" class="layui-textarea" name="question[qquestion]"></textarea>
                            </div>
                        </div>

                        <div class="layui-form-item layui-form-text">
                            <label class="layui-form-label">选项A</label>
                            <div class="layui-input-block">
                                <textarea placeholder="请输入内容" class="layui-textarea" name="question[qa]"></textarea>
                            </div>
                        </div>

                        <div class="layui-form-item layui-form-text">
                            <label class="layui-form-label">选项B</label>
                            <div class="layui-input-block">
                                <textarea placeholder="请输入内容" class="layui-textarea" name="question[qb]"></textarea>
                            </div>
                        </div>

                        <div class="layui-form-item layui-form-text">
                            <label class="layui-form-label">选项C</label>
                            <div class="layui-input-block">
                                <textarea placeholder="请输入内容" class="layui-textarea" name="question[qc]"></textarea>
                            </div>
                        </div>

                        <div class="layui-form-item layui-form-text">
                            <label class="layui-form-label">选项D</label>
                            <div class="layui-input-block">
                                <textarea placeholder="请输入内容" class="layui-textarea" name="question[qd]"></textarea>
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button type="submit" class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>

                    </form>

                </div>

                <div class="layui-tab-item" style="margin: 50px">

                    <table class="layui-table" >
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
                            <th>序号</th>
                            <th>章节</th>
                            <th>知识点</th>
                            <th>问题</th>
                            <th>更新时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($questions as $question)
                            <tr>
                                <td>{{$question->qno}}</td>
                                <td>{{$question->qsection}}</td>
                                <td>{{$question->qknow}}</td>
                                <td>{{$question->qquestion}}</td>
                                <td>{{$question->updated_at}}</td>
                                <td>
                                    <div class="layui-btn-group">
                                        <button type="button" class="layui-btn">
                                            <a href="{{url('teacher/stglck',['qno'=>$question->qno])}}">
                                                查看
                                            </a>
                                        </button>
                                        <button type="button" class="layui-btn ">
                                            <a href="{{url('teacher/stglxg',['qno'=>$question->qno])}}">
                                                编辑
                                            </a>
                                        </button>
                                        <button type="button" class="layui-btn" >
                                            <a href="{{url('teacher/delete',['qno'=>$question->qno])}}">
                                                删除
                                            </a>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <!--分页-->


                        <div class="pull-right">
                            {{$questions->render()}}
                        </div>
{{--                        <ul class="pagination pull-right">--}}
{{--                            <li>--}}
{{--                                <a href="#" aria-label="Previous">--}}
{{--                                    <span aria-hidden="true">&laquo;</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="active"><a href="#">1</a> </li>--}}
{{--                            <li><a href="#">2</a></li>--}}
{{--                            <li><a href="#">3</a></li>--}}
{{--                            <li><a href="#">4</a></li>--}}
{{--                            <li><a href="#">5</a></li>--}}
{{--                            <li>--}}
{{--                                <a href="#" aria-label="Next">--}}
{{--                                    <span aria-hidden="true">&laquo;</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}


                </div>








{{--                <div class="layui-tab-item" style="margin-left: 100px;margin-top: 50px;">--}}
{{--                    <table class="layui-table" lay-size="lg">--}}
{{--                        <colgroup>--}}
{{--                            <col width="200">--}}
{{--                            <col width="200">--}}
{{--                            <col width="200">--}}
{{--                            <col width="200">--}}
{{--                        </colgroup>--}}
{{--                            <tr>--}}
{{--                                <th>ID：</th>--}}
{{--                                <td>{{$question->qno}}</td>--}}
{{--                            </tr>--}}

{{--                            <tr>--}}
{{--                                <th>章节：</th>--}}
{{--                                <td>{{$question->qsection}}</td>--}}
{{--                            </tr>--}}

{{--                            <tr>--}}
{{--                                <th>知识点：</th>--}}
{{--                                <td>{{$question->qknow}}</td>--}}
{{--                            </tr>--}}

{{--                            <tr>--}}
{{--                                <th>问题：</th>--}}
{{--                                <td>{{$question->qquestion}}</td>--}}
{{--                            </tr>--}}

{{--                            <tr>--}}
{{--                                <th>选项A：</th>--}}
{{--                                <td>{{$question->qa}}</td>--}}
{{--                            </tr>--}}

{{--                            <tr>--}}
{{--                                <th>选项B：</th>--}}
{{--                                <td>{{$question->qb}}</td>--}}
{{--                            </tr>--}}

{{--                            <tr>--}}
{{--                                <th>选项C：</th>--}}
{{--                                <td>{{$question->qc}}</td>--}}
{{--                            </tr>--}}

{{--                            <tr>--}}
{{--                                <th>选项D：</th>--}}
{{--                                <td>{{$question->qd}}</td>--}}
{{--                            </tr>--}}

{{--                    </table>--}}
{{--                </div>--}}

            </div>
        </div>







        <div class="layui-footer">
            <!-- 底部固定区域 -->
            底部固定区域
        </div>
    </div>
@stop