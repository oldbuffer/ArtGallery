<?php

namespace App\Http\Controllers;

use App\Models\ArtImage;
use App\Models\Art;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home (){
        return view('home');
    }
    public function news (){
        return view('news');
    }
    public function picture_library (){
        $arts = Art::orderBy('id')->get();

        return view('picture_library',[
            'arts' => $arts
        ]);
    }
    public function artist_room (){
        return view('artist_room');
    }
    public function about_us (){
        return view('about_us');
    }
    public function contact_us (){
        return view('contact_us');
    }
    public function contact_form (){
        return view('contact_form');
    }
    public function login (){
        return view('login');
    }
    public function art (){
        return view('art');
    }
    public function add_art (){
        return view('add_art');
    }
}
