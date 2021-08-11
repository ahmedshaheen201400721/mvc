<?php

use Illuminate\Route\Request;

require __DIR__.'/../routes/web.php';
// dd((new Request)->name);
Request::handle();


