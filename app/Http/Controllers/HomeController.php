<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }

    public function cal($num1=0,$num2=0)
    {
        $data = [
            'num1' => $num1,
            'num2' => $num2,
            'sum' => $num1+$num2
        ];
        //dd($data);
        return view('cal',$data);
        //return "Sumary $num1 + $num2 = " .($num1+$num2);
    }
}