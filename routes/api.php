<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("tasks", "App\Http\Controllers\TasksController@index");
Route::post("tasks", "App\Http\Controllers\TasksController@store");