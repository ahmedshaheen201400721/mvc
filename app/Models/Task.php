<?php

namespace App\Models;

use Illuminate\database\QueryBuilder;

class Task extends QueryBuilder{
    public $description;
    public $iscompleted;
    public $created_at;

    public function iscomplete()
    {
        return $this->iscompleted;
    }
}

