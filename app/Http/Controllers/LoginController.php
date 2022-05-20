<?php
namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\login1;
use App\loginn;
use App\loginnn;
use Illuminate\Http\Request;
use App\login;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{

    public function login()
    {
        return view('login');
    }


    public function dologin(Request $request)
    {

        //1.接收表单提交的数据
        $input = $request->except('_token');

        //2.进行表单验证
        //$validator =Validator::make('需要验证的表单数据','验证规则','错误提示信息');

        $rule = [
            'username' => 'required',
            'password' => 'required|alpha_dash',
            'type'=>'required',
        ];

        $msg =[
          'username.required'=>'用户名必须输入',
          'password.required'=>'密码必须输入',
          'type.required'=>'必须选择身份',
          'password.alpha_dash'=>'密码必须是数组字母下划线',

        ];

       // $validator = Validator::make($input, $rule,$msg);


        $validator = Validator::make($input, $rule,$msg);


        if ($validator->fails()) {
            return redirect( 'login')
                ->withErrors($validator)
                ->withInput();
        }


        //3.验证是否由此用户（用户名 密码 验证码）
        //students
        if ($login = login::where('suser',$input['username'])->first()){
            if (!$login){
                return redirect('login')->with('errors','用户名为空');
            }

            if ($input['password']!=$login->spassword){
                return redirect('login')->with('errors','密码为空');
            }

            if ($input['type']!=$login->type){
                return redirect('login')->with('errors','选项为空');
            }

            //4.保存用户信息到session中
            session()->put('login',$login);
//            $data = $request->session()->all();
//            $data = session()->all();

            //5.跳转到后台首页
            return redirect('students/ggao');
        }


        //teacher
        if ($loginnn = loginnn::where('tuser',$input['username'])->first()){
            if (!$loginnn){
                return redirect('login')->with('errors','用户名为空');
            }

            if ($input['password']!=$loginnn->tpassword){
                return redirect('login')->with('errors','密码为空');
            }

            if ($input['type']!=$loginnn->type){
                return redirect('login')->with('errors','选项为空');
            }

            //4.保存用户信息到session中
            session()->put('login',$loginnn);

            //5.跳转到后台首页
            return redirect('teacher/zhuye');
        }


        //3.验证是否由此用户（用户名 密码 验证码）
        //admin
        if ($loginn = loginn::where('auser',$input['username'])->first()){
            if (!$loginn){
                return redirect('login')->with('errors','用户名为空');
            }

            if ($input['password']!=$loginn->apassword){
                return redirect('login')->with('errors','密码为空');
            }

            if ($input['type']!=$loginn->type){
                return redirect('login')->with('errors','选项为空');
            }

            //4.保存用户信息到session中
            session()->put('login',$loginn);

            //5.跳转到后台首页
            return redirect('admin/zhuye');
        }

    }

    public function logout(){

        session()->flush();
        return redirect('login');
    }


    }
