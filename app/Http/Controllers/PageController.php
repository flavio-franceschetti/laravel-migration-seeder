<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }

    public function allTrains(){
        $title = 'I TRENI';

        $trains = Train::all();
        // $trains = [];

        return view('trains', compact('title', 'trains'));
    }
}
