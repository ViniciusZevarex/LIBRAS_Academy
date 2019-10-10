<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\AlternativesQuiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Module;
use App\Vocabulary;
use App\Timeline;
use App\Explain;

class TimelineController extends Controller
{
	public function show(Request $data){
        $timeline = $this->makeTimeline($data['module']);

		if(!isset($data['page'])){
			$data = $timeline[0];
			if($timeline[0]->typeElement == 'E'){
				return view('explain.show')->with('data',$data);
			}elseif ($timeline[0]->typeElement == 'V') {
				return view('vocabulary.show');
			}elseif($timeline[0]->typeElement == 'P'){
                return view('quiz.show');
			}
		}else{
            $page = $data['page'] - 1;
            $data = $timeline[$page];

            if($timeline[$page]->typeElement == 'E'){
				return view('explain.show')->with('data',$data);
			}elseif ($timeline[$page]->typeElement == 'V') {
				return view('vocabulary.show')->with('data',$data);
			}elseif($timeline[$page]->typeElement == 'P'){
                return view('quiz.show')->with('data',$data);
			}
		}

	}

	public function makeTimeline($CodModule){
		$module = DB::table('module')->where('CodModule', $CodModule)->get();
    	//$module = $module[0];

		$timeline = DB::table('timeline')
					->select('CodElement', 'typeElement','Position')
					->where('CodModule', $CodModule)
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
				$vocabulary = Vocabulary::where('CodVocabulary', $tl->CodElement)->get();

				foreach($vocabulary as $vb){
					$vcb = $vb;
				}

				$tl->dataElement = $vcb;
			}elseif($tl->typeElement == 'Q'){
                $quiz = Quiz::where('CodQuiz', $tl->CodElement)->get();

				foreach($quiz as $qz){
                    $quz = $qz;

                    $quz->alternatives = AlternativesQuiz::where('CodQuiz',$qz->CodQuiz)->get();
				}

				$tl->dataElement = $quz;
			}
        }


        return $timeline;
    }

    public function edit(Request $data){
		$module = DB::table('module')->where('CodModule', $data['module'])->get();
    	$module = $module[0];

		$timeline = DB::table('timeline')
					->select('CodElement', 'typeElement','Position')
					->where('CodModule', $data['module'])
					->orderBy('Position')
					->get();


    	return view('timeline.edit',compact('module','timeline'));
    }

    public function criar_elemento(Request $data){

    	if($data['tipoElemento'] == 'E'){
    		return redirect()->route('form_explain',['CodModule' => $data['CodModule']]);
    	}elseif ($data['tipoElemento'] == 'V'){
    		return redirect()->route('form_vocabulary',['CodModule' => $data['CodModule']]);
    	}elseif($data['tipoElemento'] == 'Q'){
    		return redirect()->route('form_quiz',['CodModule' => $data['CodModule']]);
    	}

    }
}
