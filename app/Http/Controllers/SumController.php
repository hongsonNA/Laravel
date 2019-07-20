<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
	public function sumView(){
		return view('sum-view');
	}
	public function sum(Request $request){
		$data = $request->all();
		$n1 = $data['n1'];
		$n2 = $data['n2'];
		$n3 = $data['n3'];
		$sum = ($n2*$n2) - (4*$n1*$n3);
		if ($sum < 0) {
			echo "vo nghiem";
		}elseif ($sum == 0 ) {
			echo "pt co nghiem kep n1 = n2 ".(-$n2/2*$n1);;
			
		}else{
			echo "co 2 nghiem phan biet " .((-$n2 + sqrt($sum))/2*$n1); ;
			echo "okaay". ((-$n2 + sqrt($sum))/2*$n1); ;
			
		}
		return view('output', ['ketqua'=>$sum]);
		
    	// dd($request->all());
	}
}
