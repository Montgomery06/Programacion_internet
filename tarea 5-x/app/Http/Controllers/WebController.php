<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function contact(){

    	$name = 'Roman';
    	$lastname = 'Romero';
    	$parrafo = 'ajdklajsdklajsdkljaskldjaskldklsajdkajsfklnsakfnaklsnfklasnfklanfaklsnfalksfnasflansfs';
    	 return view('contact',compact('name','lastname','parrafo'));

    }
}
