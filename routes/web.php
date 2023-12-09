<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\checkSession;
use App\Models\Item;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', function () {
    return view('users.login');
});
Route::post('loginv', [UserController::class, 'loginv']);

// Route::middleware([checkSession::class])->group(function () {
// });

Route::get('dashboard', function () {
    $title = "IIMS | Dashboard";
    return  view('dashboard', ['title' => $title]);
})->middleware([checkSession::class]);

Route::fallback(function () {
    return view('portal/404');
});

Route::get('logout', function () {
    session()->forget('user');
    return redirect('login');
});

Route::get('items', [ItemController::class, "index"])->middleware([checkSession::class]);


Route::get('category', function () {
    $title = "IIMS | Category";
    return view('category', ['title' => $title]);
});

Route::get('help', function () {
    $title = "IIMS | Help";
    return view('help', ['title' => $title]);
});


Route::get('transfer', function () {
    $title = "IIMS | Transfer";
    return view('transfer', ['title' => $title]);
});


Route::get('users', function () {
    $title = "IIMS | Users";
    return view('users.register', ['title' => $title]);
})->middleware([checkSession::class]);


Route::post('new.item', [ItemController::class, "create"])->name('new.item')->middleware([checkSession::class]);

Route::get('items.view', [ItemController::class, "view"])->name('items.view')->middleware([checkSession::class]);


Route::get("/pass={pass}", function ($pass) {
    $pass = bcrypt($pass);
    return $pass;
});


Route::get('items.edit/{id}', [ItemController::class, "edit"])->name('items.edit')->middleware([checkSession::class]);

Route::get('items.show/{id}', [ItemController::class, "show"])->name('items.show')->middleware([checkSession::class]);

Route::get('items.transfer', function () {
    $title = "IIMS | Transfer";
    return view('items.transfer', ['title' => $title]);
})->name('items.show')->middleware([checkSession::class]);