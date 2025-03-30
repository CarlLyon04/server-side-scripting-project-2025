<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\College;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // 1: List all students (Filtering by college) - Still need ot add sorting  - (Still needs to be tested)
    public function index(Request $request){
        // Prepare a query to be used in filtering the students
        $query = Student::query();

        // Retrieve all available colleges
        $colleges = College::all();

        // Retrieve the sorting filter for colleges
        $sortColleges = $request->get('sortColleges');

        // Retrieve the sorting filter for students
        $sortStudents= $request->get('sortStudents', 'id');

        // Choose between sorting by the colleges or the student (This functionality could be improved however as it does not allow filtering at the same time)
        if($sortColleges){
            // If a filter for colleges is chosen, filter based on the selected college
            $query->where('college_id', $sortColleges);
        }

        else{
            // If a filter for students is chosen, filter based on either the students ID or name (Ascending Order)
            $query->orderBy($sortStudents);
        }

        // List the students based on the filtered query chosen
        $students = $query->get();

        // Redirect to the index view
        return view('students.students-index', compact('students', 'sortStudents', 'colleges', 'sortColleges'));
    }
    
    // 2A: Navigates the user to the 'Create student' form  - (Still needs to be tested)
    public function create(){
        $colleges = College::all();
        return view('students.students-create', compact('colleges'));
    }

    // 2B: Store student  - (Still needs to be tested)
    public function store(Request $request){
        $request->validate(
            ['name' => 'required|string|max:255', 
             'email' => 'required|email|unique:students,email|string|max:255',
             'phone' => 'required|regex:/^\+356\d{8}$/|string|max:255',
             'dob' => 'required|date|date_format:Y/m/d|max:255',
             'collegeName' => 'required|string|max:255'
            ]
        );

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
        return redirect()->route('students.index')->with('success', 'Succesfully created student');
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
        $request->validate(
            ['name' => 'required|string|max:255', 
             'email' => 'required|email|unique:students,email|string|max:255',
             'phone' => 'required|regex:/^\+356\d{8}$/|string|max:255',
             'dob' => 'required|date|date_format:Y/m/d|max:255',
             'collegeName' => 'required|string|max:255'
            ]
        );
        
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->dob = $request->dob;
        
        $college = College::where('name', $request->collegeName)->first();
        $student->college_id = $college->id;
        // Save the updated student details
        $student->save();

        // Redirect back to the students index route
        return redirect()->route('students.index')->with('success', 'Succesfully updated student');
    }

    // 4: Delete
    public function destroy(Student $student){
        // Delete the student record
        $student->delete();
        
        // Redirect back to the students index route
        return redirect()->route('students.index');
    }
}
