<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::redirect('/', 'login');
Route::get('p1',function(){//this is just a place holder page im using to test some routes k dont bother with it
    return view('page1');
})->name('page1');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Routes for our faculty interaction page.
Route::get('messages', [ChatController::class, 'OpenChats'])->name('messages'); // Passes all users to the sidebar of the chat.
Route::post('initiatechat', [ChatController::class, 'initiateChat'])->name('chat.start');
Route::post('/send-message', [ChatController::class,'sendMessage'])->name('chat.sendMessage');
Route::post('/load-messages', [ChatController::class,'LoadMessages'])->name('chat.loadMessages');


Route::get('discussion', function () {
    return view('Discussion-Forum-page');
})->name('discussion');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/picture', [ProfileController::class, 'updateProfilePicture'])->name('profile.picture.update'); // Updated route
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
