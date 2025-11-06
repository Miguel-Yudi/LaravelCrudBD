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
    return view('home.index');
});

Route::get('/home', function () {
    return view('home.index');
});

Route::get('/regioes', function () {
    return view('regioes.index');
});

Route::get('/regioes/index', function () {
    return view('regioes.index');
});

Route::get('/regioes/cadastro', function () {
    return view('regioes.cadastrar_reg');
});

Route::get('/vendedores', function () {
    return view('vendedores.index');
});

Route::get('/vendedores/index', function () {
    return view('vendedores.index');
});

Route::get('/vendedores/cadastro', function () {
    return view('vendedores.cadastro');
});


Route::get('/veiculos', function () {
    return view('veiculos.index');
});

Route::get('/veiculos/cadastro', function () {
    return view('veiculos.cadastro');
});

Route::get('/veiculos/edit', function () {
    return view('veiculos.edit');
});

Route::get('/resp_veiculo/cadastro', function () {
    return view('resp_veiculo.cadastro');
});



Route::resource('produtos', ProdutoController::class);
Route::resource('cliente', clienteController::class);
Route::resource('notaFiscal', notaFiscalController::class);
Route::resource('produtoVendido', ProdutoVendidoController::class);
Route::resource('vendedor', VendedorController::class);
Route::resource('vendedores', VendedorController::class);
Route::resource('veiculos', VeiculoController::class);
Route::resource('regiao', RegiaoController::class);
Route::resource('regioes', RegiaoController::class) ->parameters(['regioes' => 'regiao']);
Route::resource('pontos', PontosController::class);
Route::resource('respVeiculo', respVeiculoController::class);