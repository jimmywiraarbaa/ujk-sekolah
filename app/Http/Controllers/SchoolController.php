<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index_school()
    {
        $title = "Beranda";
        return view('index_school', compact('title'));
    }
}
