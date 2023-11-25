<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;



Route::group(["prefix"=>"admin"],function(){
    Route::get("/home",[DashboardController::class,"home"])->name("home");
    Route::get("/about",[DashboardController::class,"info"])->name("about");
    Route::get("/contact",[DashboardController::class,"contact"])->name("contact");
});

