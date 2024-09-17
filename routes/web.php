<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs =   [
        [
        'id'     => '1',
        'title'  => 'Director',
        'salary' => '$50.000',
        ],
        [
        'id'     => '2',
        'title'  => 'Programmer',
        'salary' => '$10.000',
        ],
        [
        'id'     => '3',
        'title'  => 'Teacher',
        'salary' => '$40,000'
        ]
        ];

    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/jobs/{id}', function($id) {
    $jobs =  [
            [
            'id'     => '1',
            'title'  => 'Director',
            'salary' => '$50.000',
            ],
            [
            'id'     => '2',
            'title'  => 'Programmer',
            'salary' => '$10.000',
            ],
            [
            'id'     => '3',
            'title'  => 'Teacher',
            'salary' => '$40,000'
            ]
            ];

            $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    
    return view('job', ['job' => $job ]);
});
