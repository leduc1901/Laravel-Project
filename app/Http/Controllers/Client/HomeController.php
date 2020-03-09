<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function about()
    {
        return view('client.about');
    }
    public function contact()
    {
        return view('client.contact');
    }
    public function index()
    {
       
        return view('client.index');
    }
}
