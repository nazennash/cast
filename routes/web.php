<?php

use Illuminate\Support\Facades\Route;

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

class Job{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Developer',
                'salary' => '2000'
            ],
            [
                'id'=> 2,
                'title' => 'Programmer',
                'salary' => '4000'
            ]
        ] ;
    }
}


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs'=> Job::all()]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Illuminate\Support\Arr::first(Job::all(), fn($job) => $job['id'] == $id);  
    return view('job', ['job' => $job]);
});


Route::get('/contact', function () {
    return view('contact');
});
