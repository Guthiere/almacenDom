<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\CargoController;



Route::group(['middleware'=>['auth']],function(){
    Route::resource('roles', RoleController::class)->names('roles');
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('cargos', CargoController::class);

});
