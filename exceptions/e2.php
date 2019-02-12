<?php
class MyException extends Exception{}
class NetworkException extends Exception{}

function testExceptions(){
    throw new NetworkException();
}

try{
    testExceptions();
}catch(MyException $e){
    echo "MyException Caught";
}catch(NetworkException $e){
    echo "NetworkException Caught";
}catch(Exception $e){
    echo "Exception Caught";
}finally{
    echo "\nCleaned Up";
}

