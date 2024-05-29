<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/projects', function (){
    return view('test', ['projects' => Project::all()]);
});
