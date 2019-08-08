<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected   $table          = 'module';
    public      $timestamps     = false;
    protected   $fillable       = array('CodUnit','title');
    protected   $guarded        = ['CodModule'];
}
