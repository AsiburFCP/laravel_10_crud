<?php

namespace App\Http\Controllers;

use App\Models\StudentInfo;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function Index(){
        return view('home');
    }

    public function Store(Request $request){
        $request->validate([
            'name' => 'required',
            'reg' => 'required',
            'email' => 'required',
        ]);

        StudentInfo::create([
            'name' => $request['name'],
            'reg' => $request['reg'],
            'email' => $request['email'],
        ]);

        return redirect()->route('display.info')->with('message', 'Your Record Added Successfully');
    }

    public function Display(){
        $students = StudentInfo::get();
        return view('display', compact('students'));
    }

    public function Edit($id){
        $student = StudentInfo::find($id);
        return view('edit', compact('student'));
    }

    public function Update(Request $request){
        $id = $request['id'];

        $request->validate([
            'name' => 'required',
            'reg' => 'required',
            'email' => 'required',
        ]);

        StudentInfo::find($id)->Update([
            'name' => $request['name'],
            'reg' => $request['reg'],
            'email' => $request['email'],
        ]);

        return redirect()->route('display.info')->with('message', 'Your Record Updated Successfully');
    }

    public function Delete(Request $request){
        $id = $request['id'];
        StudentInfo::find($id)->delete();
        return redirect()->route('display.info')->with('message', 'Record Deleted Successfully');
    }
}
