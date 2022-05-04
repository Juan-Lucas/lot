<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormationsController extends Controller
{

    public function __invoke(Request $request)
    {
       return view('pages.admin.pages.formations');
    }
}
