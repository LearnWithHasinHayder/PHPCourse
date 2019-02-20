<?php
$entries = opendir(getcwd());
while(false !== ($entry = readdir($entries))){
    echo $entry."\n";
};


$directory = new Directory(getcwd());
echo $directory->getDirectories();
echo $directory->getFiles();