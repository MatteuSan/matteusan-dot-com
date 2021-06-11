<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FusionCharts extends Controller
{
    public function index() {
        return view('fs.home');
    }
}
