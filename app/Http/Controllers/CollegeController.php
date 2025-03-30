<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CollegeController extends Controller
{
    // 1: List all colleges - (Still needs to be tested)
    public function index(){
        $colleges = College::all();
        
        return view('colleges.colleges-index', compact('colleges'));
    }

    // 2A: Navigates the user to the 'Create college' form  - (Still needs to be tested)
    public function create(){

        return view('colleges.colleges-create');
    }

    // 2B: Store college  - (Still needs to be tested)
    public function store(Request $request){
        $request->validate(['name' => 'required|unique:colleges,name|string|max:255', 'address' => 'required|string|max:255']);

        $college = new College();
        $college->name = $request->name;
        $college->address = $request->address;

        // Save the newly created college
        $college->save();

        // Redirect back to the colleges index route
        return redirect()->route('colleges.index')->with('success', 'Succesfully created college');
    }

    // For viewing: 
    public function show(College $college){
        return view('colleges.colleges-view', compact('college'));
    }

    // 3A: Navigates the user to the 'Edit college' form  - (Still needs to be tested)
    public function edit(College $college){
        return view('colleges.colleges-edit', compact('college'));
    }

    // 3B: Update college  - (Still needs to be tested)
    public function update(Request $request, College $college){
        $request->validate(['name' => 'required|string|max:255|', 'address' => 'required|string|max:255']);

        $college->name = $request->name;
        $college->address = $request->address;

        // Save the updated college details
        $college->save();

        // Redirect back to the colleges index route
        return redirect()->route('colleges.index')->with('success', 'Succesfully updated college');       
    }
}
