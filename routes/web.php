<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GerenteController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use App\Http\Middleware\CheckGerente;

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
//teste
/*Route::get('/gerente', function(){
    return view('gerentes.create');
});*/

//gerente
Route::group(['middleware' => [CheckGerente::class, 'verified']], function(){
    Route::get('/home-gerente', [GerenteController::class, 'index'])->name('gerentes.index');
    Route::get('/cadastrar', [GerenteController::class, 'index'])->name('gerentes.index');
});

Route::group(['middleware' => ['CheckFuncionario', 'verified']], function(){});

Route::group(['middleware' => ['CheckCliente', 'verified']], function(){});


/*Route::prefix('/user')->namespace('User')->group(function(){
    Route::prefix('/gerente')->namespace('Gerente')->group(function(){
        Route::prefix('/criar_produto')->namespace('NovoProduto')->group(function(){
            Route::get('/', [GerenteController::class, 'cadastroProduto']);
            Route::post('/salvar' , [GerenteController::class, 'salvarProduto'])->name('salvar');
        });

    });
    Route::prefix('/funcionario')->namespace('Funcionario')->group(function(){

    });
    Route::prefix('/cliente')->namespace('Cliente')->group(function(){

    });
});*/

Route::resource("clientes", "ClienteController");
Route::resource("gerentes", "GerenteController");

Route::resource("produtos", "ProdutoController");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
