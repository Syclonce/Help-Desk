<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function Dashboard()
    {
        $title = "Helpdesk";
        return view('pages.home',  compact('title'));
    }
}
