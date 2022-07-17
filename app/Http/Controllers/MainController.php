<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    function save(Request $request){
        $request->validate([
            'name'=>'required',
            'student_number'=>'required|unique:students',
            'section_id'=>'required',
            'st_num_pass'=>'required|min:7'

        ]);

        $student = new student;

        $student->name = $request->name;
        $student->student_number = $request->student_number;
        $student->st_num_pass = Hash::make($request->st_num_pass);
        $student->section_id = $request->section_id;

        $save = $student->save();

        if($save){
            return back()->with('success','New User has been successfuly added');
        }else{
            return back()->with('fail','something went wrong, try again later');
        }
        
        
    }

    function check(Request $request){
        $request->validate([
            'student_number'=>'required',
            'st_num_pass'=>'required|min:7'
        ]);

        $userinfo = student::where('student_number','=',$request->student_number)->first();

        if(!$userinfo){
            return back()->with('fail','We do not recognize your number');
        }else{
            if(Hash::check($request->st_num_pass, $userinfo->st_num_pass)){
                $request->session()->put('LoggedUser',$userinfo->id);
                return redirect('student/dashboard');
            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

}
