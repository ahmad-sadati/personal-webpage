<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
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
Route::get('/lastshots', function () {
    return view('lastshots');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/send-message', function (Request $request) {
    return
    '<ul>' .
    '<li>' . $request->email . '</li>' .
    '<li>' . $request->phone . '</li>' .
    '<li>' . $request->fullName . '</li>' .
    '<li>' . $request->message . '</li>' .
        '</ul>';
});