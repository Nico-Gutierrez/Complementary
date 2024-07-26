<?php

namespace App\Http\Controllers;

use App\Models\courses;
use Illuminate\Http\Request;

class Relacioncontroller extends Controller
{
    public function index(){
        $courses = courses::all();
        return view('welcome',compact('courses'));
    }
}
