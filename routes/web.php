<?php

use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix("/admin")->name("admin.")->group(function(){
    Route::get("/projects" , [ProjectController::class , "index"])->name("index");
    Route::post("/projects/store" , [ProjectController::class , "store"])->name("store");
    Route::get("/projects/create" , [ProjectController::class , "create"])->name("create");
    Route::get("/projects/show/{project}" , [ProjectController::class , "show"])->name("show");

});
