<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Module;
use App\Vocabulary;
use App\Timeline;
use App\Explain;

class TimelineController extends Controller
{
    public function edit(Request $data){
		$module = DB::table('module')->where('CodModule', $data['module'])->get();
    	$module = $module[0];
		
		$timeline = DB::table('timeline')
					->select('CodElement', 'typeElement','Position')
					->where('CodModule', $data['module'])
					->orderBy('Position')
					->get();

		foreach($timeline as $tl){
			if($tl->typeElement == 'E'){
				$explain = Explain::select('title','description','video')->where('CodExplain', $tl->CodElement)->get();
				foreach($explain as $ex){
					$expl = $ex;
				}
				
				$tl->dataElement = $expl;
			}elseif($tl->typeElement == 'V'){
				echo 'V';
			}elseif($tl->typeElement == 'Q'){
				echo 'Q';
			}
		}
		echo "<pre>";
		print_r($timeline);

    	return view('timeline.edit',compact('module'));
    }

    public function criar_elemento(Request $data){
		
    	if($data['tipoElemento'] == 'E'){
    		return redirect()->route('form_explain',['CodModule' => $data['CodModule']]);
    	}elseif ($data['tipoElemento'] == 'V'){
    		return redirect()->route('form_vocabulary',['CodModule' => $data['CodModule']]);
    	}elseif($data['tipoElemento'] == 'Q'){
    		echo "Quiz";
    	}

	}
}
