<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected   $table          = 'unit';
    public      $timestamps     = false;
    protected   $fillable       = array('CodCourse','title');
    protected   $guarded        = ['CodUnit'];
}
