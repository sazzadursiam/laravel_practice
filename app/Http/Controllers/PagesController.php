<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function homePageFunction()
    {
        // return 'h';
        return view('pages.home');
    }
}
