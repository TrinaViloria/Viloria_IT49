<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('landing', ['title' => 'Home']);
    }

    public function about()
    {
        return view('about', ['title' => 'About']);
    }
}
