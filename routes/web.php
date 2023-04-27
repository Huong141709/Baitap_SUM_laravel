<?php
use App\http\Controllers;
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
// Route::get('/welcome', function () {
//     return 'Chào mừng các bạn đến với PNV';
// });
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/tinhtich/{a}/{b}', function ($a,$b) {
//     echo $a*$b;exit;
    
// })->whereNumber('a')->whereNumber('b');
// Route::get('/tinhtong/{a}/{b}', function ($a,$b) {
//     echo $a+$b;exit;
    
// })->whereNumber('a')->whereNumber('b');
// Route::get('/tinhhieu/{a}/{b}', function ($a,$b) {
//     echo $a-$b;exit;
    
// })->whereNumber('a')->whereNumber('b');
// Route::get('/tinhthuong/{a}/{b}', function ($a,$b) {
//     echo $a/$b;exit;
    
// })->whereNumber('a')->whereNumber('b');

Route::get ('/xinchao',[App\http\Controllers\HelloController::class,'xinchao']);
Route::post('/computeArea', [App\http\Controllers\AreaofShapeController::class, 'computeArea']);
Route::get('/covid',[CovidController::class, 'getData'] );
Route:: get ('/signup', [App\http\Requests\singupController::class,'index']);
Route:: post (' ', [App\http\Requests\singupController::class,'displayInfor']);
// Route:: post ('/signup', "App\http\Controllers\signupController@displayInfor");
Route::get ('/getIndex',[App\http\Controllers\PageController::class,'getIndex']);
