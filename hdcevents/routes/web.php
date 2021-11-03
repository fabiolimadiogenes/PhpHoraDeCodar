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

    $nome = "Fabio";    
    $idade = 26;
    $arrayEx = [10,22,33,44];
    $nomes = ["Fabio","Fernanda","Felipe","Regina"];

    return view('welcome',[
        'nome' => $nome,
        'idade' => $idade,
        'profissao' => "Programador",
        'arrayEx' => $arrayEx,
        'nomes' => $nomes]); // <-- libera para usar na view o que está dentro das '' é a chave por onde ele acessa. Pode passar uma variavel ou passar o dado diretamente!
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});
