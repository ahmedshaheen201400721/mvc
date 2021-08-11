<?php

use Illuminate\App\App;

function dd($val){
    die(var_dump($val));
}

function view($view,$arr=null){
    if(!empty($arr)){
        extract($arr);
    }
    include "views/{$view}.view.php";   
}

function app()
{
    return (new App);
}

function redirect($location){
    $location=trim($location,"/");
   return  header("location:/");
}