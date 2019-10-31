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

    public function showForm(Request $data)
    {
        if(isset($data->course)){
            $course = DB::table('course')->where('CodCourse',$data->course)->get();

            return view('course/form')->with('course',$course);
        }else{
            return view('course/form');
        }
    }

    public function store(Request $request)
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

    public function update(Request $data){
        $course = Course::findOrFail($data->CodCourse);
        $course->Title = $data->title;
        $course->description = $data->description;
        $course->save();

        return redirect()->route('course_list');
    }

    public function delete(Request $data){
        DB::table('users')->where('CodCourse',$data->course)->delete();

        return redirect()->back();
    }

}
