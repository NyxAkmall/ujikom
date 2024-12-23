<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method untuk halaman home
    public function home()
    {
        return view('home'); // Pastikan file home.blade.php ada di resources/views
    }

    // Method untuk halaman about
    public function about()
    {
        return view('about'); // Pastikan file about.blade.php ada di resources/views
    }
}
