<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class akabController extends Controller
{
    public function index()
    {
        return view('accueil');
    }
}
