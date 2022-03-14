<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\CargoController;
use App\Http\Controllers\Admin\TecnologiaController;
use App\Http\Controllers\Admin\DepartamentoController;
use App\Http\Controllers\Admin\UbicacionController;



Route::group(['middleware'=>['auth']],function(){
    Route::resource('roles', RoleController::class)->names('roles');
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('cargos', CargoController::class);
    Route::resource('deptos', DepartamentoController::class);
    Route::resource('tecnos', TecnologiaController::class);
    Route::resource('ubic', UbicacionController::class);

});
