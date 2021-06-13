<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index() {
        return view('top.index');
    }

    public function about() {
        return view('top.about');
    }
}
