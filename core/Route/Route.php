<?php 

namespace Illuminate\Route;

class Route{
    const METHODS=['get',"post",'delete','put'];
    
    public function bind($method,$parameters)
    {
        if(in_array(strtolower($method),static::METHODS)){

            $route=trim($parameters[0],"/");
            $action=$parameters[1];
            app()->append($method,$route,$action);
        }
    }

    /**
     * Handle dynamic static method calls into the model.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public static function __callStatic($method, $parameters)
    {
        // dd($parameters);   
        return (new static)->bind($method,$parameters);
    }

}