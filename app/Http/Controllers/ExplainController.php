<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Module;
use App\Timeline;
use App\Explain;

class ExplainController extends Controller
{
    public function showForm(Request $data){
        $module = DB::table('module')->where('CodModule', $data['CodModule'])->get();
        $module = $module[0];
        
    	return view('explain.form',compact('module'));
    }

    public function create(Request $data){
    	
    	if ($data->hasFile('gif_signal') && $data->file('gif_signal')->isValid()) {
    		$name = uniqid(date('HisYmd'));
            $extension = request()->file('gif_signal')->extension();
            $nameFile = "{$name}.{$extension}";
            $upload = request()->file('gif_signal')->storeAs('imgs/gif_course', $nameFile);

            if (!$upload) {
            	echo "Erro";
                return redirect()->back()->withErrors('error', 'Falha ao fazer upload');
            }

            // 'CodModule','title','description','Video'
            $explicacaoObj = Explain::create([
                'CodModule' => $data['CodModule'],
                'title'     => $data['titulo'],
                'description' => $data['descricao'],
                'Video' =>  $upload
            ]);
            
            $CodElement = $explicacaoObj->id;
            
            //validando posição na timeline
            $validar_posicao = Timeline::where('position','=',$data['page'])->get();

            if(empty($validar_posicao[0])){
                //'CodModule','CodElement','TypeElement','Position'
                Timeline::create([
                    'CodModule' => $data['CodModule'],
                    'CodElement' => $CodElement,
                    'TypeElement' => 'E',
                    'Position' => $data['page']
                ]);
                return redirect()->back();
            }else{
                echo "Erro: Pagina inserida já ocupada por outro elemento";
            }
    	}
    }
}
