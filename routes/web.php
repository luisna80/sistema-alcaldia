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

    return view('admin.inicio.index');

});

//crea un grupo de rutas para la administracion con pre
//fijo admin/

 Route::get('/createWords',[
      'uses'=>'TestController@crearWord',
        'as'=> 'createWords'
    ]);
Route::group(['prefix'=>'admin'], function () {
    //esto me crea las rutas para los cargos
    Route::resource('cargos','CargosController');

    //esto me crea una nueva ruta para eliminar cargos
        Route::get('cargos/{id}/destroy',[
      'uses'=>'CargosController@destroy',
        'as'=> 'cargos.destroy'
    ]);

        //esto me crea las rutas para los grupos
        Route::resource('grupos','GruposController');

                Route::get('grupos/{id}/destroy',[
      'uses'=>'GruposController@destroy',
        'as'=> 'grupos.destroy'
    ]);
 //esto me crea las rutas para los detallesgrupos
        Route::resource('detallegrupos','DetallegruposController');
        Route::resource('detallecargos','DetallecargosController');
        Route::resource('detalledepart', 'DetalledepartController');
        Route::resource('tabulador', 'TabuladorController');
             Route::get('tabulador/{id}/destroy',[
      'uses'=>'TabuladorController@destroy',
        'as'=> 'tabulador.destroy'
    ]);
            //esto me crea las rutas para los trabajadores
        Route::resource('trabajadores','TrabajadoresController');

                Route::get('trabajadores/{cedula}/destroy',[
      'uses'=>'TrabajadoresController@destroy',
        'as'=> 'trabajadores.destroy'
    ]);

        Route::resource('departamentos', 'DepartController');
        Route::get('departamentos/{id}/destroy',[
      'uses'=>'DepartController@destroy',
        'as'=> 'departamentos.destroy'
    ]);

        Route::resource('nominas', 'NominaController');

//para mostrar el inicio del programa
        //Route::resource('/', 'InicioController');
// */
 




});
