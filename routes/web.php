<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;


Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id'          => 1,
                'title'       => 'Job 1',
                'description' => 'Job 1 description',
                'salary'      => '10000',
            ],
            [
                'id'          => 2,
                'title'       => 'Job 21',
                'description' => 'Job 1 description',
                'salary'      => '30000',
            ],
            [
                'id'          => 3,
                'title'       => 'Job 14',
                'description' => 'Job 2 description',
                'salary'      => '40000',
            ],
        ]
    ]);
});
Route::get('/jobs/{id}', function ($id) {

    $jobs = [
        [
            'id'          => 1,
            'title'       => 'Job 1',
            'description' => 'Job 1 description',
            'salary'      => '10000',
        ],
        [
            'id'          => 2,
            'title'       => 'Job 21',
            'description' => 'Job 1 description',
            'salary'      => '30000',
        ],
        [
            'id'          => 3,
            'title'       => 'Job 14',
            'description' => 'Job 2 description',
            'salary'      => '40000',
        ],
    ];


    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', [
        'job' => $job
    ]);

});
Route::get('/contact', function () {
    return view('contact');
});