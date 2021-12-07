<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(): string {
        return view('static_pages/home');
    }

    public function help(): string {
        return '帮助页';
    }

    public function about(): string {
        return '关于页';
    }
}
