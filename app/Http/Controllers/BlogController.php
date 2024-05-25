<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class BlogController extends Controller
{
    
    public function blog() {
        $date = date('Y/m/d');
        $resp = Http::get('http://api.jugemkey.jp/api/horoscope/free/' . $date);
    }
}
