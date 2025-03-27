<?php

namespace App\Http\Controllers;

use app\Models\Student;
use app\Models\College;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // 1: List all students (Filtering by college) - Still need ot add sorting  - (Still needs to be tested)
    public function index($collegeId){
        // Get the college from the college id
        $college = College::find($collegeId);

        // Show all students attending the college
        $students = $college->students;

        // Redirect to the index view
        return view('students.index', compact('students'));
    }
    
    // 2A: Navigates the user to the 'Create student' form  - (Still needs to be tested)
    public function create(){
        return view('students.create');
    }

    // 2B: Store student  - (Still needs to be tested)
    public function store(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->dob = $request->dob;
        $student->college_id = $request->college_id;
    
        // Save the newly created student
        $student->save();

        // Redirect back to the students index route
        return redirect()->route('students.index');
    }
    
    // 3A: Navigates the user to the 'Edit student' form  - (Still needs to be tested)
    public function edit(Student $student){
        return view('students.edit');
    }

    // 3B: Update student  - (Still needs to be tested)
    public function update(Request $request, Student $student){
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->dob = $request->dob;
        $student->college_id = $request->college_id;

        // Save the updated student details
        $student->save();

        // Redirect back to the students index route
        return redirect()->route('students.index');
    }

    // 4: Delete student  - (Still needs to be tested)
    public function destroy(Student $student){
        $student->delete();
    }
}
