<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    function index()
    {
        $data = Movie::all();
        dump($data);
        return view('home', [
            'data' => $data
        ]);
    }
}
