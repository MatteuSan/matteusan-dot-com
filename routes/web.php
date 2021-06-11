<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\Tools\ProbabilityDistController;
use App\Http\Controllers\Tools\ToolsController;
use App\Http\Controllers\WebDevController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FusionCharts;

//  Redirect if / is accessed without {lang}
Route::redirect('/', 'en');

Route::group(['prefix' => '{lang}'], function() {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/music', [MusicController::class, 'index'])->name('music');
    Route::get('/webdev', [WebDevController::class, 'index'])->name('webdev');
    Route::get('/resume', [ResumeController::class, 'index'])->name('bio');

    Route::get('/fusioncharts', [FusionCharts::class, 'index'])->name('fscharts');

    Route::group(['prefix' => 'tools'], function(){
        Route::get('/', [ToolsController::class, 'index'])->name('tools.home');
        Route::get('/probability-distribution', [ProbabilityDistController::class, 'index'])->name('tools.probdist');
    });

});

