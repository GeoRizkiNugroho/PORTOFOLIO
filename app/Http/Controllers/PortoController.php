<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortoController extends Controller
{
    //
public function master(){
    return view('master');
}
public function about(){
    return view('about');
}
public function resume(){
    return view('resume');
}
public function contact(){
    return view('contact');
}
}
