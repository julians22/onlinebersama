<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function find()
    {
        return view('pages.find-a-com');
    }

    public function learning()
    {
        return view('pages.learning');
    }
}
