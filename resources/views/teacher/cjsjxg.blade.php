@extends('common.layoutteacher')

@section('content')
    <div class="layui-body">
        <!-- 内容主体区域 -->
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;
    margin-left: 50px;width:1558px">
            <legend>成绩数据</legend>
        </fieldset>
{{--        <form class="layui-form"  method="post" action="">--}}
{{--            <div class="layui-form-item" style="width: 500px">--}}
{{--                <label class="layui-form-label">用户名</label>--}}
{{--                <div class="layui-input-block">--}}
{{--                    <input type="text"--}}
{{--                           name="grade[sname]"--}}
{{--                           value="{{ old('grade')['sname']}}"--}}
{{--                           lay-verify="title"--}}
{{--                           autocomplete="off"--}}
{{--                           placeholder="请输入试卷名称"--}}
{{--                           class="layui-input">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="layui-form-item" style="width: 500px">--}}
{{--                <label class="layui-form-label">试卷</label>--}}
{{--                <div class="layui-input-block">--}}
{{--                    <input type="text"--}}
{{--                           name="grade[tname]"--}}
{{--                           value="{{ old('grade')['tname']}}"--}}
{{--                           lay-verify="title"--}}
{{--                           autocomplete="off"--}}
{{--                           placeholder="不可更改"--}}
{{--                           class="layui-input">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="layui-form-item" style="width: 500px">--}}
{{--                <label class="layui-form-label">考试时间</label>--}}
{{--                <div class="layui-input-block">--}}
{{--                    <input type="text"--}}
{{--                           name="grade[etime]"--}}
{{--                           value="{{ old('grade')['etime']}}"--}}
{{--                           lay-verify="title"--}}
{{--                           autocomplete="off"--}}
{{--                           placeholder="请输入试卷名称"--}}
{{--                           class="layui-input">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="layui-form-item" style="width: 500px">--}}
{{--                <label class="layui-form-label">成绩</label>--}}
{{--                <div class="layui-input-block">--}}
{{--                    <input type="text"--}}
{{--                           name="grade[grades]"--}}
{{--                           value="{{ old('grade')['grades'] ? old('grade')['grades'] : $grade->grades }}"--}}
{{--                           lay-verify="title"--}}
{{--                           autocomplete="off"--}}
{{--                           placeholder="请输入成绩"--}}
{{--                           class="layui-input">--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <div class="layui-form-item">--}}
{{--                <div class="layui-input-block" >--}}
{{--                    <button type="submit"--}}
{{--                            data-method="offset" data-type="auto" class="layui-btn">立即提交</button>--}}
{{--                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
        <form class="layui-form"  method="post" action="">
        <table class="layui-table" lay-size="lg" style="margin: 50px ; width: 1600px" >
            <colgroup>
                <col width="150">
                <col width="200">
                <col width="200">
                <col width="200">
                <col width="200">
            </colgroup>
            <thead>
            <tr>
                <th>用户名</th>
                <th>试卷</th>
                <th>成绩</th>
                <th>考试时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
{{--            @foreach($grades as $grade)--}}
                <tr>
                    <td>{{$student->sname}}</td>
                    <td>{{$student->tname}}</td>
                    <td>
                        <input type="text"
                               name="grade[grades]"
                               value="{{ old('grade')['grades'] ? old('grade')['grades'] : $student->grades }}"
                               lay-verify="title"
                               autocomplete="off"
                               placeholder="请输入修改的分数"
                               class="layui-input"
                               style="width: 150px"
                        >
{{--                        {{$grade->grades}}--}}
                    </td>
                    <td>{{$student->etime}}</td>
                    <td>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button type="submit" class="layui-btn" lay-submit="" lay-filter="demo1" >
                                   立即提交
                                </button>
                                <button type="reset" class="layui-btn layui-btn-primary">
                                    返回
                                </button>
                            </div>
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