<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Timeline;
use App\Quiz;
use App\AlternativesQuiz;

class QuizController extends Controller
{
    public function showForm(Request $data){
        $module = DB::table('module')->where('CodModule', $data['CodModule'])->get();
        $module = $module[0];

        return view('quiz.form',compact('module'));
    }


    public function create(Request $data) {
        if ($data->hasFile('gif_signal') && $data->file('gif_signal')->isValid()) {
            //validando posição na timeline
            $validar_posicao = Timeline::where('position','=',$data['page'])->get();

            if(empty($validar_posicao[0])){
                $name = uniqid(date('HisYmd'));
                $extension = request()->file('gif_signal')->extension();
                $nameFile = "{$name}.{$extension}";
                $upload = request()->file('gif_signal')->storeAs('imgs/gif_course', $nameFile);

                if (!$upload) {
                    echo "Erro";
                    return redirect()->back()->withErrors('error', 'Falha ao fazer upload');
                }

                $quiz = Quiz::create([
                    'CodModule' => $data['CodModule'],
                    'Question'  => $data['pergunta'],
                    'Video'     => $upload
                ]);

                $CodElement = $quiz->id;

                AlternativesQuiz::create([
                    'CodQuiz'       => $CodElement,
                    'description'   => $data['alternativa_correta'],
                    'correct'       => True
                ]);

                foreach($data['alternativa'] as $alternativa){
                    AlternativesQuiz::create([
                        'CodQuiz'       => $CodElement,
                        'description'   => $alternativa,
                        'correct'       => False
                    ]);
                }

                //'CodModule','CodElement','TypeElement','Position'
                Timeline::create([
                    'CodModule' => $data['CodModule'],
                    'CodElement' => $CodElement,
                    'TypeElement' => 'Q',
                    'Position' => $data['page']
                ]);

                return redirect()->back();
            }else{
                echo "Erro: Pagina inserida já ocupada por outro elemento";
            }
    	}
    }

    public function correct(Request $data){
        if($data['alternative']){
            return redirect()->route('show_timeline', ['module' => $data['module'],'page' => $data['page'] + 1]);
        }else{
            return redirect()->route('show_timeline', ['module' => $data['module'],'page' => $data['page']])->with('incorrect','Alternativa Incorreta, Tente Novamente!');
        }

    }
}
