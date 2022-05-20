@extends('common.layoutadmin')

@section('content')
    <div class="layui-body">
        <!-- 内容主体区域 -->
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;
    margin-left: 50px;width:1558px">
            <legend>主页</legend>
        </fieldset>


        <div class="layui-row layui-col-space10" style="width: 1610px; margin-left: 50px">
            <div class="layui-col-md9">

                <div class="layui-row layui-col-space15">
                    <div class="layui-col-md6">
                        <div class="layui-panel">
                            <div style="padding: 30px; height: 60px">
                                <i class="layui-icon layui-icon-user" style="font-size: 60px; ">
                                </i>
                                学生人数:{{$num2}}
                            </div>
                        </div>
                    </div>
                    <div class="layui-col-md6">
                        <div class="layui-panel">
                            <div style="padding: 30px; height: 60px">
                                <i class="layui-icon layui-icon-form" style="font-size: 60px; ">
                                </i>
                                试题数:{{$num3}}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="layui-row layui-col-space15">
                    <div class="layui-col-md6">
                        <div class="layui-panel">
                            <div style="padding: 30px; height: 60px">
                                <i class="layui-icon layui-icon-table" style="font-size: 60px; ">
                                </i>
                                考试数:{{$num1}}
                            </div>
                        </div>
                    </div>
                    <div class="layui-col-md6">
                        <div class="layui-panel">
                            <div style="padding: 30px; height: 60px">
                                <i class="layui-icon layui-icon-template-1" style="font-size: 60px; ">
                                </i>
                                考试人数:{{$num4}}
                            </div>
                        </div>
                    </div>
                    <div class="layui-col-md12">
                        <div class="layui-panel">
                            <div class="layui-card ">
                                <div class="layui-card-header " style="font-weight: bold ;font-size: 15px;">题库统计</div>
                                <div class="layui-card-body " style="height: 200px">
                                    共计有：{{$num3}}道试题<br>
                                    第一章共计有：{{$num31}}道试题；  知识点1共计有：{{$num311}}道试题<br>
                                    第二章共计有：{{$num32}}道试题；  知识点2共计有：{{$num322}}道试题<br>
                                    第三章共计有：{{$num33}}道试题；  知识点3共计有：{{$num333}}道试题<br>
                                    第四章共计有：{{$num34}}道试题；  知识点4共计有：{{$num344}}道试题<br>
                                    第五章共计有：{{$num35}}道试题；  知识点5共计有：{{$num355}}道试题<br>
                                    第六章共计有：{{$num36}}道试题；  知识点6共计有：{{$num366}}道试题<br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-col-md3 layui-col-space15">

                <div class="layui-col-md11">
                    <div class="layui-panel">
                        <div class="layui-card ">
                            <div class="layui-card-header " style="font-weight: bold;font-size: 15px;">公告通知</div>
                            <div class="layui-card-body " style="height: 195px">
                                最新试卷：<br>
                                <a href="{{url('admin/sjgl')}}">{{$time1}}添加的新试卷</a> <br>
                                <a href="{{url('admin/sjgl')}}">>>更多</a><br>
                                <br>
                                最新试题：<br>
                                <a href="{{url('admin/stgl')}}">{{$time2}}添加的新试题</a> <br>
                                <a href="{{url('admin/stgl')}}">>>更多</a><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layui-col-md11">
                    <div class="layui-panel">
                        <div class="layui-card ">
                            <div class="layui-card-header " style="font-weight: bold;font-size: 15px;">最近的考试</div>
                            <div class="layui-card-body " style="height: 200px">
                                <a href="{{url('admin/ksgl')}}">{{$time3}}添加的新考试</a> <br>
                                <a href="{{url('admin/ksgl')}}">>>更多</a><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div class="layui-footer">
            <!-- 底部固定区域 -->
            底部固定区域
        </div>
    </div>
@stop