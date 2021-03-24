<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\LoginController;
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

//Rota de login
Route::get('/', function () {
    return view('welcome');
});

//login
Route::get('/login',[LoginController::class,'index'])->name('site.login');
Route::post('/login/entrar',[LoginController::class,'entrar'])->name('site.login.entrar');
Route::get('/login/sair',[LoginController::class,'sair'])->name('site.login.sair');

Route::group(['middleware'=>'auth'],function(){

    //Rotas de funcionario/entregador
    Route::get('funcionarios',[UserController::class, 'index'])->name('user.index');
    Route::get('funcionario/adicionar',[UserController::class, 'adicionar'])->name('user.adicionar');
    Route::post('funcionario/salvar',[UserController::class, 'salvar'])->name('user.salvar');
    Route::get('funcionario/editar/{id}',[UserController::class, 'editar'])->name('user.editar');
    Route::put('funcionario/atualizar/{id}',[UserController::class, 'atualizar'])->name('user.atualizar');
    Route::get('funcionario/deletar/{id}',[UserController::class, 'deletar'])->name('user.deletar');

    //Rotas de pedido
    Route::get('pedidos',[PedidoController::class, 'index'])->name('pedido.index');
    Route::get('pedido/adicionar',[PedidoController::class, 'adicionar'])->name('pedido.adicionar');
    Route::post('pedido/salvar',[PedidoController::class, 'salvar'])->name('pedido.salvar');
    Route::get('pedido/editar/{id}',[PedidoController::class, 'editar'])->name('pedido.editar');
    Route::put('pedido/atualizar/{id}',[PedidoController::class, 'atualizar'])->name('pedido.atualizar');
    Route::get('pedido/deletar/{id}',[PedidoController::class, 'deletar'])->name('pedido.deletar');
    Route::get('pedido/concluir/{id}',[PedidoController::class ,'concluir'])->name('pedido.concluir');
    Route::put('pedido/finalizar/{id}',[PedidoController::class ,'finalizar'])->name('pedido.finalizar');
    Route::get('pedido/finalizados',[PedidoController::class, 'finalizado'])->name('pedido.finalizado');

});
