<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('home');
});

/*
|--------------------------------------------------------------------------
| Product group
|--------------------------------------------------------------------------
*/
Route::prefix('product')->group(function () {

    // /product
    Route::get('/', function () {
        return view('product.index');
    })->name('product.index');

    // /product/add
    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    // /product/{id}
    Route::get('/{id?}', function ($id = '123') {
        return "Product ID: " . $id;
    });
});

/*
|--------------------------------------------------------------------------
| Sinh viên
|--------------------------------------------------------------------------
*/
Route::get('/sinhvien/{name?}/{mssv?}', function (
    $name = 'Do Dinh Tho',
    $mssv = '0153567'
) {
    return "
        <h2>Thông tin sinh viên</h2>
        <p>Tên: $name</p>
        <p>MSSV: $mssv</p>
    ";
});

/*
|--------------------------------------------------------------------------
| Bàn cờ vua
|--------------------------------------------------------------------------
*/
Route::get('/banco/{n}', function ($n) {
    return view('banco', compact('n'));
});

/*
|--------------------------------------------------------------------------
| 404
|--------------------------------------------------------------------------
*/
Route::fallback(function () {
    return response()->view('error.404', [], 404);
});
