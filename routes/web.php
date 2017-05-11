<?php

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

use App\Book;
use Illuminate\Http\Request;

/** * 本 のダッシュボード 表示 */
Route::get('/', function () {
    return view('books');
});

/**
 * 新 「本」 を 追加
 * */
Route::post('/books', function (Request $request) {
    //
});

/**
 * 本 を 削除
 */
Route::delete('/book/{book}', function (Book $book) {
   //
});