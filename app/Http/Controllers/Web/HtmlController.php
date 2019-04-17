<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HtmlController extends Controller
{
    public function index()
    {
    	return view('web.html.overview');
    }

    public function showFile($value)
    {
    	//return $value;
    	return view('web.html.'.$value);
    }
}
