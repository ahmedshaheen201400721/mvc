<?php
namespace Illuminate\App;

// use Illuminate\database\DBconnection;

class App{
    public static $registery=[];

    public function __construct() {
        $this->register();
    }

    public function register()
    {
        $this->set('credentials',parse_ini_file("/home/ahmed/Documents/projects/mvc/.env"));
        $this->set('get',[]);
        $this->set('delete',[]);
        $this->set('post',[]);
        $this->set('put',[]);
    }

    public  function set($key,$value)
    {
        if(!array_key_exists($key,static::$registery)){
            static::$registery[$key]=$value;
        }
    }

    public  function append($arr,$key,$value)
    {
        if(array_key_exists($arr,static::$registery)){
            static::$registery[$arr][$key]=$value;
        }
    }

    public function get($key)
    {
        if(array_key_exists($key,static::$registery)){
          return  static::$registery[$key];
        }
    }
}
