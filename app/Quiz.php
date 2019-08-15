<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected   $table          = 'quiz';
    public      $timestamps     = false;
    protected   $fillable       = array('CodModule','Question','Video');
    protected   $guarded        = ['CodQuiz'];
}