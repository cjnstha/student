<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;



class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students', compact('students'));
    }

    public function addStudents(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //Check user already exits or not//
            $userCount = Student::where('email', $data['email'])->count();
            if ($userCount > 0) {
                return redirect()->back()->with('flash_message_error', 'Email already exists');
            } else {
                $students = new Student;
                $students->firstname = $data['firstname'];
                $students->middlename = $data['middlename'];
                $students->lastname = $data['lastname'];
                $students->age = $data['age'];
                $students->grade = $data['grade'];
                $students->email = $data['email'];
                $students->save();
                return redirect('/api/students');
            }
        }
        return view('students');
    }

    public function show($students)
    {
        $students = Student::findOrFail($students);
        return view('student-detail', compact('students'));
    }

    public function edit($students)
    {
        $students = Student::findOrFail($students);
        return view('student-edit', compact('students'));
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $students = Student::findOrFail($id);
            $students->firstname = $data['firstname'];
            $students->middlename = $data['middlename'];
            $students->lastname = $data['lastname'];
            $students->age = $data['age'];
            $students->grade = $data['grade'];
            $students->email = $data['email'];
            $students->update();
            return redirect('/api/students');
        }
    }

    public function delete($students)
    {
        $students = Student::findOrfail($students)->delete();
        return redirect()->back();
    }
}
