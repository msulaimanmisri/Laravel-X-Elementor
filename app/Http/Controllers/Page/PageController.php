<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('main.index');
    }
}