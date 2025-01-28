<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DiscussionForumController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\LogUserActivity;

Route::redirect('/', 'login');
Route::get('p1', [DiscussionForumController::class, 'trygetPosts'])->name('page1');


Route::get('/home-page', function () {
    return view('Home-Page');
})->middleware(['auth', 'verified'])->name('dashboard');

//routes for homepage
Route::get('home', function () {
    return view('Home-Page');
})->name('home');


// Routes for our faculty interaction page.
Route::get('messages', [ChatController::class, 'OpenChats'])->name('messages'); // Passes all users to the sidebar of the chat.
Route::post('initiatechat', [ChatController::class, 'initiateChat'])->name('chat.start');
Route::post('/send-message', [ChatController::class, 'sendMessage'])->name('chat.sendMessage');
Route::post('/load-messages', [ChatController::class, 'LoadMessages'])->name('chat.loadMessages');

//routes for discussion forum page
Route::post('add-post', [DiscussionForumController::class, 'addPost'])->name('discussion.addPost')->middleware('LogUserAction:made a forum post');
Route::post('forum/comment', [DiscussionForumController::class,'AddComment'])->name('forum.comment');

//joblistingpage routes
Route::get('joblisting', function () {
    return view('Job-Listing-Page');
})->name('joblisting');
Route::get('admin/add-event', function(){
    return view('Add-Event');
})->name('admin.addevent');
Route::get('admin/add-internship', function(){
    return view('Add-Job');
})->name('admin.addjob');
Route::get('admin/add-resource', function(){
    return view('Add-Resource');
})->name('admin.addresource');
Route::post('jobs/add-job',[JobController::class,'AddJob'])->name('job.add');
Route::post('jobs/add-event',[EventsController::class,'AddEvent'])->name('event.add');



//user managment route(will change to be role checked after i've figured out the roles & permissions thing).
Route::get('user-management', [UserManagementController::class, 'FetchsUserAndRoles'])->name('users');
Route::delete('/user/delete/{id}',[UserManagementController::class,'DeleteUser'])->name('user.destroy');
Route::get('/user/view/{id}',[UserManagementController::class,'ViewUser'])->name('user.view');
Route::get('/user/edit/{id}',[UserManagementController::class,'EditUser'])->name('user.edit');

//Routes for discussion-forum-page
Route::get('discussion', [DiscussionForumController::class, 'getPosts'])->name('discussion');

//routes for networking events page
Route::get('networking', function () {
    return view('networking-events-page');
})->name('networking');



//routes for resources page
Route::get('/resources', [ResourceController::class, 'index'])->name('Resources');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // routes for networking account-page
    Route::get('account', function () {
        return view('AccountPage');
    })->name('account');


    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/picture', [ProfileController::class, 'updateProfilePicture'])->name('profile.picture.update'); 
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';
