<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pin;

class GeneratorController extends Controller
{
    //
    public function index(){
        $pin='';
        return view('welcome',compact('pin'));
    }

    public function getPin(){
     $pin=   $this->generate();
     return view('welcome',compact('pin'));
    }

    private function generate(&$i=0) { 
        if($i>10)//prevent infinty loop
        exit;
        $i++;
        $pin=  mt_rand(1000,9999); 
        $check= preg_match('/(\d)\1{3}/', $pin); 
        $exist =Pin::where('code',$pin)->first();
        if($check)// not generate obvious combinations
        generate($i);
        if($exist){//No PIN should be repeated until all other possibilities have been generated
            generate($i);
        }
        Pin::create(['code'=>$pin]);
        return $pin ; 
    }    
}
