<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


Route::get('/Hello',HomeController::class);
Route::get('post/mensaje',[PostController::class,'Mensaje']);
route::get('post/about/{param?}/{name?}',[PostController::class, 'about']);
/*Route::get('/', function () {
    return view('welcome');
});*/

