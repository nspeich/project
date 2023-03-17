<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

// Route::get('/', function () {
//     return view('welcome');
// });



require __DIR__.'/auth.php';


Route::get('/', [Index::class, 'articles']);
Route::get('/foo', [TestController::class, 'foo']);
Route::get('/bar', [TestController::class, 'bar']);
Route::get('/ajout', [TestController::class, 'ajout']);
Route::resource('product', ProductController::class);

Route::resource('Auth', 'Auth');




// Route::get('/', 'UtilisateursController@liste')->middleware('App\Http\Middleware\Auth');

// Route::group([
//     'middleware' => 'App\Http\Middleware\Auth',
// ], function () {
//     Route::get('/mon-compte', 'CompteController@accueil');
//     Route::get('/deconnexion', 'CompteController@deconnexion');
//     Route::post('/modification-mot-de-passe', 'CompteController@modificationMotDePasse');

//     Route::post('/messages', 'MessagesController@nouveau');
// });
