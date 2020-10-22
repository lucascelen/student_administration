<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function programmes()
    {
        return $this->belongsTo('App\Program')->withDefault();   // an order belongs to a user
    }
    public function studentcourses()
    {
        return $this->belongsToMany('App\StudentCourse');   // many student courses belong to many courses
    }
}
