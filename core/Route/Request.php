<?php 

namespace Illuminate\Route;

class Request{

    public static function handle()
    {   
        if(self::action()){
            call_user_func(self::action());
        }
    }

    public static function action()
    {
        return $action=app()->get(  self::method()   ) [self::url()];
    } 


    public static function method()
    {
        return strtolower( $_SERVER['REQUEST_METHOD']);
    }

    public static function url()
    {
        // dd( parse_url($_SERVER['REQUEST_URI']));
        return trim( parse_url($_SERVER['REQUEST_URI'])['path'],'/');
    }

    public static function query()
    {
        return  $_GET;
    }

    public static function post()
    {
        return  $_POST;
    }

    public static function all()
    {
        return array_merge(self::post(),self::query() );
    }

    public static function __get($var)
    {
        return self::all()[$var]??"";
    }



   
}