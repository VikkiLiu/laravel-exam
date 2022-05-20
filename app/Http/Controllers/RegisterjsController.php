<?php
namespace App\Http\Controllers;

use App\login;
use App\loginnn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RegisterjsController extends Controller{

    public function registerjs(){

        return view('registerjs');
    }


    public function createjs(Request $request){
        $data=$request->input('teacher');

        $teacher=new loginnn();
        $teacher->tuser = $data['tuser'];
        $teacher->tpassword = $data['tpassword'];
        $teacher->tname = $data['tname'];
        if ($teacher->save()){
            return redirect('login')->with('success','添加成功');
        }else{
            return redirect()->back();
        }
    }
}