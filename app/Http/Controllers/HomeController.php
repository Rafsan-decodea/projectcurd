<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
class HomeController extends Controller
{
    public function index()
    {
        return view('pages.welcome');
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
}
