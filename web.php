<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;

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
Route::get('/', function () {
  return view('welcome');
 });
 //Route::get('login', function () {
 // return view('login');
 //});

 //Route::post('logged', function () {
  //return 'you are logged in';
 //})->name('logged');

//Route::get('control', [ExampleController::class,'show']);
//Route::post('control', [ExampleController::class,'show'])->name('control');

//store data into car table
//Route::get('storeCar', [CarController::class,'store']);

//Route::get('/About', function () {
 // return view ('About_Contact');
//});

//Route::get('/Contact Us', function () {
  //return ('About_Contact');
//});


//Route::get('test', function () {
  //  return 'welcome to my first laravel website';
//});
//Route::get('/test1/{id}', function ($id) {
  //  return 'The id is: '. $id;
//});

//Route::get('/test2/{id?}', function ($id = 0) {
  //  return 'The ID 2 is: '. $id; 
//})->where (['id'=> '[0-9]+']);

//Route::get('/test2/{id?}', function ($id = 0) {
  //  return 'The ID 2 is: '. $id; 
//})->whereNumber ('id');

//Route::get('/test3/{name?}', function ($name = null) {
  //  return 'The name is: '. $name; 
//})->whereAlpha ('name');


//Route::get('/test4/{id}/{name}', function ($id, $name) {
   // return 'The age is '. $id. 'and the name is:' .$name ; 
//})->where(['id' => '[0-9]+', 'name'=> '[a-zA-Z]+']);



//Route::get('/product/{category}', function ($cat) {
   // return 'The category is '. $cat; 
//})->whereIn('category', ['laptop','pc','mobile']);




//Route::fallback(function(){
  //  return redirect('/');
//});

///Route::prefix('lar')->group(function(){

    ///Route::get('/', function() {
      //  return view('code');
    //});

    ///Route::get('/test1/{id}', function ($id) {
      //  return 'The id is: '. $id;
    //});
     //Route::get('/test2/{id?}', function ($id = 0) {
      //  return 'The ID 2 is: '. $id; 
    //})->whereNumber ('id');
    
    //Route::get('/test3/{name?}', function ($name = null) {
      //  return 'The name is: '. $name; 
    //})->whereAlpha ('name');
    
    
    //Route::get('/test4/{id}/{name}', function ($id, $name) {
    //    return 'The age is '. $id. 'and the name is:' .$name ; 
  //  })->where(['id' => '[0-9]+', 'name'=> '[a-zA-Z]+']);
    
     
    //Route::get('/product/{category}', function ($cat) {
      //  return 'The category is '. $cat; 
    //})->whereIn('category', ['laptop','pc','mobile']);

//});

//Route::prefix('About')->group(function () {
 // Route::get('/', function() {
   //   return view('About_Contact');
  //});
//});
  //Route::prefix('Contact')->group(function () {
    //Route::get('/', function() {
      //  return view('About_Contact');
    //});

//});

//Route::prefix('Blog')->group(function () {
  //Route::get('Science', function () {
    //return view('Science');
//});

//Route::get('Sports', function () {
 // return view('Sports');
//});
//Route::get('Math', function () {
  //return view('Math');
//});
//Route::get('Medical', function () {
  //return view('Medical');
//});

//});

//Routes for the car table
//Route::get('createCar', [CarController::class,'create']);
//Route::get('cars', [CarController::class,'index']);
//Route::get('updateCar/{id}', [CarController::class,'edit'])->name('updateCar');
//Route::get('showCar/{id}', [CarController::class,'show'])->name('showCar');

//Route::get('deleteCar/{id}', [CarController::class,'destroy']);
//Route::get('trashed', [CarController::class,'trashed'])->name('trashed');
//Route::get('restoreCar/{id}', [CarController::class,'restore'])->name('restore');
//Route::get('forceDelete/{id}', [CarController::class,'forceDelete'])->name('forceDelete');
//Route::put('update/{id}', [CarController::class,'update'])->name('update');
//Route::post('storeCar', [CarController::class,'store'])->name('storeCar');

//Routes for the posts table
Route::get('createPost', [PostController::class,'create']);
Route::get('posts', [PostController::class,'index']);
Route::get('updatePost/{id}', [PostController::class,'edit'])->name('updatePost');
Route::get('showPost/{id}', [PostController::class,'show'])->name('showPost');
Route::get('deletePost/{id}', [PostController::class,'destroy']);
Route::get('trashed', [PostController::class,'trashed'])->name('trashed');
Route::get('restorePost/{id}', [PostController::class,'restore'])->name('restore');
Route::get('forceDelete/{id}', [PostController::class,'forceDelete'])->name('forceDelete');
Route::put('update/{id}', [PostController::class,'update'])->name('update');
Route::post('storePost', [PostController::class,'store'])->name('storePost');



