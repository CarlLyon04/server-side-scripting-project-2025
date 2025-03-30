<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\College;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // 1: List all students (Filtering by college) - Still need ot add sorting  - (Still needs to be tested)
    public function index(Request $request){
        // // Get the college from the college id
         //$college = College::find($collegeId);

        // // Show all students attending the college
        // $students = $college->students;

        $sortStudents= $request->get('sortStudents', 'id');

        $students = Student::orderBy($sortStudents)->get();
        // Redirect to the index view
        return view('students.students-index', compact('students', 'sortStudents'));
    }
    
    // 2A: Navigates the user to the 'Create student' form  - (Still needs to be tested)
    public function create(){
        $colleges = College::all();
        return view('students.students-create', compact('colleges'));
    }

    // 2B: Store student  - (Still needs to be tested)
    public function store(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->dob = $request->dob;

        $college = College::where('name', $request->collegeName)->first();
        $student->college_id = $college->id;
    
        // Save the newly created student
        $student->save();

        // Redirect back to the students index route
        return redirect()->route('students.index');
    }

    // For viewing
    public function show(Student $student){
        return view('students.students-view', compact('student'));
    }
    
    // 3A: Navigates the user to the 'Edit student' form  - (Still needs to be tested)
    public function edit(Student $student){
        $colleges = College::all();
        return view('students.students-edit', compact('student', 'colleges'));
    }

    // 3B: Update student  - (Still needs to be tested)
    public function update(Request $request, Student $student){
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->dob = $request->dob;
        
        $college = College::where('name', $request->collegeName)->first();
        $student->college_id = $college->id;
        // Save the updated student details
        $student->save();

        // Redirect back to the students index route
        return redirect()->route('students.index');
    }

    // 4: Delete
    public function destroy(Student $student){
        // Delete the student record
        $student->delete();
        
        // Redirect back to the students index route
        return redirect()->route('students.index');
    }
}
