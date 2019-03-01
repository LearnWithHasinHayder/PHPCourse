<?php
$di = new DirectoryIterator("./");
foreach($di as $file){
    if($file->isDot()){
        continue;
    }
    if($file->isDir()){
        echo $file->getPathName()."\n";
    }else{
        echo $file->getPathName().":".$file->getSize()."\n";

    }
}