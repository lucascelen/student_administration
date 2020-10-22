<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function courses()
    {
        return $this->hasMany('App\Course');   // a program has many courses
    }

    public function students()
    {
        return $this->hasMany('App\Student');   // a program has many students
    }
}
