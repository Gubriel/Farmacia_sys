<?php

use App\Http\Controllers\IndexContrller;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FuncriosController;
use App\Models\Clientes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

// Acesso de Guest
Route::get('/', [IndexContrller::class, 'index'])->name('index');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');

// Acesso do user
    Route::get('/cliente/{cliente_id}', [ClientesController::class, 'index'])->name('clientes.index');
    Route::post('/cliente', [ClientesController::class, 'store']);
    Route::patch('/cliente/{cliente_id}', [ClientesController::class, 'update']);
    Route::delete('/cliente/{cliente_id}', [ClientesController::class, 'deletar']);

// Acesso do funcionario
// Route::middleware(['auth'])->group(function (){

    Route::get('/funcionario/{funcrio_id}', [FuncriosController::class, 'index'])->name('funcrios_index');

    Route::get('/produto-cad', [ProdutosController::class, 'create'])->name('produtos_create');
    Route::post('/produto', [ProdutosController::class, 'store']);
    Route::patch('/produto/{produto_id}', [ProdutosController::class, 'update']);
    Route::delete('/produto/{produto_id}', [ProdutosController::class, 'deletar']);

    Route::get('/clientes-cad', [ClientesController::class, 'create'])->name('clientes_create');
// });

// Acesso do DBA
    Route::get('/produtos', [ProdutosController::class, 'list']);
    Route::get('/produtos/report', [ProdutosController::class, 'report']);

    Route::get('/clientes', [ClientesController::class, 'list'])->name('clientes');
    Route::get('/clientes/report', [ClientesController::class, 'report']);

    Route::get('/funcrios', [FuncriosController::class, 'list']);
    Route::get('/funcrios-cad', [FuncriosController::class, 'create'])->name('funcrios_create');
    Route::post('/funcrios', [FuncriosController::class, 'store']);
    Route::patch('/funcrios/{funcrios_id}', [FuncriosController::class, 'update']);
    Route::delete('/funcrios/{funcrios_id}', [FuncriosController::class, 'deletar']);
    Route::get('/funcrios/report', [FuncriosController::class, 'report']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
