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
    public function index_profile()
    {
        $title = "Profile";
        return view('index_profile', compact('title'));
    }
    public function index_ekstrakurikuler()
    {
        $title = "Ektrakurikuler";
        return view('index_ekstrakurikuller', compact('title'));
    }
    public function index_gallery()
    {
        $title = "Galeri";
        return view('index_gallery', compact('title'));
    }
    public function index_news()
    {
        $title = "Berita";
        return view('index_news', compact('title'));
    }
    public function index_prestasi()
    {
        $title = "Prestasi";
        return view('index_prestasi', compact('title'));
    }
}
