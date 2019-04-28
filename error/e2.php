<?php

function custom_error_handler($severity, $msg, $file, $line){
    switch ($severity){
        case E_WARNING:
        echo "Error [{$severity}]: {$msg} in {$file} on line number {$line}\n";
        break;
        case E_NOTICE:
        echo "Error [{$severity}]: {$msg} in {$file} on line number {$line}\n";
        break;
        default:
        echo "Error [{$severity}]: {$msg} in {$file} on line number {$line}\n";

    }
}

set_error_handler('custom_error_handler');

// trigger_error("This is an error");

// echo substr([1234],3);

function division($divident, $divisor){
    if(0==$divisor){
        trigger_error("Cannot divide by 0");
    }else{
        return $divident/$divisor;
    }
}

echo division(8,0);