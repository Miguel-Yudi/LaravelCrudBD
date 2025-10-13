<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\clienteController;
use App\Http\Controllers\notaFiscalController;
use App\Http\Controllers\ProdutoVendidoController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\RegiaoController;
use App\Http\Controllers\PontosController;
use App\Http\Controllers\RespVeiculoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('produtos', ProdutoController::class);
Route::resource('cliente', clienteController::class);
Route::resource('notaFiscal', notaFiscalController::class);
Route::resource('produtoVendido', ProdutoVendidoController::class);
Route::resource('vendedor', VendedorController::class);
Route::resource('veiculo', VeiculoController::class);
Route::resource('regiao', RegiaoController::class);
Route::resource('pontos', PontosController::class);
Route::resource('respVeiculo', respVeiculoController::class);