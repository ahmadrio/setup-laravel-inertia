<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        // return view('home', [
        //     'name' => 'Pace',
        //     'company' => 'Rumah'
        // ]);

        return Inertia::render('Home', [
            'name' => 'Pace',
            'company' => 'Rumah'
        ]);
    }
}
