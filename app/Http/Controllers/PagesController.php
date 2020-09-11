<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $name = 'Oktavian Yudi Hartono';
        return view('index', ['name' => $name]);
    }
    public function about(){
        $name = 'Oktavian Yudi Hartono';
        return view('/about', ['name'=>$name]);
    }
}
