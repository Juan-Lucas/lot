<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevenirMembreController extends Controller
{
    public function index()
    {
       return view('pages.membres.devenir-membre');
    }
}
