<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index()
    {
        return view('users.signup');
    }

    public function store(Request $request)
    {
        // dd($request->input('email'));
        // $name = $request->input('firstname') . ' ' . $request->input('email');

        // concatinating in laravel
        $name = "{$request->input('firstname')} {$request->input('email')}";

        return view ('users.user', ['name' => $name, 'email_address' => $request->input('firstname') ]);
    }
}
