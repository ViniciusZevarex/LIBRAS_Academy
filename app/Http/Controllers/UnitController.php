<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Unit;


class UnitController extends Controller
{

    public function create(Request $request){
        $unit               =  new Unit();
        $unit->title        =  $request->input('title');
        $unit->CodCourse    =  $request->input('CodCourse');
        $unit->save();

        return  redirect(route('course_dashboard', ['course' => $request->input('CodCourse')]));
    }

    public function showForm(){
        $courses = DB::table('course')->get();

        return view('unit.create',compact('courses'));
    }
}
