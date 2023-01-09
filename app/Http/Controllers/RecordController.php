<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use App\Models\User;

class RecordController extends Controller
{

    public function recordView()
    {
        $records = Record::all();
        $user = User::all();
        return view('user.records',['user' => $user],['records'=>$records]);
    }
    public function index(){
        $records = Record::all();
        $user = User::all();
        return view('user.records',['user'=>$user],['records'=>$records]);
    }
    public function store_record(Request $request){
        $record = new Record();
        $record->fullname=$request->fullname;
        $record->address=$request->address;
        $record->email=$request->email;
        $record->gender=$request->gender;
        $record->mobile=$request->mobile;
        $record->class=$request->class;
        $record->school_name=$request->school_name;
        $record->discounts=$request->discounts;
        $record->comment=$request->comment;
        $record->save();
        return redirect()->route('user.records')->with('status','Запись успешно добавлен!');

    }
    public function delete_record($id){
        $record_delete = Record::where('id', $id)->delete();
        if($record_delete){
            return back()->with('success!','deleted');
        }
        return back()->with('error','Post not deleted');

    }
}
