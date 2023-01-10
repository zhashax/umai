<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(){
        $students = User::find(1)->students;
        $user = User::all();
        return view('admin.students',['user'=>$user],['students'=>$students]);
    }
    public function store_student(Request $request){
    
        $student = new Student;
        $student->fullname=$request->fullname;
        $student->user_id =$request->user_id;
        $student->address=$request->address;
        $student->email=$request->email;
        $student->sex=$request->sex;
        $student->mobile=$request->mobile;
        $student->class=$request->class;
        $student->school_name=$request->school_name;
        $student->discounts=$request->discounts;
        $student->comment=$request->comment;
        $student->save();
        return redirect()->route('user.students')->with('status','Студент успешно добавлен!');

    }
    public function delete_student($id){
        $student_delete = Student::where('id', $id)->delete();
        if($student_delete){
            return back()->with('success!','deleted');
        }
        return back()->with('error','Post not deleted');

    }
}
