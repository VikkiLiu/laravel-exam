@extends('common.layoutadmin')

@section('content')
    <div class="layui-body">
        <!-- 内容主体区域 -->
        <fieldset class="layui-elem-field layui-field-title"style="margin-top: 20px;
    margin-left: 50px;width:1610px">
            <legend>试卷管理</legend>
        </fieldset>

        <div class="layui-tab layui-tab-card" style="width: 1610px; margin-left: 50px">
            <ul class="layui-tab-title">
                <li class="layui-this">创建试卷</li>
                <li >试卷管理</li>
                <li class="layui-disabled">试卷查看</li>
            </ul>

            <div class="layui-tab-content" style="height: 700px; ">

                <div class="layui-tab-item layui-show">
                    <form class="layui-form"  method="post" action="{{url('admin/savee')}}">
                    <div class="layui-form-item" style="width: 500px">
                        <label class="layui-form-label">试卷名称</label>
                        <div class="layui-input-block">
                            <input type="text" name="test[tname]" lay-verify="title" autocomplete="off" placeholder="请输入试卷名称" class="layui-input">
                        </div>
                    </div>
                        <div class="layui-form-item" style="width: 500px">
                            <label class="layui-form-label">试卷分类</label>
                            <div class="layui-input-block">
                                <select name="test[ttype]" lay-filter="aihao">
                                    <option value=""></option>
                                    <option value="试卷分类1">试卷分类1</option>
                                    <option value="试卷分类2">试卷分类2</option>
                                    <option value="试卷分类3">试卷分类3</option>
                                </select>
                            </div>
                        </div>
                  <div class="layui-form-item">
                        <div class="layui-input-block" >
                            <button type="submit"
                                    data-method="offset" data-type="auto" class="layui-btn">立即提交</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                        </div>
                    </div>
                </form>
                </div>

                <div class="layui-tab-item" style="margin: 50px;">
                    <table class="layui-table">
                        <colgroup>
                            <col width="200">
                            <col width="200">
                            <col width="200">
                            <col width="200">
                            <col width="200">
                        </colgroup>
                        <thead>
                        <tr>
                            <th>序号</th>
                            <th>试卷名称</th>
                            <th>试卷分类</th>
                            <th>更新时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tests as $test)
                        <tr>
                            <td>{{$test->tno}}</td>
                            <td>{{$test->tname}}</td>
                            <td>{{$test->ttype}}</td>
                            td>{{$test->updated_at}}</td>
                            <td>
                                <div class="layui-btn-group">
                                    <button type="button" class="layui-btn">
                                        <a href="{{url('admin/sjglck',['tno'=>$test->tno])}}">
                                            查看
                                        </a>
                                    </button>

                                    <button type="button" class="layui-btn">
                                        <a href="{{url('admin/deletee',['tno'=>$test->tno])}}">
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


{{--                <div class="layui-tab-item" style="margin: 50px;">--}}
{{--                    试卷名称：--}}
{{--                    <table class="layui-table">--}}
{{--                        <colgroup>--}}
{{--                            <col width="150">--}}
{{--                            <col width="200">--}}
{{--                            <col width="200">--}}
{{--                            <col width="200">--}}
{{--                            <col width="200">--}}
{{--                        </colgroup>--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>序号</th>--}}
{{--                            <th>章节</th>--}}
{{--                            <th>知识点</th>--}}
{{--                            <th>问题</th>--}}
{{--                            <th>操作</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        </tbody>--}}
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