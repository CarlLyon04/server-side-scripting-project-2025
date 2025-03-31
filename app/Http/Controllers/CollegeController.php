<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    // 1: List all colleges
    public function index(){
        // Retrieve all the colleges
        $colleges = College::all();
        
        // Redirect the user back to the college index page, passing all the updated colleges to be sent to the view.
        return view('colleges.colleges-index', compact('colleges'));
    }

    // 2A: Navigates the user to the 'Create college' form
    public function create(){
        // Redirect the user to the college create form page
        return view('colleges.colleges-create');
    }

    // 2B: Store college
    public function store(Request $request){
        // Performs validations on the name, and address fields for the college
        $request->validate(['name' => 'required|unique:colleges,name|string|max:255', 'address' => 'required|string|max:255']);

        // Creates a new instance of college and assigns the specified form request details to the instance properties.
        $college = new College();
        $college->name = $request->name;
        $college->address = $request->address;

        // Save the newly created college with its properties
        $college->save();

        // Redirect back to the colleges index page along with a success message for the alert
        return redirect()->route('colleges.index')->with('success', 'Succesfully created college');
    }

    // For viewing: 
    public function show(College $college){
        // Redirect the user to the college view form page, passing the specified college instance to be viewed
        return view('colleges.colleges-view', compact('college'));
    }

    // 3A: Navigates the user to the 'Edit college' form
    public function edit(College $college){
        //  Redirect the user to the college edit form page with the specified college instance to be updated
        return view('colleges.colleges-edit', compact('college'));
    }

    // 3B: Update college
    public function update(Request $request, College $college){
        // Performs validations on the name and address fields for the college. The 'unique' validation is removed as updating the instance itself will not cause any overlapping issues
        $request->validate(['name' => 'required|string|max:255|', 'address' => 'required|string|max:255']);

        // Updates the specified college instance properties with the form request details
        $college->name = $request->name;
        $college->address = $request->address;

        // Save the updated college details
        $college->save();

        // Redirect back to the colleges index page along with a success message for the alert
        return redirect()->route('colleges.index')->with('success', 'Succesfully updated college');       
    }
}
