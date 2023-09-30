<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CandidateModel;  

class CandidateController extends Controller
{
    public function index()
    {
        $candidate = CandidateModel::all();
        return view('candidate.index', compact('candidate'));
    }
}
