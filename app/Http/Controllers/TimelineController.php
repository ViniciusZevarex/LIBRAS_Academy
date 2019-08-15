<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Module;
use App\Timeline;

class TimelineController extends Controller
{
    public function edit(Request $data){
		$module = DB::table('module')->where('CodModule', $data['module'])->get();
    	$module = $module[0];
		
    	return view('timeline.edit',compact('module'));
    }
}
