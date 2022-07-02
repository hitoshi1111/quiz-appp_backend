<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Title;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/titles/new', function () {
    return Title::latest()->take(5)->get();
});

Route::get('/categories', function () {
    return Category::all();
});

Route::get('/titles', function (Request $request) {
    return  Title::where('category_id', $request->category_id)->paginate(1);
});

