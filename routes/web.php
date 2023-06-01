<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/', function () {
//    return view('Calculation');
//});

//Route::post('/Laravel_PHP/welcome', [CalculationController::class, 'Calculation'])->name('Calculation');

//Route::get('/welcome', function() {
//});

Route::get('/hi',[App\Http\Controllers\HelloController::class,'hello']);

//Route::get('/hello', [HelloController::class, 'hello']);

Route::get('/sum', [App\Http\Controllers\SumController::class, 'index']);
Route::post('/sum', [App\Http\Controllers\SumController::class, 'calculate']);


//Route:: get('/', 'AreaofshapeController@computerArea');
//Route:: post('/', 'AreaofshapeController@computerArea');

Route::get('/covid-data', [App\Http\Controllers\CovidController::class, 'index'])->name('covid.data');


//use App\Http\Controllers\SignController;

//Route::get('/signup', "SignController@index");
//Route::post('/signup', "SignController@displayInfor");

use App\Http\Controllers\SignController;

Route::get('/signup', [SignController::class, 'index']);
Route::post('/signup', [SignController::class, 'displayInfor']);


Route::get('/valida', [App\Http\Controllers\ValidationController::class, "showForm"]);
Route::post('/valida', [App\Http\Controllers\ValidationController::class, "validation"]);
Route::get('/addproduct', [App\Http\Controllers\ListProductsController::class,"showAddForm"])->name('addproduct');
Route::post('/addproduct', [App\Http\Controllers\ListProductsController::class,"creatSession"]);
Route::get('/showproducts', [App\Http\Controllers\ListProductsController::class,"showProduct"])->name('showproducts');

//Tạo bảng trong 

Route::get('/database', function() {
    Schema::create('loaisanpham',function($table){
        $table->increment('id');
        $table->string('ten',200);
    });
    echo "Đã tạo bảng thành công";
});


Route::get('/trangchu', [App\Http\Controllers\PageController::class, "getIndex"]);

Route::get('/type/{id}', [App\Http\Controllers\PageController::class, 'getLoaiSp']);

Route::get('/detail/{id}', [App\Http\Controllers\PageController::class, 'getDetail']);