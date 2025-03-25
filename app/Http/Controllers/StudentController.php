<?php

namespace App\Http\Controllers;

use app\Models\Student;
use app\Models\College;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // 1: List all students (Filtering by college) - Still need ot add sorting
    public function index($collegeId){
        // Get the college from the college id
        $college = College::find($collegeId);

        // Show all students attending the college
        $students = $college->students;
        return $students;
    }
    
    // 2A: Create student
    public function create(){
        return view('students.create');
    }

    // 2B: Store student
    public function store(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->dob = $request->dob;
        $student->college_id = $request->college_id;
    }
    
    // 3A: Edit student
    public function edit(Student $student){
        return view('students.edit');
    }

    // 3B: Update student
    public function update(Request $request, Student $student){
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->dob = $request->dob;
        $student->college_id = $request->college_id;

        // Save the updated student details
        $student->save();
    }

    // 4: Delete student
    public function destroy(Student $student){
        $student->delete();
    }
}
