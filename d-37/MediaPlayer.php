<?php

system("clear");

interface StorageFeature {
    public function list();
    public function add () ;
}

interface BasicFeature {
    public function play();
    public function pause();
    public function next();
    public function previous();

}

interface OnlineFeature{
    public function login();
    public function register();
    public function createPlayList();
    public function saveFavorite();

}



class VideoPlayer implements BasicFeature , OnlineFeature {
    public function play (){

    }
    public function pause(){

    }
    public function next(){

    }
    public function previous(){

    }
    public function login(){

    }
    public function register(){

    }
    public function createPlayList(){

    }
    public function saveFavorite(){
        
    }
}