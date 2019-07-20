<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student;

class StudenController extends Controller
{
    public function index(){
    	$students = Student::all();
    	// dd($students);
    	return  view('students',['students'=>$students]);
    }
}
