<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('user/{user}', [UserController::class, 'show']);
Route::get('users', [UserController::class, 'index']);

//cria um grupo de rotas :
Route::prefix('usuarios')->group(function() {
    Route::get('',function () {
        return 'usuario';
    })->name(name:'usuarios');

    Route::get('/{id}', function (){
        return 'mostrar detalhes';
    })->name(name:'usuarios.show');

    Route::get("/{id}/tags", function (){
        return 'tags do usuário';
    })->name(name:'usuarios.tags');
});

Route::get('/', function () {
    return view('welcome');
});
