<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
    	$data = User::all();
    	//menghitung jumlah record yang dalam status unknown, pendding, verified
    	$status_unknown = User::where('status', 'unknown')->get();
    	return view('dashboard.admin.admin', compact('data'))->with('unknown', $status_unknown);
    }
    public function ctf()
    {
    	$data = User::where('kategori', 'ctf')->get();
    	return view('dashboard.admin.ctf', compact('data'));
    }
    public function prog()
    {
        $data = User::where('kategori', 'prog')->get();
        return view('dashboard.admin.prog', compact('data'));
    }
    public function andro()
    {
        $data = User::where('kategori', 'andro')->get();
        return view('dashboard.admin.andro', compact('data'));
    }
    public function web()
    {
        $data = User::where('kategori', 'web')->get();
        return view('dashboard.admin.web', compact('data'));
    }
    public function design()
    {
        $data = User::where('kategori', 'design')->get();
        return view('dashboard.admin.design', compact('data'));
    }
}
