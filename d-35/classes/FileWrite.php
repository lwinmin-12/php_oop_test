<?php

class FileWrite {

    public $fileName , $file;

    function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    function fileWrite($text) {
        $this->file = fopen($this->fileName , "w");
        fwrite($this->file , $text);
        fclose($this->file);
    }

    function fileUpdate () {
        
    }

    function fileDelete() {
        unlink($this->fileName);
    }

}