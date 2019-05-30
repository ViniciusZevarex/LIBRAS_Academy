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
        $course->description       =  $request->input('descriptionexit');
        $course->save();

        return  redirect('course/dashboard');
    }

    public function list(){
        $courses = DB::table('course')->get();

        return view('course/list', compact('courses'));
    }

    public function addUnits(Request $request){
        $course_edit = $request->query('course');

        $course = DB::table('course')->join('unit','course.CodCourse', '=', 'unit.CodCourse')->get();;

        echo "<pre>";
        print_r($course);
        

    }
}
