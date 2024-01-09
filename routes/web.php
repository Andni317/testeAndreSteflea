<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/enviar', function (Illuminate\Http\Request $request) {
    $registar = new App\Models\Registar();
    $registar->nome_produto= $request->get('nome_produto');
    $registar->categoria= $request->get('categoria');
    $registar->preco_unitario= $request->get('preco_unitario');
    $registar->descricao= $request->get('descricao');

    $registar->save();
    echo "Sua mensagem foi armazenada com sucesso! Codigo: ". $registar->codigo_produto;
});

Route::get('/lista', function () {
    return view('lista', array('registars'=> App\Models\Registar::all()));
});