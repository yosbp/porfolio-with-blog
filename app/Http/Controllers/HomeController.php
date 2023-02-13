<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('home');

    }
    
    public function set_en($locale = 'en'){

        App::setLocale($locale);

        session()->put('locale', $locale);

        return view('home');
    }

    public function set_es(){

        session()->pull('locale');

        return view('home');
    }
}
