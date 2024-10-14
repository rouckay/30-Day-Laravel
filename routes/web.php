<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;

Route::view('/', 'home');

Route::view('/about', 'about');

Route::view('/contact', 'contact');

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store'])->name('auth');
Route::get('/jobs/{job}', [JobController::class, 'show']);

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');

// resource
// Route::resource('jobs', JobController::class, [
// 'except' => ['edit'],
// 'only' => ['show']
// ]);


Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']); //this was for view html
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);














































// Index

// Route::get('/jobs', [JobController::class, 'index']);
// Route::get('/jobs', function () {
//     $job = Job::with('employer')->latest()->simplePaginate(3);
//     return view('jobs.index', ['jobs' => $job]);
// });

// Show
// Route::get('/jobs/{job}', function (Job $job) {
//     // $job = Job::find($id); there is no need for this here becuase I have added
// });

// // Create
// Route::get('/jobs/create', function () {

// });

// // Store
// Route::post('/jobs', function () {

// });
// // edit page
// Route::get('/jobs/{id}/edit', function ($id) {

// })->name('jobs.edit');
// // update
// Route::patch('/jobs/{id}', function ($id) {

// });
// // Destroy Job
// Route::delete('/jobs/{id}', function ($id) {

// });
