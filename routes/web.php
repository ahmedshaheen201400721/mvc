<?php

use App\Controller\TaskController;
use Illuminate\Route\Route;

Route::get("/",[TaskController::class,"index"]);
Route::get("create",[TaskController::class,"create"]);
Route::post("/store",[TaskController::class,"store"]);
Route::get("contact",[TaskController::class,"contact"]);
Route::get("/about",[TaskController::class,"about"]);