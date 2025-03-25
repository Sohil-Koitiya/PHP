<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index() {
        $student = Student::all();
        return view('student.index',compact('student'));
    }

    public function create() {
        return view('student.create');
    }

    public function store(Request $request){
        // echo "store";exit;
        $s = new Student;
        $s->firstname = $request->fname;
        $s->lastname = $request->lname;
        $s->email = $request->email;
        $s->password = $request->password;

        $s->save();

        return redirect('/');
    }

    public function show($id){
        $student = Student::find($id);
        return view('student.show',compact('student'));
    }

    public function edit($id){
        $student = Student::find($id);
        return view('student.edit',compact('student'));
    }

    public function update(Request $request,$id){
        $student = Student::find($id);
        $student->firstname = $request->fname;
        $student->lastname = $request->lname;
        $student->email = $request->email;
        $student->password = $request->password;

        $student->update();
        return redirect('/');
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/');
    }

}
