<?php
interface BaseStorage{
    function setFileName($fn);
    function writeData($data);
    function setMode($mode);
}

class Storage implements BaseStorage{
    private $fn;
    private $mode;

    function __construct($fn, $mode=null){
        $this->setFileName($fn);
        $this->mode = $mode;
    }

    function setFileName($fn){
        $this->fn = $fn;
    }

    function writeData($data){
        file_put_contents($this->fn, $data, $this->mode);
    }

    function setMode($mode){
        $this->mode = $mode;
    }

}

// class DataManager{
//     function saveData($filename, $data){
//         $storage = new Storage($filename);
//         $storage->writeData($data);
//     }
// }

class DataManager{
    function saveData(BaseStorage $storage, $data){
            $storage->writeData($data);
        }
    }

    $file = new Storage("/tmp/abcd.txt");
    $file->setMode(FILE_APPEND);
    $file->setMode(null);
$dm = new DataManager();
$dm->saveData($file," 5 My Data Extra");