<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExplainController extends Controller
{
    public function showForm(Request $data){
    	$CodModule = $data['CodModule'];

    	return view('explain.form',compact('CodModule'));
    }
}
