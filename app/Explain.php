<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Explain extends Model
{
    protected   $table          = 'tblExplain';
    public      $timestamps     = false;
    protected   $fillable       = array('CodModule','title','description','Video');
    protected   $guarded        = ['CodExplain'];
}
