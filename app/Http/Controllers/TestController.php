<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function welcome(){

  	return view("welcome");
  	#$a = 2;
  	#$b = 3;
  	#$c = 5;
  	#$d = $a + $b * $c ;
  	#return "El valor es $d";
  }
}
