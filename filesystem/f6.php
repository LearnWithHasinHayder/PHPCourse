<?php
$size = 0;
$rdi = new RecursiveDirectoryIterator(getcwd(), RecursiveDirectoryIterator::SKIP_DOTS);
$files = new RecursiveIteratorIterator($rdi);
foreach($files as $file){
    if($file->isFile()){
        $size += $file->getSize();
    }
    if($file->getFileName()=="script.js"){
        echo $file->getPath().DIRECTORY_SEPARATOR.$file->getFileName()."\n";
    }
}

echo "Directory Size ".$size." bytes";


