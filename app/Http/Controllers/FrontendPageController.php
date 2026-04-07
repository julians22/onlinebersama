<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendPageController extends Controller
{
    function index()
    {
        return view('welcome');
    }

    function findACom()
    {
        return view('find-a-com');
    }
    function email()
    {
        return view('email');
    }
    function domain()
    {
        return view('domain');
    }
    function website()
    {
        return view('website');
    }

}
