<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'crudController@homeFun')
       ->name('home');   
Route::get('/employee/{id}', 'crudController@employeeFun')   
       -> name('employee');   

Route::get('/form/employee' , 'crudController@formFun')   
       ->name('form');   

Route::post('/add-db/employee','crudController@dbFun')   
       ->name('add-db');   
   
Route::get('delete/{id}','crudController@delete')   
       ->name('delete');  

Route::get('edit{id}','crudController@edit')   
       ->name('edit');

Route::post('/update/employee{id}','crudController@update')   
       ->name('update');         