<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WebDevController extends Controller
{
    public function index() {

        $works = Work::where('type', 'web')->get();

        return view('main.webdev', [
            'works' => $works
        ]);
    }
}
