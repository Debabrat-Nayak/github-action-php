<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Laravel Working Successfully nikun';
    $name = 'Debabrat';
    return $name;
});

Route::get('/bad-variable', function () {

    $USER_NAME = "Debabrat";

    return $USER_NAME;
});
// function add(int $a, int $b): int
// {
//     return $a + $b;
// }

// Route::get('/test2', function () {
    // return add('10', '20');
//     return add(10, 20);
// });

// Route::get('/test3', function () {
//     $name = 'Debabrat';

//     return strtoupper($name);
// });

// Route::get('/test4', function () {
//     $user = new User();

//     return $user->getName();
// });

// Route::get('/test5', function () {
//     $user = new User();

//     return $user->email;
// });

// function getName(): string
// {
//     return "nikun";
// }

// function multiply(int $a, int $b): int
// {
//     return $a * $b;
// }

// Route::get('/test7', function () {
//     return multiply(10, 20);
// });

// function testre(): void
// {
//     return;

//     echo 'Never runs';
// }

// Route::get('/test9', function () {
//     $data = [];

//     return $data['name'];
// });

// function calculate($a, $b)
// {
//     return $a + $b;
// }