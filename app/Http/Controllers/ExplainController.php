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
    	$CodModule = $data['CodModule'];

    	return view('explain.form',compact('CodModule'));
    }


    public function create(Request $data){
    	
    	if ($data->hasFile('gif_signal') && $data->file('gif_signal')->isValid()) {
    		$name = uniqid(date('HisYmd'));
            $extension = request()->file('gif_signal')->extension();
            $nameFile = "{$name}.{$extension}";
            $upload = request()->file('gif_signal')->storeAs('imgs/gif_course', $nameFile);

            // Explain::create([
            	
            // ]);

            if (!$upload) {
            	echo "Erro";
                // return redirect()->back()->withErrors('error', 'Falha ao fazer upload');
            }
    	}
    }
}
