<?php
namespace App\Http\Controllers;

use App\cjcx;
use App\cjsj;
use App\js;
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


//use App\question;
//use App\Http\Controllers\save;
//use http\Env\Request;

class AdminController extends Controller
{

    //主页
    public function zhuye()
    {
        $num1 = ksgl::count();
        $num2 = xs::count();
        $num3 = stgl::count();
        $num4 = DB::table('exam')->sum('enum');
        $num31 = stgl::where('qsection', '=', "第一章")
            ->count();
        $num32 = stgl::where('qsection', '=', "第二章")
            ->count();
        $num33 = stgl::where('qsection', '=', "第三章")
            ->count();
        $num34 = stgl::where('qsection', '=', "第四章")
            ->count();
        $num35 = stgl::where('qsection', '=', "第五章")
            ->count();
        $num36 = stgl::where('qsection', '=', "第六章")
            ->count();
        $num311 = stgl::where('qknow', '=', "知识点1")
            ->count();
        $num322 = stgl::where('qknow', '=', "知识点2")
            ->count();
        $num333 = stgl::where('qknow', '=', "知识点3")
            ->count();
        $num344 = stgl::where('qknow', '=', "知识点4")
            ->count();
        $num355 = stgl::where('qknow', '=', "知识点5")
            ->count();
        $num366 = stgl::where('qknow', '=', "知识点6")
            ->count();

        $time1 = sjgl::max('updated_at');
        //$name1= DB::table('test')
        //->where ('updated_at','=','$time1');

        $time2 = stgl::max('updated_at');
        //$name2=stgl::where('qno','=',"8")
        //->pluck('qquestion');

        $time3 = ksgl::max('updated_at');
        // $name3=ksgl::where('eid','=',"2")
        //->pluck('ename');

        return view('admin.zhuye', [
            'num1' => $num1,
            'num2' => $num2,
            'num3' => $num3,
            'num4' => $num4,
            'num31' => $num31,
            'num32' => $num32,
            'num33' => $num33,
            'num34' => $num34,
            'num35' => $num35,
            'num36' => $num36,
            'num311' => $num311,
            'num322' => $num322,
            'num333' => $num333,
            'num344' => $num344,
            'num355' => $num355,
            'num366' => $num366,
            'time1' => $time1,
            //'name1'=>$name1,
            'time2' => $time2,
            //'name2'=>$name2,
            'time3' => $time3,
            //'name3'=>$name3,
        ]);
    }



    /**
     *
     * 试卷管理板块
     */

    //试卷管理
    public function sjgl()
    {

        //试卷管理数据视图
        $tests = sjgl::paginate();//分页显示个数为10
        return view('admin.sjgl', [
            'tests' => $tests,
        ]);
    }

    //试卷管理-保存
    public function savee(Request $request)
    {
        $data1 = $request->input('test');

        $test = new sjgl();
        $test->tname = $data1['tname'];
        $test->ttype = $data1['ttype'];

        if ($test->save()) {
            return redirect('admin/zhuye')->with('success', '添加成功');
        } else {
            return redirect()->back();
        }
    }

    //试卷管理——查看
    public function sjglck($tno)
    {
        $data = sjgl::find($tno);
        $tname2 = $data['tname'];
        $questions1 = stgl::where('tname', '=', $tname2)->get();
        return view('admin.sjglck', [

            '$data' => $data,
            'questions1' => $questions1,
            'tname2' => $tname2,
        ]);
    }

    //试卷管理——删除
    public function deletee($tno)
    {

        $tests = sjgl::find($tno);
        if ($tests->delete()) {
            return redirect('admin/sjgl');
        }
    }

    /**
     *
     * 试题管理板块
     */

    //试题管理页面
    public function stgl(Request $request)
    {

        $questions = stgl::paginate(8);//分页显示个数为8
        $tests = sjgl::get();//
        return view('admin.stgl', [
            'questions' => $questions,
            'tests' => $tests,
        ]);
    }


    //试题创建-保存功能
    public function save(Request $request)
    {
        $data = $request->input('question');

        $question = new stgl();
        $question->qsection = $data['qsection'];
        $question->qknow = $data['qknow'];
        $question->qquestion = $data['qquestion'];
        $question->tname = $data['tname'];
        $question->qa = $data['qa'];
        $question->qb = $data['qb'];
        $question->qc = $data['qc'];
        $question->qd = $data['qd'];


        if ($question->save()) {
            return redirect('admin/zhuye')->with('success', '添加成功');
        } else {
            return redirect()->back();
        }
    }

    //试题管理——查看
    public function stglck($qno)
    {

        $tname2 = stgl::where(['qno' => $qno])->first();
        $questions1 = stgl::where('qno', '=', $tname2->qno)->get();
        return view('admin.stglck', [
            'questions1' => $questions1,
            'tname2' => $tname2,
        ]);

    }

    //试题管理——删除
    public function delete($qno)
    {
        $question = stgl::find($qno);
        if ($question->delete()) {
            return redirect('admin/stgl');
        }
    }

