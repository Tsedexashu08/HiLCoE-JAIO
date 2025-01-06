<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DiscussionForumController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::redirect('/', 'login');
Route::get('p1',[DiscussionForumController::class,'trygetPosts'])->name('page1');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//routes for homepage
Route::get('home', function () {
    return view('Home-Page');
})->name('home');


// Routes for our faculty interaction page.
Route::get('messages', [ChatController::class, 'OpenChats'])->name('messages'); // Passes all users to the sidebar of the chat.
Route::post('initiatechat', [ChatController::class, 'initiateChat'])->name('chat.start');
Route::post('/send-message', [ChatController::class,'sendMessage'])->name('chat.sendMessage');
Route::post('/load-messages', [ChatController::class,'LoadMessages'])->name('chat.loadMessages');

//routes for discussion forum page
Route::post('add-post', [DiscussionForumController::class, 'addPost'])->name('discussion.addPost');

//joblistingpage routes
Route::get('joblisting', function () {
    return view('Job-Listing-Page');
})->name('joblisting');

//Routes for discussion-forum-page
Route::get('discussion', [DiscussionForumController::class, 'getPosts'])->name('discussion');

//routes for networking events page
Route::get('networking', function () {
    return view('networking-events-page');
})->name('networking');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/picture', [ProfileController::class, 'updateProfilePicture'])->name('profile.picture.update'); // Updated route
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
