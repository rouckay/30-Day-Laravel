<?php

use App\Jobs\translateJob;
use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;

Route::get('test', function () {
    $job = Job::first();

    translateJob::dispatch($job);
    return "Email send";
});

Route::view('/', 'home');

Route::view('/about', 'about');

Route::view('/contact', 'contact');

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'delete']);

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware(['auth'])->can('edit-job', 'job')->name('jobs.edit');

// resource
// Route::resource('jobs', JobController::class)->middleware(['auth' ]);


Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login'); //this was for view html
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);























// Route::resource('jobs', JobController::class, [
// 'except' => ['edit'],
// 'only' => ['show']
// ]);























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
