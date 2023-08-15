<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index($username)
    {
        return view('users.user', ['user' => $username]);

    }

}
