<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'login');
Route::get('p1',function(){
    return view('page1');
})->name('page1');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//routes for our faculty interaction page.
Route::get('messages',[ChatController::class,'OpenChats']);//this one passes all users to the side bar of the chat(uk so we populate it with options to chat like telegram).
Route::get('chat/{id}', [ChatController::class, 'OpenChat'])->name('chat.open');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/picture', [ProfileController::class, 'updateProfilePicture'])->name('profile.picture.update'); // Updated route
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
