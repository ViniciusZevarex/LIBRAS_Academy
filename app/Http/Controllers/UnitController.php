<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnitController extends Controller
{
    
    public function addUnits(Request $request){
        $course_edit = $request->query('course');

        $course = DB::table('course')->join('unit','course.CodCourse', '=', 'unit.CodCourse')->get();;

        echo "<pre>";
        print_r($course);
        

    }
}
