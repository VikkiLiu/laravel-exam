<?php
namespace App\Http\Controllers;

use App\cjcx;
use App\cjsj;
use App\ksgl;
use App\ksglck;
use App\ksjm;
use App\sjgl;
use App\stgl;
use App\xs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class TeacherController extends Controller{

    /**
     * 主页页面
     *
     */
    public function zhuye(\Illuminate\Http\Request $request){
        $teacher1=$request->session()->get('login.tname');//获取当前登录用户姓名
        $num1=ksgl::count();
        $num2 = xs::count();
        $num3 = stgl::count();
        $num4 = DB::table('exam')->sum('enum');
        $num31=stgl::where('qsection','=',"第一章")
            ->count();
        $num32=stgl::where('qsection','=',"第二章")
            ->count();
        $num33=stgl::where('qsection','=',"第三章")
            ->count();
        $num34=stgl::where('qsection','=',"第四章")
            ->count();
        $num35=stgl::where('qsection','=',"第五章")
            ->count();
        $num36=stgl::where('qsection','=',"第六章")
            ->count();
        $num311=stgl::where('qknow','=',"知识点1")
            ->count();
        $num322=stgl::where('qknow','=',"知识点2")
            ->count();
        $num333=stgl::where('qknow','=',"知识点3")
            ->count();
        $num344=stgl::where('qknow','=',"知识点4")
            ->count();
        $num355=stgl::where('qknow','=',"知识点5")
            ->count();
        $num366=stgl::where('qknow','=',"知识点6")
            ->count();

        $time1=sjgl::max('updated_at');
        //$name1= DB::table('test')
        //->where ('updated_at','=','$time1');

        $time2=stgl::max('updated_at');
        //$name2=stgl::where('qno','=',"8")
        //->pluck('qquestion');

        $time3=ksgl::max('updated_at');
        // $name3=ksgl::where('eid','=',"2")
        //->pluck('ename');


        return view('teacher.zhuye',[
            'teacher1'=>$teacher1,
            'num1'=>$num1,
            'num2'=>$num2,
            'num3'=>$num3,
            'num4'=>$num4,
            'num31'=>$num31,
            'num32'=>$num32,
            'num33'=>$num33,
            'num34'=>$num34,
            'num35'=>$num35,
            'num36'=>$num36,
            'num311'=>$num311,
            'num322'=>$num322,
            'num333'=>$num333,
            'num344'=>$num344,
            'num355'=>$num355,
            'num366'=>$num366,
            'time1'=>$time1,
            //'name1'=>$name1,
            'time2'=>$time2,
            //'name2'=>$name2,
            'time3'=>$time3,
        ]);
    }

//    //试卷查看
//    public function sjck(){
//
//        $time1=sjgl::max('updated_at');
//        $grades=sjgl::where('updated_at','=',$time1)->get();
//        return view('teacher/sjglck',[
//            'grades'=>$grades,
//            'time1'=>$time1,
//        ]);
//    }


    /**
     * 试卷管理页面
     *
     */


    public function sjgl(\Illuminate\Http\Request $request){//试卷管理数据视图
        $teacher1=$request->session()->get('login.tname');//获取当前登录用户姓名
        $tests=sjgl::paginate(10);//分页显示个数为10
        return view('teacher.sjgl',[
            'teacher1'=>$teacher1,
            'tests'=>$tests,
        ]);
    }

    //试卷管理-保存
        public function savee(Request $request){
            $data1=$request->input('test');

            $test=new sjgl();
            $test->tname = $data1['tname'];
            $test->ttype = $data1['ttype'];

            if ($test->save()){
                return redirect('teacher/zhuye')->with('success','添加成功');
            }else{
                return redirect()->back();
            }

    }

    //试卷管理——查看
    public function sjglck(\Illuminate\Http\Request $request,$tno){
        $teacher1=$request->session()->get('login.tname');//获取当前登录用户姓名
        $data=sjgl::find($tno);
        $tname2=$data['tname'];
        $questions1=stgl::where('tname','=',$tname2)->get();
        return view('teacher.sjglck',[
            'teacher1'=>$teacher1,
            '$data'=>$data,
            'questions1'=>$questions1,
            'tname2'=>$tname2,
        ]);
    }

    //试卷管理——删除
    public function deletee($tno){

       $tests= sjgl::find($tno);
        if ($tests->delete()){
            return redirect('teacher/sjgl');
        }
    }


    /**
     * 试题管理页面
     *
     */
    public function stgl(\Illuminate\Http\Request $request){
        $teacher1=$request->session()->get('login.tname');//获取当前登录用户姓名
        $questions=stgl::paginate(8);//分页显示个数为10

        $tests=sjgl::get();//
        return view('teacher.stgl',[
            'teacher1'=>$teacher1,
            'questions'=>$questions,
            'tests'=>$tests,
        ]);
    }

    //试题创建-保存功能
    public function save(Request $request){
        $data=$request->input('question');

        $question=new stgl();
        $question->qsection = $data['qsection'];
        $question->qknow = $data['qknow'];
        $question->qquestion = $data['qquestion'];
        $question->tname = $data['tname'];
        $question->qa = $data['qa'];
        $question->qb = $data['qb'];
        $question->qc = $data['qc'];
        $question->qd = $data['qd'];


        if ($question->save()){
            return redirect('teacher/zhuye')->with('success','添加成功');
        }else{
            return redirect()->back();
        }
    }

    //试题管理——查看
    public function stglck(\Illuminate\Http\Request $request,$qno){
        $teacher1=$request->session()->get('login.tname');//获取当前登录用户姓名

        $tname2 = stgl::where(['qno'=>$qno])->first();
        $questions1=stgl::where('qno','=',$tname2->qno)->get();
        return view('teacher.stglck',[
            'teacher1'=>$teacher1,
            'questions1'=>$questions1,
            'tname2'=>$tname2,
        ]);

    }

    //试题管理——删除
    public function delete($qno){
        $question= stgl::find($qno);
        if ($question->delete()){
            return redirect('teacher/stgl');
        }
    }

    //试题管理——编辑
    public function stglxg(Request $request,$qno){
        $teacher1=$request->session()->get('login.tname');//获取当前登录用户姓名
        $tests=sjgl::get();
        $question=stgl::find($qno);
        if ($request->isMethod('POST')){

            $data=$request->input('question');
            $question->qsection = $data['qsection'];
            $question->qknow = $data['qknow'];
            $question->qquestion = $data['qquestion'];
            $question->tname = $data['tname'];
            $question->qa = $data['qa'];
            $question->qb = $data['qb'];
            $question->qc = $data['qc'];
            $question->qd = $data['qd'];
            if ($question->save()){
                return redirect('teacher/zhuye');
            }else{
                return redirect()->back();
            }

        }

        return view('teacher.stglxg',[
            'teacher1'=>$teacher1,
            'question'=>$question,
            'tests'=>$tests,
        ]);
    }

    /**
     * 成绩数据页面
     *
     */
    public function cjsj(\Illuminate\Http\Request $request){
        $teacher1=$request->session()->get('login.tname');//获取当前登录用户姓名
        $num = DB::table('grade')->count('gid');
        $grades=cjsj::get();
        return view('teacher.cjsj',[
            'teacher1'=>$teacher1,
            'grades'=>$grades,
            'num' => $num,
        ]);
    }

    //成绩数据——修改
    public function cjsjxg(Request $request,$gid){
        $teacher1=$request->session()->get('login.tname');//获取当前登录用户姓名
        $student=cjsj::find($gid);
        if ($request->isMethod('POST')){

            $data=$request->input('grade');
            $student->grades=$data['grades'];
            if ($student->save()){
                return redirect('teacher/zhuye');
            }else{
                return redirect()->back();
            }

        }

        return view('teacher.cjsjxg',[
            'teacher1'=>$teacher1,
            'student'=>$student,
        ]);
    }





    /**
     * 考试管理页面
     *
     */
    public function ksgl(\Illuminate\Http\Request $request){
        $teacher1=$request->session()->get('login.tname');//获取当前登录用户姓名
        $exams=ksgl::get();
        $grades=cjsj::get();
        $tests=sjgl::get();//
        return view('teacher.ksgl',[
            'teacher1'=>$teacher1,
            'exams'=>$exams,
            'grades'=>$grades,
            'tests'=>$tests,
        ]);
    }

    //创建考试
    public function savea(Request $request){
        $data=$request->input('exam');

        $exam=new ksgl();
        $exam->ename = $data['ename'];
        $exam->etype = $data['etype'];
        $exam->tname = $data['tname'];
        $exam->escore =$data['escore'];
        $exam->etime = $data['etime'];


        if ($exam->save()){
            return redirect('teacher/zhuye')->with('success','添加成功');
        }else{
            return redirect()->back();
        }
    }

    //考试管理——查看
    public function ksglck(\Illuminate\Http\Request $request,$ename){
        $teacher1=$request->session()->get('login.tname');//获取当前登录用户姓名
        $ename2 = ksgl::where(['ename'=>$ename])->first();
        $grades=cjsj::where('ename','=',$ename2->ename)->get();
        return view('teacher/ksglck',[
            'teacher1'=>$teacher1,
            'grades'=>$grades,
            'ename2'=>$ename2,
        ]);
    }

    public function back(){
        return redirect()->back();
    }

    //考试管理——删除
    public function deletea($eid){

        $exams= ksgl::find($eid);
        if ($exams->delete()){
            return redirect('teacher/ksgl');
        }
    }

}