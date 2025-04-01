<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\College;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // 1: List all students
    public function index(Request $request){
        // Prepare a query to be used in filtering the students
        $query = Student::query();

        // Retrieve all available colleges
        $colleges = College::all();

        // Retrieve the sorting filter for colleges
        $sortColleges = $request->get('sortColleges');

        // Retrieve the sorting filter for students (Using the ID by default)
        $sortStudents= $request->get('sortStudents', 'id');

        // Choose between sorting by the colleges or the student (This functionality could be improved however as it does not allow filtering at the same time)
        if($sortColleges){
            // If a filter for colleges is chosen, filter based on the selected college id
            $query->where('college_id', $sortColleges);
        }

        else{
            // If a filter for students is chosen, filter based on either the students ID or name (Ascending Order)
            $query->orderBy($sortStudents);
        }

        // List the students based on the filtered query chosen
        $students = $query->get();

        // Redirect to the students index page, passing the students (either filtered / unfiltered) and the colleges (for the college ID)
        return view('students.students-index', compact('students', 'sortStudents', 'colleges', 'sortColleges'));
    }
    
    // 2A: Navigates the user to the 'Create student' form
    public function create(){
        // Retrieve all the existing colleges
        $colleges = College::all();

        // Redirect the user to the students create form page, passing the colleges so that such colleges can be used in the dropdown select to assign the student
        return view('students.students-create', compact('colleges'));
    }

    // 2B: Store student
    public function store(Request $request){
        // Perform validations for the student fields for name, email, phone (using regex for maltese phone numbers), dob and collegeName
        $request->validate(
            ['name' => 'required|string|max:255', 
             'email' => 'required|email|unique:students,email|string|max:255',
             'phone' => 'required|regex:/^\+356\d{8}$/|string|max:255',
             'dob' => 'required|date|date_format:Y/m/d|max:255',
             'collegeName' => 'required|string|max:255'
            ]
        );

        // Create a new student instance and assign the specified form details to the student instance for assignment
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->dob = $request->dob;
        
        // Searches for the college specified in the form and stores it in $college
        $college = College::where('name', $request->collegeName)->first();

        // The college ID for the student (college of choice) is then assigned to the student by retrieving the ID of the specific college found in $college
        $student->college_id = $college->id;
    
        // Save the newly created student with the assigned details
        $student->save();

        // Redirect back to the students index route
        return redirect()->route('students.index')->with('success', 'Succesfully created student');
    }

    // For viewing
    public function show(Student $student){
        // Redirect the user to the student view form page passing the specified student to be viewed
        return view('students.students-view', compact('student'));
    }
    
    // 3A: Navigates the user to the 'Edit student' form
    public function edit(Student $student){
        // Retrieve all the existing colleges
        $colleges = College::all();

        // Redirect the user back to the student edit form page, passing the specified student along with the available colleges that can be used (For example if the student is changing college)
        return view('students.students-edit', compact('student', 'colleges'));
    }

    // 3B: Update student
    public function update(Request $request, Student $student){
        // Perform validations for the student fields for name, (email does not need to be unique when being edited), phone (using regex for maltese phone numbers), dob and collegeName
        $request->validate(
            ['name' => 'required|string|max:255', 
             'email' => 'required|email|string|max:255',
             'phone' => 'required|regex:/^\+356\d{8}$/|string|max:255',
             'dob' => 'required|date|date_format:Y/m/d|max:255',
             'collegeName' => 'required|string|max:255'
            ]
        );
        
        // Update the specified strudent instance properties with the form request details
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->dob = $request->dob;
        
        // Searches for the college specified in the form and stores it in $college
        $college = College::where('name', $request->collegeName)->first();

        // The college ID for the student (college of choice) is then assigned to the student by retrieving the ID of the specific college found in $college
        $student->college_id = $college->id;

        // Save the updated student details
        $student->save();

        // Redirect back to the students index page with a success message
        return redirect()->route('students.index')->with('success', 'Succesfully updated student');
    }

    // 4: Delete
    public function destroy(Student $student){
        // Delete the specified student record
        $student->delete();
        
        // Redirect back to the students index page
        return redirect()->route('students.index');
    }
}
