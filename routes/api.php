<?php
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\CommentController;
use App\Http\Controllers\API\MovieController;
 
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
 
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
      
Route::middleware('auth:api')->group( function () {
    Route::get('movie/list', [MovieController::class, 'index']);
    Route::get('movie/detail/{id}', [MovieController::class, 'show']);
    Route::post('movie/store', [MovieController::class, 'store']);
    Route::post('movie/update', [MovieController::class, 'update']);
    Route::post('movie/destroy', [MovieController::class, 'destroy']);
});

//Public API
Route::get('downloadPdf/{id}',[MovieController::class, 'createPDF']);
Route::get('public/movie/list', [MovieController::class, 'publicList']);
Route::post('public/movie/comment', [CommentController::class, 'store']);