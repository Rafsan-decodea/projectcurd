<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
class HomeController extends Controller
{
    public function index()
    { 
        $data['student'] = student::all();
        return view('pages.welcome',$data);
    }
    public function create()
    {
         return view('pages.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>'required',
            'roll' => 'required',
            'class' =>'required',
            'email' =>'required',
        ]);
        $student = new student;
        $student->name =$request->name;
        $student->roll=$request->roll;
        $student->class=$request->email;
        $student->email=$request->email;
        $student->save();
        return redirect(route('home'))->with('successMsg','data_update_seccess');
    }
    public function edit($id)
    {
        $data['student_id'] = student::find($id);
        return view('pages.edit',$data);
    }
}
