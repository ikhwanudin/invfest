<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LombaController extends Controller
{
    //
    public function indexCtf()
    {
    	return view('pages.ctf');
    }
    public function indexProg()
    {
    	return view('pages.prog');
    }
    public function indexWeb()
    {
    	return view('pages.web');
    }
    public function indexAndro()
    {
    	return view('pages.andro');
    }
    public function indexDesign()
    {
    	return view('pages.design');
    }
}
