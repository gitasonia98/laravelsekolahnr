<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
    	return view('sites.home'); //folder sites, file home
    }

    public function about()
    {
    	return view('sites.about');
    }
}
