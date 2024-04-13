<?php

use App\Models\UserItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;

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


/*

When Laravel is trying to match a url to a route, it starts at the top of the 
route file and works it's way down until it finds something that will 
match. So, more specific routes need to come before wildcard 
routes so if it doesn't match the specific route 
(/user/create) it will continue down.

*/

// ---------------------------
// >>>        ITEMS        <<<
// ---------------------------

// Show Index (Auth = Items | Else = Hero)
Route::get('/', [ItemController::class, 'index']);

// Show My Items
Route::get('/mine', [ItemController::class, 'mine'])->middleware('auth');

// Show the Search results page
Route::get('/search', function(Request $request) {
    return $request;
});

// Show the CREATE new item form 
Route::get('/items/create', [ItemController::class, 'create'])->middleware('auth');

// Store the data from the create new item form
Route::post('/items', [ItemController::class, 'store'])->middleware('auth'); 

// Show the edit item page
Route::get('/items/{item}/edit', [ItemController::class, 'edit'])->middleware('auth'); 

// Save the EDITED data
Route::put('/items/{item}', [ItemController::class, 'update'])->middleware('auth');

// Manage Own Items
Route::get('/items/manage', [ItemController::class, 'manage'])->middleware('auth');

// Delete item
Route::delete('/items/{item}', [ItemController::class, 'delete'])->middleware('auth');

// Show a Single item
Route::get('/items/{item}', [ItemController::class, 'show'])->middleware('auth');   
// ^^^ this ^^^ is currently guarding the content from non-registered users - need to think if this is useful


// ---------------------------
//  >>>        USER        <<<
// ---------------------------

// show the user registration form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create new user
Route::post('/users', [UserController::class, 'store']);

// Logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show user login page
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// User Authentication
Route::post('/users/authenticate', [UserController::class, 'authenticate']);