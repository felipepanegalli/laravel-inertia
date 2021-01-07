<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('User/Register');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);

        $data['password'] = Hash::make($request->password);

        User::create($data);

        return Redirect::route('home')->with('success', 'Usuário criado com sucesso!');
    }
}
