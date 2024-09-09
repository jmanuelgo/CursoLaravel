<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return route('curso.id',4);
    //return view('welcome');
});
 /*Route::get ('/contacto',function(){
    return"Hola desde la pagina de contacto";
 });
 
 Route::post('/contacto', function () {
     return"Hola desde post";
 });*/
 Route::match(['get','post'],'/contacto',function(){
    return"Hola desde la pagina GET y POST";
 });

 Route:: get ('/cursos/Informacion',function(){
    return"Aqui podrás encontrar toda la información de los cursos";
 })->name('curso.Informacion');

 Route::get('/cursos/{curso}/{categoria?}',function($curso,$categoria=null){

    if($categoria){
        return "Bienvenido al curso: $curso de la categoria $categoria";
    } 
    else{
        return"Bienvenido al curso: $curso";
    }
 })->whereIn('curso',['php','laravel']);
 Route::get('/id/{id}',function($id){
    return"Curson con id: $id";
 })->name('curso.id');

 