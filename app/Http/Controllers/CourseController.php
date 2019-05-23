<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;


class CourseController extends Controller
{
    public function index()
    {
    	return view('course/dashboard');
    }

    public function create()
    {
    	return view('course/create');
    }

    public function register(Request $request)
    {
        $course                     =  new Course();
        $course->title              =  $request->input('title');
        $course->description       =  $request->input('description');
        $course->save();

        return  redirect('course/dashboard');
    }
}
