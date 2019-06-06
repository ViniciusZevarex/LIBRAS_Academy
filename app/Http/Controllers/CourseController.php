<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Course;


class CourseController extends Controller
{
    public function dashboard(Request $request)
    {
        $course_id = $request->query('course');
        $course = DB::table('course')->where('CodCourse', $course_id)->get();

        return view('course/dashboard', compact('course'));
    }

    public function create()
    {
    	return view('course/create');
    }

    public function register(Request $request)
    {
        $course                     =  new Course();
        $course->title              =  $request->input('title');
        $course->description        =  $request->input('description');
        $course->save();

        return  redirect('course/list');
    }

    public function list(){
        $courses = DB::table('course')->get();

        return view('course/list', compact('courses'));
    }

}
