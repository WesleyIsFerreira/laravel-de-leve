<?php

//use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
//DIRECIONA PRA VIEW RAIZ
Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function(){
    return "chama";
})->name('teste');

//PASSANDO PARAMETROS NA URL
Route::get('/teste2/{nome}/{sobrenome}', function($nome, $sobrenome){
    return "chama lá o  $nome $sobrenome ai pf";
});

//PARAMETROS NÃO OBRIGATÓRIOS
Route::get('/seunome/{nome?}', function($nome=null){
    if ($nome)
        return "chama lá o  $nome ai pf";
    return "Digia a rota certo jão!!!";
});

//EXPRESSÕES REGULARES PARA CHECAR PARAMETROS
Route::get('/rotacomregras/{nome}/{num}', function($nome, $num){

    for($i = 0; $i < $num; $i++)
        echo ($i + 1) ."° vez do " . $nome ."<br>";
    
})->where('nome', '[A-Za-z]+')->where('num','[0-9]+');

//AGRUPANDO ROTAS E NOMEANDO
Route::prefix('aplicacao')->group(function () {

    Route::get('/', function () {
        return view('app');
    })->name('app');

    Route::get('/profile', function () {
        return view('profile');
    })->name('app.profile');

    Route::get('/user', function () {
        return view('user');
    })->name('app.user');

});

//REDIRECIONANDO
Route::redirect('todosprodutos', 'teste', 301);


Route::get('todosprodutos2', function() {
    return redirect()->route('teste');
});

////////////////////////////////////////////


Route::post('/insere', function(Request $request) {
    return "Inserido com sucesso";
});
Route::delete('/insere', function(Request $request) {
    return "Deletado com sucesso";
});
Route::put('/insere', function(Request $request) {
    return "Atualizado com sucesso";
});
Route::patch('/insere', function(Request $request) {
    return "Atualizado no patch com sucesso";
});
Route::options('/insere', function(Request $request) {
    return "Options no patch com sucesso";
});
Route::get('/insere', function(Request $request) {
    return "getzada com sucesso";
});

