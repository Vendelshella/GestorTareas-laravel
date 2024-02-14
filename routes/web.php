<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::resource('/task', TaskController::class);
/*
task.index
task.create
task.store
task.show
task.edit
task.update
task.destroy
*/