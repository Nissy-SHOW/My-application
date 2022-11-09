<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CloudinaryController;
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


Route::group(['middleware' => ['auth']], function(){
    Route::get('/', [PostController::class, 'index'])->name('posts'); 
    Route::get('/items/create' ,[ItemController::class, 'createItems']);
    Route::get('/index',[ItemController::class,'indexItems'])->name('index');
    Route::get('/items/{item}',[ItemController::class,'showItem']);
    Route::post('/storeItems',[ItemController::class,'storeItems']);
    Route::get('/items/{item}/edit', [ItemController::class, 'edit']);
    Route::put('/items/{item}', [ItemController::class, 'update']);
    Route::delete('/items/{item}', [ItemController::class,'delete']);
    
    Route::get('/users/{user}/edit', [PostController::class, 'edit']);
    Route::put('/users/{user}', [PostController::class, 'update']);
    
    Route::post('/like/{postId}',[LikeController::class,'store']);
    Route::post('/unlike/{postId}',[LikeController::class,'destroy']);
});
/*
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
    
})->middleware(['auth', 'verified'])->name('dashboard');
*/
require __DIR__.'/auth.php';