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
use App\Firstcrud;


Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/','firstCrudController@HomePage');
Route::post('/store','firstCrudController@store');
Route::get('/delete/{id}','firstCrudController@delete');
/*
Route::get('update/{id}',function($id){
	  $data['data'] = Firstcrud::find($id);

      return view('update_data',$data);
});
*/
Route::get('update/{id}','firstCrudController@update');
Route::post('update/{id}','firstCrudController@update');



