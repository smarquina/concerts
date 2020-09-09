<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Concert\ConcertController;
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

Route::group(array('as' => 'concert.', 'namespace' => 'Concert'), function () {
    Route::get('/', [ConcertController::class, 'index'])->name('index');
    Route::post('store', [ConcertController::class, 'store'])->name('store');

});
