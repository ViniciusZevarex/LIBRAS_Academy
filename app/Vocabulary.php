<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    protected   $table          = 'vocabulary';
    public      $timestamps     = false;
    protected   $fillable       = array('CodModule','visual_element_signal','meaning');
    protected   $guarded        = ['CodVocabulary'];
}