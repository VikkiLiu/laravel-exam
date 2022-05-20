<?php
namespace App\Http\Controllers;

use App\login;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RegisterController extends Controller{

    public function register(){

        return view('register');
    }

    public function create(Request $request){
        $data=$request->input('student');

        $student=new login();
        $student->suser = $data['suser'];
        $student->spassword = $data['spassword'];
        $student->sname = $data['sname'];
        $student->ssex = $data['ssex'];
        if ($student->save()){
            return redirect('login')->with('success','添加成功');
        }else{
            return redirect()->back();
        }
    }

}