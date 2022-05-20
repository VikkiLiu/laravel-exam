<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});





Route::group(['middleware' =>['web']],function(){
    Route::get('student/index', ['uses' => 'StudentController@index']);//学生列表
    Route::any('student/create', ['uses' => 'StudentController@create']);//新增学生
    Route::any('student/save', ['uses' => 'StudentController@save']);//新增学生
    Route::any('student/update/{id}', ['uses' => 'StudentController@update']);//修改学生
    Route::any('student/detail/{id}', ['uses' => 'StudentController@detail']);//查看学生
    Route::any('student/delete/{id}', ['uses' => 'StudentController@delete']);//删除学生
    //管理员
    Route::any('admin/zhuye', ['uses' => 'AdminController@zhuye']);//主页
    Route::any('orm1', ['uses' => 'AdminController@orm1']);//统计考试数


    Route::any('admin/stgl', ['uses' => 'AdminController@stgl']);//试题管理页面
    Route::any('admin/save', ['uses' => 'AdminController@save']);//创建试题保存
    Route::any('admin/delete/{qno}', ['uses' => 'AdminController@delete']);//创建试题保存
    Route::any('admin/stglxg/{qno}', ['uses' => 'AdminController@stglxg']);
    Route::any('admin/stglck/{qno}', ['uses' => 'AdminController@stglck']);//试题管理_查看页面

    Route::any('admin/sjgl', ['uses' => 'AdminController@sjgl']);//试卷管理页面
    Route::any('admin/savee', ['uses' => 'AdminController@savee']);//创建试卷保存
    Route::any('admin/deletee/{tname}', ['uses' => 'AdminController@deletee']);//试卷管理_删除
    Route::any('admin/sjglck/{tno}', ['uses' => 'AdminController@sjglck']);//试卷管理_查看页面

    Route::any('admin/cjsj', ['uses' => 'AdminController@cjsj']);//成绩数据页面
    Route::any('admin/cjsjxg/{gid}', ['uses' => 'AdminController@cjsjxg']);//成绩数据_修改页面

    Route::any('admin/ksgl', ['uses' => 'AdminController@ksgl']);//考试管理页面
    Route::any('admin/ksglck/{ename}', ['uses' => 'AdminController@ksglck']);//考试管理页面
    Route::any('admin/deletea/{eid}', ['uses' => 'AdminController@deletea']);//试题管理_查看

    Route::any('admin/savea',['uses' => 'AdminController@savea']);//创建试卷保存

    Route::any('admin/xs', ['uses' => 'AdminController@xs']);//学生页面
    Route::any('admin/xsxg/{sno}', ['uses' => 'AdminController@xsxg']);//成绩数据页面
    Route::any('admin/xssc/{sno}', ['uses' => 'AdminController@xssc']);//成绩数据页面

    Route::any('admin/js', ['uses' => 'AdminController@js']);//教师页面
    Route::any('admin/jsxg/{tno}', ['uses' => 'AdminController@jsxg']);//成绩数据页面
    Route::any('admin/jssc/{tno}', ['uses' => 'AdminController@jssc']);//成绩数据页面


    //教师
    Route::any('teacher/zhuye', ['uses' => 'TeacherController@zhuye']);//主页
    Route::any('teacher/sjgl', ['uses' => 'TeacherController@sjgl']);//试卷管理页面
//    Route::any('teacher/sjck', ['uses' => 'TeacherController@sjck']);//试卷管理页面
    Route::any('teacher/sjglck/{tno}', ['uses' => 'TeacherController@sjglck']);//试卷管理_查看页面

    Route::any('teacher/stgl', ['uses' => 'TeacherController@stgl']);//试题管理页面
    Route::any('teacher/stglxg/{qno}', ['uses' => 'TeacherController@stglxg']);
    Route::any('teacher/stglck/{qno}', ['uses' => 'TeacherController@stglck']);//试题管理_查看页面
    Route::any('teacher/delete/{qno}', ['uses' => 'TeacherController@delete']);//试题管理_删除页面

    Route::any('teacher/deletee/{tname}', ['uses' => 'TeacherController@deletee']);//试卷管理_删除
    Route::any('teacher/deletea/{eid}', ['uses' => 'TeacherController@deletea']);//试题管理_查看
    Route::any('teacher/save', ['uses' => 'TeacherController@save']);//创建试题保存
    Route::any('teacher/savee', ['uses' => 'TeacherController@savee']);//创建试卷保存
    Route::any('teacher/savea', ['uses' => 'TeacherController@savea']);//创建试卷保存
    Route::any('teacher/cjsj', ['uses' => 'TeacherController@cjsj']);//成绩数据页面
    Route::any('teacher/cjsjxg', ['uses' => 'TeacherController@cjsjxg']);//成绩数据页面
    Route::any('teacher/cjsjxg/{gid}', ['uses' => 'TeacherController@cjsjxg']);//成绩数据页面
//    Route::any('teacher/cjsjsave/{gid}', ['uses' => 'TeacherController@cjsjsave']);//成绩数据页面
    Route::any('teacher/ksgl', ['uses' => 'TeacherController@ksgl']);//考试管理页面
    Route::any('teacher/ksglck/{ename}', ['uses' => 'TeacherController@ksglck']);//考试管理页面
    Route::any('teacher/back', ['uses' => 'TeacherController@back']);//教师页面
    //学生
    Route::any('students/ggao', ['uses' => 'StudentsController@ggao']);//试卷管理页面
    Route::any('students/ksjm', ['uses' => 'StudentsController@ksjm']);//试题管理页面
    Route::any('students/cjks/{eid}',['uses' => 'StudentsController@cjks']);//参加考试
    Route::any('students/kclx', ['uses' => 'StudentsController@kclx']);//成绩数据页面
    Route::any('students/cjcx', ['uses' => 'StudentsController@cjcx']);//考试管理页面
    //登录和注册

    Route::any('register', ['uses' => 'RegisterController@register']);//注册学生页面
    Route::any('register/create', ['uses' => 'RegisterController@create']);//注册新学生用户

    Route::any('registerjs', ['uses' => 'RegisterjsController@registerjs']);//注册教师页面
    Route::any('registerjs/createjs', ['uses' => 'RegisterjsController@createjs']);//注册新教师用户

    Route::any('login', ['uses' => 'LoginController@login']);//登录页面
    Route::any('login/logout', ['uses' => 'LoginController@logout']);//退出登录页面
    Route::any('login/dologin', ['uses' => 'LoginController@dologin']);//学生登录页面




























































});