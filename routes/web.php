<?php

use App\Models\Branch;
use App\Http\Controllers;
use App\Http\Controllers\branchcontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/my', function () {
    return view('welcome');
    //https://youtu.be/TpuGrTi8blg
}); 

Route::get('/try', 'App\Http\Controllers\branchcontroller@index');

Route::get('/demo', 'App\Http\Controllers\branchcontroller@demo');

Route::get('/branch', function () {
  $Branch = branch::all();
  echo "<pre>";
  print_r($Branch->toarray());
     
 });
//Route::post('/branchform', function () {
  //  return view('branchform');
    //https://youtu.be/TpuGrTi8bl
//});
Route::get('/branchform', 'App\Http\Controllers\branchcontroller@Showform')->name('branchform');

Route::post('/branchstore', 'App\Http\Controllers\branchcontroller@store');
Route::get('/techno', 'App\Http\Controllers\branchcontroller@imgpage')->name('image');
Route::get('/view', 'App\Http\Controllers\branchcontroller@viewpage')->name('view');
Route::get('/delete/{id}', 'App\Http\Controllers\branchcontroller@delete')->name('delete');
Route::get('/edit/{id}', 'App\Http\Controllers\branchcontroller@edit')->name('edit');
Route::post('/update/{id}', 'App\Http\Controllers\branchcontroller@update')->name('update');
Route::get('/trash', 'App\Http\Controllers\branchcontroller@trash')->name('trash');
Route::get('/restore/{id}', 'App\Http\Controllers\branchcontroller@restore')->name('restore');
Route::get('/force-delete/{id}', 'App\Http\Controllers\branchcontroller@forcedelete')->name('forcedelete');




Route::get('get_all_session', function ()
{
  $_SESSION = session()->all();
   p($_SESSION);
});

Route::get('set_session', function (Request $request) 
{
  $request->session()->put('user_name', 'techno');
  $request->session()->put('id', '123');
  //$request->session()->flash('status', 'active');
  return redirect('get_all_session');
  
});

Route::get('distroy_session', function (Request $request) {
  session()->forget(['user_name','id']);
  return redirect('get_all_session');
});


 