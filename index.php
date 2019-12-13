<?php
// use Illuminate\Support\Arr;
// use App\Demo\Controller\UsersController;
use Utility\Square;

require 'vendor/autoload.php';

$arr = [
    'one' => [
        'one_one' =>  11,
        'one_two' =>  12,
    ],
    'two' => [
        'two_one' =>  21,
        'two_two' =>  22,
    ]
];

pr($arr);
exit();

// echo Arr::get($arr, 'one.one_one');

// echo "<br/>";

// echo Arr::get($arr, 'two.two_two');