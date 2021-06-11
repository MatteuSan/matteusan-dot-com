<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index() {

        $works = Work::where('type', 'music')->get();

        return view('main.music', [
            'works' => $works
        ]);
    }
}