    //试题管理——编辑
    public function stglxg(Request $request, $qno)
    {
        $teacher1 = $request->session()->get('login.tname');//获取当前登录用户姓名
        $tests = sjgl::get();
        $question = stgl::find($qno);
        if ($request->isMethod('POST')) {

            $data = $request->input('question');
            $question->qsection = $data['qsection'];
            $question->qknow = $data['qknow'];
            $question->qquestion = $data['qquestion'];
            $question->tname = $data['tname'];
            $question->qa = $data['qa'];
            $question->qb = $data['qb'];
            $question->qc = $data['qc'];
            $question->qd = $data['qd'];
            if ($question->save()) {
                return redirect('admin/zhuye');
            } else {
                return redirect()->back();
            }

        }

        return view('admin.stglxg', [
            'teacher1' => $teacher1,
            'question' => $question,
            'tests' => $tests,
        ]);
    }


    /**
     * 成绩数据页面
     * @return
     */


    //成绩数据页面
    public function cjsj()
    {
        $num = DB::table('grade')->count('gid');
        $grades = cjsj::get();
        return view('admin.cjsj', [
            'grades' => $grades,
            'num' => $num,
        ]);
    }

    //成绩数据——修改
    public function cjsjxg(Request $request, $gid)
    {
        $teacher1 = $request->session()->get('login.tname');//获取当前登录用户姓名
        $student = cjsj::find($gid);
        if ($request->isMethod('POST')) {

            $data = $request->input('grade');
            $student->grades = $data['grades'];
            if ($student->save()) {
                return redirect('admin/zhuye');
            } else {
                return redirect()->back();
            }

        }

        return view('admin.cjsjxg', [
            'teacher1' => $teacher1,
            'student' => $student,
        ]);
    }



    /**
     * 考试管理页面
     * @return
     */
    //试题管理页面
    public function ksgl()
    {
        $exams = ksgl::get();
        return view('admin.ksgl', [
            'exams' => $exams,
        ]);
    }

    //创建考试
    public function savea(Request $request)
    {
        $data = $request->input('exam');

        $exam = new ksgl();
        $exam->ename = $data['ename'];
        $exam->etype = $data['etype'];
        $exam->tname = $data['tname'];
        $exam->escore = $data['escore'];
        $exam->etime = $data['etime'];


        if ($exam->save()) {
            return redirect('admin/zhuye')->with('success', '添加成功');
        } else {
            return redirect()->back();
        }
    }

    //考试管理——查看
    public function ksglck(\Illuminate\Http\Request $request, $ename)
    {
        $teacher1 = $request->session()->get('login.euser');//获取当前登录用户姓名

        $ename2 = ksgl::where(['ename' => $ename])->first();
        $grades = cjsj::where('ename', '=', $ename2->ename)->get();
        return view('admin/ksglck', [
            'teacher1' => $teacher1,
//            'exams'=>$exams,
            'grades' => $grades,
            'ename2' => $ename2,
        ]);
    }

    public function back()
    {
        return redirect()->back();
    }

    //考试管理——删除
    public function deletea($eid)
    {

        $exams = ksgl::find($eid);
        if ($exams->delete()) {
            return redirect('admin/ksgl');
        }
    }


    /**
     * 学生页面
     * @return
     */

    //学生页面
    public function xs()
    {

        $num = DB::table('student')->count('sno');
        $students = xs::get();
        return view('admin.xs', [
            'students' => $students,
            'num' => $num,
        ]);
    }

    public function xsxg(Request $request, $sno)
    {
        $student = xs::find($sno);
//        dd($sno);
        if ($request->isMethod('POST')) {

            $data = $request->input('student');
//               dd($data);
            $student->sno = $data['sno'];
            $student->sno = $data['sno'];
            $student->ssex = $data['ssex'];
            $student->suser = $data['suser'];
            $student->spassword = $data['spassword'];
            if ($student->save()) {
                return redirect('admin/xs');
            } else {
                return redirect()->back();
            }

        }
        return view('admin.xsxg', [
            'student' => $student,
        ]);
    }

    public function xssc($sno){

        $student= xs::find($sno);
        $num = DB::table('student')->count('sno');
        if ($student->delete()){
            return view('admin.xs',[
            'num' => $num,]);
        }else{
            redirect('admin.zhuye');
        }
    }




    /**
     * 教师页面
     * @return
     */

    //教师页面
    public function js()
    {
        $teachers = js::get();
        $num = DB::table('teacher')->count('tno');
        return view('admin.js', [
            'teachers' => $teachers,
            'num' => $num,
        ]);
    }


    public function jsxg(Request $request, $tno)
    {
        $teacher = js::find($tno);
//        dd($sno);
        if ($request->isMethod('POST')) {

            $data = $request->input('teacher');
//               dd($data);
            $teacher->tno = $data['tno'];
            $teacher->tname = $data['tname'];
            $teacher->tuser = $data['tuser'];
            $teacher->tpassword = $data['tpassword'];
            if ($teacher->save()) {
                return redirect('admin/js');
            } else {
                return redirect()->back();
            }

        }
        return view('admin.jsxg', [
            'teacher' => $teacher,
        ]);
    }

    public function jssc($tno){

        $teacher= js::find($tno);
//        $num = DB::table('teacher')->count('tno');
//      dd($teacher);
        if ($teacher->delete()){
            return view('admin.js');
        }
//        return view('admin.js',[
//            'num' => $num,
//        ]);

    }

}
