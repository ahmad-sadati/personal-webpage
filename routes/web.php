<?php

use App\Models\Message; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
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
// Route::post('/send-message', function (Request $request) {
//     DB::table('messages')->insert([
//         'email' => $request->email,
//         'mobile' => $request->mobile,
//         'fullName' => $request->fullName,
//         'message' => $request->message,
//     ]);
//     return
//     '<ul>' .
//     '<li>' . $request->email . '</li>' .
//     '<li>' . $request->mobile . '</li>' .
//     '<li>' . $request->fullName . '</li>' .
//     '<li>' . $request->message . '</li>' .
//         '</ul>';
//         return redirect('/contact');
// });
// Route::delete('delete-messages/{id}', function ($id){
//     $message = Message::find($id);
//     $message->delete();
//     return redirect('/contact#messageArea');
// });
// Route::get('edit-message/{id}', function ($id) {
//     $message = Message::find($id);
//     return view('editMessage', ['message'=>$message]);
// });
// Route::put('edit-message/{id}', function (Request $request, $id) {
//     $message = Message::find($id);
//     $message->message = $request->message;
//     $message->save();
//     return redirect('/contact#messageArea');
// });
Route::resource('/messages', MessageController::class);
Route::resource('/blogs', BlogController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';