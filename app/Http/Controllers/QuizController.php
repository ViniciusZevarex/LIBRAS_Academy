<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Timeline;
use App\Quiz;

class QuizController extends Controller
{
    public function showForm(Request $data){
        $module = DB::table('module')->where('CodModule', $data['CodModule'])->get();
        $module = $module[0];

        return view('quiz.form',compact('module'));
    }
}
