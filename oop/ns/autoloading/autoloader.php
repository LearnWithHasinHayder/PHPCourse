<?php
spl_autoload_register(function($className){
    $path = strtolower(str_replace("CloudStorage\\","",$className)).".php";
    $path = str_replace("\\",DIRECTORY_SEPARATOR,$path);
    include_once($path);
    //echo $path."\n";
});