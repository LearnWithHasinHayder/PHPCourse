<?php
mkdir("test/d1/d2/d3",0777,true);
file_put_contents("test/f.txt","hello");
file_put_contents("test/d1/f.txt","hello");
file_put_contents("test/d1/d2/f.txt","hello");
file_put_contents("test/d1/d2/f2.txt","hello");
sleep(10);
// unlink("test/f.txt");
// rmdir("test");
deleteDir(getcwd() . DIRECTORY_SEPARATOR . "test");

function deleteDir($path){
    if(!is_readable($path)){
        return;
    }
    $filesInPath = scandir($path);
    if (count(scandir($path)) > 2) {
        foreach ($filesInPath as $file) {
            if ("." != $file && ".." != $file) {
                $filePath = $path . DIRECTORY_SEPARATOR . $file;
                if(is_dir($filePath)){
                    deleteDir($filePath);
                }else{
                    unlink($filePath);
                }
            }
        }
    }
    rmdir($path);
}
