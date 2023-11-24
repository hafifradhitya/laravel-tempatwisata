<?php

namespace App\Http\Controllers;
use App\Models\Destinations;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function template(){
        return view('template');
    }

    public function home(){
        return view('home');
    }

    public function wisata(){
        $destinations = Destinations::all();
        return view('wisata', ['destinations' => $destinations]);
    }
    

    public function dashboard(){
        $data['destinations_total'] = Destinations::count();
        $data['users_total'] = Destinations::count();
        return view('dashboard', compact('data'));
    }

}
