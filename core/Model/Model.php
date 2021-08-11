<?php

namespace Illuminate\Model;

use Illuminate\database\QueryBuilder;

class Model{

    public function __call($method, $parameters)
    {
        var_dump( static::class );
        die();
        return (new QueryBuilder)->$method(...$parameters);
        // return $this->forwardCallTo($this->newQuery(), $method, $parameters);
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
        
        return (new static)->$method(...$parameters);
    }
}
