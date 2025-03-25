<?php

namespace App\Http\Controllers;

use app\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // 1: List all students
    public function index(){
        $students = Student::all();
        return view('students.index', compact('students'));
    }
    
    // 2: Create student
    
    public function create(){
        return view('students.create');
    }
    
    // 3: Edit student
    
    public function edit(Student $student){
        return view('students.edit', compact('students'));
    }

    // 4: Delete student
    public function delete(Student $student){
        $student->delete();
        return redirect()->route('students.index');
    }
}
