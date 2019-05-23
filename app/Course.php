<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected   $table          = 'course';
    public      $timestamps     = false;
    protected   $fillable       = array('title','description');
    protected   $guarded        = ['CodCourse'];
}
