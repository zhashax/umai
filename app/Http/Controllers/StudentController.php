<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $user = User::all();
        return view('user.widgets.add_student',['user'=>$user]);
    }
    public function store_student(Request $request){
        $student = new Student;
        $student->fullname=$request->fullname;
        $student->address=$request->address;
        $student->email=$request->email;
        $student->sex=$request->sex;
        $student->mobile=$request->mobile;
        $student->class=$request->class;
        $student->school_name=$request->school_name;
        $student->discounts=$request->discounts;
        $student->comment=$request->comment;
        $student->save();
        return redirect()->route('user.home')->with('status','Студент успешно добавлен!');

    }
}
