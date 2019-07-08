<?php
include_once "config.php";
$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
mysqli_set_charset($connection, "utf8");
if ( ! $connection ) {
	echo mysqli_error($connection);
    throw new Exception( "Cannot connect to database" );
}
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


function getWords($user_id, $search=null){
    global $connection;
    if($search){
	    $query = "SELECT * FROM words WHERE user_id = '{$user_id}' AND word LIKE '{$search}%' ORDER BY word";
    }else{
	    $query = "SELECT * FROM words WHERE user_id = '{$user_id}' ORDER BY word";
    }
    $result = mysqli_query($connection, $query);
    $data = [];
    while($_data = mysqli_fetch_assoc($result)){
        array_push($data, $_data);
    }
    return $data;

}