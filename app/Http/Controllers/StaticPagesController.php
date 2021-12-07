<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(): string {
        return view('static_pages/home');
    }

    public function help(): string {
        return view('static_pages/help');
    }

    public function about(): string {
        return view('static_pages/about');
    }
}
