<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

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
        $trains = Train::all()->where('departure_date', '>=', Carbon::today());
        // $trains = [];

        return view('trains', compact('trains'));
    }
}
