<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function __invoke()
    {
        return view('pages.admin.pages.members');
    }
}
