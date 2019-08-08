<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Unit;
use App\Module;

class ModuleController extends Controller
{
    public function showForm(Request $data){
    	$units = DB::table('unit')->get();
        $course = $data['course'];

    	return view('module.form', compact('units','course'));
    }

    public function store(Request $request){
    	$module               	= new Module();
        $module->title        	= $request->input('title');
        $module->CodUnit    	= $request->input('CodUnit');
        $module->save();

        return  redirect(route('course_dashboard', ['course' => $request->input('course')]));
    }
}
