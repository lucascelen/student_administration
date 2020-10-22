<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    public function courses()
    {
        return $this->belongsToMany('App\Course');   // many courses belong to many student courses
    }

    public function students()
    {
        return $this->belongsToMany('App\Student');   // many students belong to many student courses
    }
}
