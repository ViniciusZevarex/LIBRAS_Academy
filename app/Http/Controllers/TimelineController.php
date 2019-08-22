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

    public function criar_elemento(Request $data){
        echo $data['CodModule'];
        echo $data['tipoElemento'];
    	// if($data['tipoElemento'] == 'E'){
    	// 	return redirect()->route('form_explain',['CodModule' => $data['CodModule']]);
    	// }elseif ($data['tipoElemento'] == 'V'){
    	// 	echo "Vocabulário";
    	// }elseif($data['tipoElemento'] == 'Q'){
    	// 	echo "Quiz";
    	// }

    }
}
