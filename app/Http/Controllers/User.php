<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function Dashboard()
    {
        return view('pages.home');
    }
}
