<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
//        $users = User::all();
        $users = ['Felipe Panegalli', 'Dalton Guasso'];
        return Inertia::render('Home', [
            'users' => $users
        ]);
    }

    public function about()
    {
        return Inertia::render('About');
    }
}
