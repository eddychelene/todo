<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("tasks", function(){
    $tasks = [
        [
            "id" =>1,
            "name" =>"Estudar php 7",
            "complete"=>false
        ],
        [
            "id" => 2,
            "name" =>"Estudar .net core",
            "complete"=>true
        ]
        ];

        return $tasks;
});