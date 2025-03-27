<?php

namespace App\Http\Controllers;

use app\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    // 1: List all colleges - (Still needs to be tested)
    public function index(){
        $colleges = College::all();
        return $colleges;
    }

    // 2A: Navigates the user to the 'Create college' form  - (Still needs to be tested)
    public function create(){
        return view('colleges.create');
    }

    // 2B: Store college  - (Still needs to be tested)
    public function store(Request $request){
        $college = new College();
        $college->title = $request->title;
        $college->address = $request->address;

        // Save the newly created college
        $college->save();
    }

    // 3A: Navigates the user to the 'Edit college' form  - (Still needs to be tested)
    public function edit(College $college){
        return view('colleges.edit');
    }

    // 3B: Update college  - (Still needs to be tested)
    public function update(Request $request, College $college){
        $college->title = $request->title;
        $college->address = $request->address;

        // Save the updated college details
        $college->save();
    }
}
