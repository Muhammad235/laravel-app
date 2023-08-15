<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return response()->json(["todo"]);
    }

    public function show()
    {

    }

    public function destroy()
    {

    }

    public function update()
    {

    }

    // public function destroy()
    // {

    // }


}
