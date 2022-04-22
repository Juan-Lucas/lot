<?php

namespace App\Http\Controllers;

use App\Models\Service;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){

        return view('pages.services.services');
    }

    public function show(int $service_id){

        $service = Service::find($service_id);
        
        if($service != null){

            abort(404, 'Service not found');
        }

        return view('pages.services.service', compact('service'));

    }
}
