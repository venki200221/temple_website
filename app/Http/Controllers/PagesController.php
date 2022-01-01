<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function telgu(){
        return view('pages.telgu');
    }
    public function home(){
        return view('pages.home');
    }
    public function register(){
        return view('pages.register');
    }
    public function login(){
        return view('pages.login');
    }
    public function gallery(){
        return view('pages.gallery');
    }
    public function ano(){
        return view('pages.ano');
    }
    public function hindi(){
        return view('pages.hindi');
    }
    public function verify(){
        return view('pages.verify');
    }
    public function kannada(){
        return view('pages.kannada');
    }
}
