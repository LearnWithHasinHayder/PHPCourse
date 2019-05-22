<?php

function getStatusMessage($statusCode=0){
    $status = [
        '0'=>'',
        '1'=>'Duplicate Email Address',
        '2'=>'Username or Password Empty',
        '3'=>'User created successfully',
        '4'=>'Username and password didn\'t match',
        '5'=>'Username doesn\'t exist',
    ];

    return $status[$statusCode];
}