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

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', 
    [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Developer',
                'salary' => '2000'
            ],
            [
                'id'=> 2,
                'title' => 'Programmer',
                'salary' => '4000'
            ]]
        ]);   
        
});

Route::get('/jobs/{id}', function ($id) {

    $jobs = [
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
        ];

        $job = Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] == $id);  

    return view('jobs', ['job' => $job]);
});


Route::get('/contact', function () {
    return view('contact');
});
