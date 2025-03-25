<?php

namespace App\Http\Controllers;

use app\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    // 1: List all colleges
    public function index(){
        $colleges = College::all();
        return view('colleges.index', compact('colleges'));
    }

    // 2: Create college

    public function create(){
        return view('colleges.create');
    }

    // 3: Edit college

    public function edit(College $college){
        return view('colleges.edit', compact('college'));
    }
}
