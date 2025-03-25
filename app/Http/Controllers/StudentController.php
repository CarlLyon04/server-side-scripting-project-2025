<?php

namespace App\Http\Controllers;

use app\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // 1: List all students (Filtering by college)
    public function index(){
        // -TBA
    }
    
    // 2: Create student
    public function create(){
        // -TBA
    }
    
    // 3: Edit student
    public function edit(Student $student){
        // -TBA
    }

    // 4: Delete student
    public function destroy(Student $student){
        // -TBA
    }
}
