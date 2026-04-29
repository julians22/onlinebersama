<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UseCaseController extends Controller
{
    public function socialMedia()
    {
        return view('pages.use-case.social-media');
    }

    public function email()
    {
        return view('pages.use-case.email');
    }

    public function websites()
    {
        return view('pages.use-case.websites');
    }
}
