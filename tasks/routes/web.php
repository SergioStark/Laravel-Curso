
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

	$nombre = "Serchi bebe";
	$edad = 30;

	//Formas de pasar variables de php en laravel
	/*
    return view('welcome',array(
    	'name'=> $name,
		'age' => 30
	));
	*/

	return view('welcome', compact('nombre','edad'));

	/*return view('welcome')->with('nombre','Alejandro')); Solo pasa un valor con su llave*/
});

Route::get('/tareas', function(){
	/*$tareas = array(
		'Tarea 1',
		'Tarea 2',
		'Tarea 3'
		);
	return view('tareas', compact('tareas'));*/

	$tareas = DB::table('tareas')->get();
	//dd($tareas[0]->titulo);
	return view('tareas.index',compact('tareas'));
});

Route::get('/tareas/{id}',function($id){
	$tarea = DB::table('tareas')->find($id); //find, busca algo por medio del id
	return view('tareas.show',compact('tarea'));
});
