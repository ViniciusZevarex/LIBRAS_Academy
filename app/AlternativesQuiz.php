<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlternativesQuiz extends Model
{
    protected   $table          = 'alternatives_quiz';
    public      $timestamps     = false;
    protected   $fillable       = array('CodQuiz','description','correct');
    protected   $guarded        = ['CodAlternativesQuiz'];
}