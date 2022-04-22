<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Index
    public function __invoke()
    {
        return view('index');
    }
}
