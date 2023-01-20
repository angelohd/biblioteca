<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UserController;
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

Route::get('adduser', [UserController::class, 'adduser'])->name("adduser");
Route::post("iniciar_sessao", [UserController::class, 'iniciar_sessao'])->name("iniciar_sessao");

Route::get('/', function () {
    return view('login.login');
})->name("telalogin");

Route::get('/tst', function () {
    return view('welcome');
});


Route::middleware("auth")->group(function () {
    Route::prefix("biblioteca")->name("biblioteca.")->group(function () {
        Route::get("dashboard", [UserController::class, 'dashboard'])->name('dashboard');
        Route::prefix("categorias")->name("categorias.")->group(function () {
            Route::get("/", [CategoriaController::class, 'listarcategorias'])->name("listarcategorias");
            Route::post("addcategoria", [CategoriaController::class, 'addcategoria'])->name("addcategoria");
        });
        Route::prefix("autor")->name("autor.")->group(function () {
            Route::get("/", [AutorController::class, 'listarautores'])->name("listarautores");
            Route::post("addautor", [AutorController::class, 'addautor'])->name("addautor");

        });
    });
});
