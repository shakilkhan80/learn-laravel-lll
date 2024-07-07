<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;

Route::view("/", 'home');

// Route::resource('jobs', JobController::class)->only(['index', 'show']);
// Route::resource('jobs', JobController::class)->except(['index', 'show'])->middleware('auth');

Route::get('/jobs', [JobController::class, 'index']);
Route::get('jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware('auth')->can('edit-job', 'job');
Route::patch('/jobs/{job}', [JobController::class, 'update']);
// Route::patch('/jobs/{job}', [JobController::class, 'update'])->middleware(['auth', 'can:edit-job,job']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);


//Auth
Route::get("/register", [RegisteredUserController::class, "create"]);
Route::post("/register", [RegisteredUserController::class, "store"]);

Route::get("/login", [SessionController::class, "create"])->name("login");
Route::post("/login", [SessionController::class, "store"]);
Route::post("/logout", [SessionController::class, "destroy"]);

// Route::get('/', function (){
//     return view('home');
// });

// Route::resource('jobs', JobController::class, [
//     'except' => ['edit']
// ]);

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{id}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
// });

Route::view("/contact", 'contact');
