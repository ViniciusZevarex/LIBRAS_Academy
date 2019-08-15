<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected   $table          = 'timeline';
    public      $timestamps     = false;
    protected   $fillable       = array('CodModule','CodElement','TypeElement','Position');
    protected   $guarded        = ['CodTimeline'];

}
