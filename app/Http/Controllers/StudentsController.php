<?php
namespace App\Http\Controllers;


use App\cjcx;
use App\cjks;
use App\cjsj;
use App\ggao;
use App\ksgl;
use App\ksjm;
use App\login;
use App\sjgl;
use App\stgl;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Session;
use App\Http\Controllers\Request;

class StudentsController extends Controller{

    /**
     *  公告界面
     *
     */
    public function ggao(\Illuminate\Http\Request $request){
        $students=ggao::get();
        $student1=$request->session()->get('login.sname');//获取当前登录用户姓名
        $time1=sjgl::max('updated_at');
        $time2=stgl::max('updated_at');
        $time3=ksgl::max('updated_at');
        return view('students.ggao',[
            'time1'=>$time1,
            'time2'=>$time2,
            'time3'=>$time3,
            'student1'=>$student1,
            'students'=>$students,
        ]);
    }

    /**
     *  考试界面
     *
     */
    public function ksjm(\Illuminate\Http\Request $request){
        $exams=ksjm::get();
        $grades=cjcx::get();

        return view('students.ksjm',[
            'exams'=>$exams,
            'grades'=>$grades,]);

    }

    //参加考试
    public function cjks(\Illuminate\Http\Request $request,$eid){
        $student1=$request->session()->get('login.sname');//获取当前登录用户姓名
        $student2=$request->session()->get('time');
        $time1=sjgl::max('updated_at');
        $time2=stgl::max('updated_at');
        $time3=ksgl::max('updated_at');

        $sno2=$request->session()->get('login.sno');//获取当前用户学号
        $sname2=$request->session()->get('login.sname');//获取当前用户姓名

        $tname2=ksjm::find($eid);

//        $tname2 = ksjm::where(['eid'=>$eid])->first();


//       dd($eid,$tname2->tname);
        //$tname2=cjcx::find($gid);

        $grades2=DB::table('grade')
            ->insert(['sno'=>$sno2,
                      'sname'=>$sname2,
                      'tname'=>$tname2->tname,
                      'grades'=>'尚未评分',
                      'etime'=>$tname2->etime,
                      'ename'=>$tname2->ename ,

                ]);

        $num=$tname2->enum+1;
        DB::table('exam')
            ->where(['eid'=>$eid])
            ->update([
                'enum'=>$num,
            ]);


        return view('students/ggao',[
            'sno2'=>$sno2,
            'sname2'=>$sname2,
            'tname2'=>$tname2,
            'grades2'=>$grades2,
            'student1'=>$student1,
            'student2'=>$student2,
            'time1'=>$time1,
            'time2'=>$time2,
            'time3'=>$time3,
        ]);

       return view('students.ggao');
    }

    public function jjks(){


        return view('students.ksjm');
    }


    /**
     *  课程练习界面
     *
     */

    public function kclx(){
        return view('students.kclx');
    }


    /**
     *  成绩查询界面
     *
     */

    public function cjcx(\Illuminate\Http\Request $request){
        $sno1=$request->session()->get('login.sno');//获取当前用户学号
        $grades1=cjcx::where('sno','=',$sno1)->get();
        $grades=cjcx::get();
        return view('students.cjcx',[
            'grades'=>$grades,
            'grades1'=>$grades1,
            'sno1'=>$sno1,
        ]);
    }

}