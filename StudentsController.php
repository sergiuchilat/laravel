<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //

    public function students(){
        $studentObject = new Student();
        $studentList = $studentObject->getList();
        return view('student/list', [
            'students' => $studentList
        ]);
    }

    public function add()
    {
        return view('student/add');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);


        $studentObject = new Student();

        $data = $request->all();

        $studentObject->fill($data);
        $studentObject->save();
        return redirect('/students/add')->with('success', true);
    }
}
