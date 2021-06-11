<?php

namespace App\Http\Controllers\Tools;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProbabilityDistController extends Controller
{
    public function index() {
        return view('main.tools.probability-distribution');
    }
}
