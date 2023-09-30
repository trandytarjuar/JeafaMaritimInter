<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceModel;
use Illuminate\Support\Facades\Auth;

class Service_Controller extends Controller
{
    public function index()
    {
        $service = ServiceModel::all();
        return view('service.index',compact('service'));
    }
    public function add()
    {
        return view('service.add');
    }
}
