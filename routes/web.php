<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TasksController;
use App\Http\Controllers\PostController;
// use App\Models\Post;
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

// Route::get('/about', function () {
//     return view('welcome');
// });
// Route::get('/',[TasksController::class,'index']);
// Route::get('/create',[TasksController::class,'create']);
// Route::post('/create',[TasksController::class,'store'])->name('product.createProcess');

// Route::group(['prefix' => 'product'], function(){
    // Route::get('/', [TasksController::class, 'index']);
//     Route::get('/create', [TasksController::class, 'create']);
    
//     # 設定路由名稱方便表單使用
//     Route::post(
//         '/create', 
//         [TasksController::class, 'store']
//     )->name('product.createProcess');
// });

Route::resource('post', PostController::class); //crud
// Route::get('post', [PostController::class, 'create']);
// Route::get('/post',[PostController::class],'index');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
