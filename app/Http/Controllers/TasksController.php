<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
   
    public function index()
    {
        
    
            return Task::all();

    }

    public function store()
    {

        return "OK";

    }

}
