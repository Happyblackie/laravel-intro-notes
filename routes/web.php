<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PostsController;

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

//Route that returns view
//Route::get('/', function () {
    /* can return env variables */
    //return env('DB_DATABASE');
    //return env('CREATOR_NAME');

    //return view('welcome');
//});



//Route to users- returns string
// Route::get('/users', function(){
//     return 'welcome to the users page';
// });



//Route to users -returns Array
// Route::get('/users', function(){
//     return ['Laravel','PHP','Python'];
// });


//Route to users - returns Json response
// Route::get('/users', function(){
//     return response()->json([
//         'name' => 'Happy Blackie',
//         'course' => 'Laravel for Beginners to Advanced'
//     ]);
// });


//Route to users - returns function
// Route::get('/users', function(){
//     return redirect('/');
// });


// Route::get('/', function(){
//     return view('home');
// });

//Laravel 8+ (new way)
//Route::get('/products', [ProductsController::class, 'index'])->name('products');
//Route::get('/products/about',[ProductsController::class, 'products']);

//Larvel 8+ (another new way)
//Route::get('/products','App\Http\Controllers\ProductsController@index');

// (old way) before laravel 8, but has malfunctions
//Route::get('/products','ProductsController@index');

//Route::get('/products/{id}', [ProductsController::class, 'show']);
//Route::get('/products/{name}', [ProductsController::class, 'show']);



//pattern integer REGEX protection
// Route::get('/products/{id}', [ProductsController::class,'show'])
//     ->where('id','[0-9]+');

//pattern string  REGEX protection  
// Route::get('/products/{name}', [ProductsController::class,'show'])
// ->where('id','[a-zA-Z]+');


//PASSING MORE THAN ONE PARAMETER in the endpoint
// Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])
//         ->where([
//             'name'=> '[a-zA-Z]+',
//             'id'=> '[0-9]+'
//         ]);



Route::get('/', [PagesController::class,'index']);
Route::get('/about', [PagesController::class,'about']);

//Posts endpoint
Route::get('/posts',[PostsController::class,'index']);
