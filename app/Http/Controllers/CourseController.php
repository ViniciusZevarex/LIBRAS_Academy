<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Course;
use App\Unit;
use App\Module;


class CourseController extends Controller
{
    public function dashboard(Request $request)
    {
        //get course
        $course_id = $request->query('course');
        $course = DB::table('course')->where('CodCourse', $course_id)->get();

        //get unit of this course
        $unit = DB::table('unit')->where('CodCourse', $course_id)->get();

        foreach ($unit as $u) {
            $CodUnit = $u->CodUnit;
            $modules = DB::table('module')->where('CodUnit', $CodUnit)->get();
            $u->modules = $modules;
        }

        foreach($course as $c){
            $c->units = $unit;
        }
        
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
