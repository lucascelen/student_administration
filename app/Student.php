<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function programmes()
    {
        return $this->belongsTo('App\Program')->withDefault();   // a student belongs to a program
    }
    public function studentcourses()
    {
        return $this->belongsToMany('App\StudentCourse');   // many students belong to many student courses
    }
}
