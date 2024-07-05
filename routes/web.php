<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;

Route::view("/", 'home');

Route::resource('jobs', JobController::class);

Route::get("/register", [RegisteredUserController::class, "create"]);
Route::post("/register", [RegisteredUserController::class, "store"]);

Route::get("/login", [SessionController::class, "create"]);
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

// Route::get('/jobs', [JobController::class, 'index']);
// Route::get('jobs/create', [JobController::class, 'create']);
// Route::get('/jobs/{job}', [JobController::class, 'show']);
// Route::post('/jobs', [JobController::class, 'store']);
// Route::get('/jobs/{id}/edit', [JobController::class, 'edit']);
// Route::patch('/jobs/{job}', [JobController::class, 'update']);
// Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

Route::view("/contact", 'contact');