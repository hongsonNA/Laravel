<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    protected $table = 'classes';

    protected $filltable = [
    	'name',
    	'teacher_name',
    	'major',
    	'max_student'
    ];
}
