<?php

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

// a rota definida sera hello-word que executar o metodo index de HellowordController
Route::get('hello-word','HelloWordController@index');

//Chamdo um view direto pela rota 
Route::view('/bem-vindo','hello_world.bemvido');


//exibido uma viewe mandando paramentros para ela.
Route::view('/meunome','hello_world.meunome',['nome'=>'Laravel']);


//Rota com Paramentro Dinamico{slug}passado na url
Route::get('/post/{slug}',function($slug){
return $slug;
});


//Rota com Paramentro Dinamico OPCIONAL{slug}(passado na URL)
Route::get('/parametro/{id?}', function($id = null){
    return !is_null($id) ? $id : 'Sem Parementros Informado';
});


//Validar paramentros
Route::get('/user/{id}',function($id){
    return $id;

})->where(['id' => '[0-9]+']);


//adicionando apilido apara a rota 
Route::get('/idade/{ano}', function($ano){
return $ano-2020;
}) ->name('mostraridade');//aplido da minha rota


//Organizando rotas por grupo
/*
Route::prefix('aluno')->group(function(){

    Route::get('/listar','AlunoController@listar')->name('aluno.listar');


    Router::get('/create','AlunoController@create')->name('aluno.create');

    Router::post('/salvar','AlunoController@salvar')->name('aluno.salvar');


});
*/
Route::resource('/users','UserController');


//Rotas para o formulario
Route::prefix('admin')->namespace('admin')->group(function(){

    Route::prefix('posts')->name('posts.')->group(function(){//apilido

        Route::get('/create','postController@create')->name('create');

        Route::post('/store','postController@store')->name('store');
    });
});
