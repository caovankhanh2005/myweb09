<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// Route resource tự động tạo đầy đủ 7 route CRUD cho Todo
Route::resource('todos', TodoController::class);

// Route trang chủ (/) trỏ về danh sách todo
Route::get('/', [TodoController::class, 'index']);
