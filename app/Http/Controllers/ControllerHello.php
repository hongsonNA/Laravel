<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHello extends Controller
{
    public function hello(){
    	$name = 'son';
    	$tuoi = '20';
    	$diachi = 'Ha noi';
    	$lop = 'PT13312_Web';
    	return view('welcome',[
    		'ten' => $name,
    		'tuoi' => $tuoi,
    		'diachi' => $diachi,
    		'lop' => $lop,
    	]);
    }
}
