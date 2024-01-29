<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\MenteeController;


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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admindashboard', function () {
    return view('admindashboard');
})->name('admindashboard');

Route::get('/listofmentors', [MentorController::class, 'listOfMentors'])->name('mentor.list');

Route::get('/admindashboard', [MenteeController::class, 'adminDashboard'])->name('admindashboard');

Route::get('/mentors', [MentorController::class, 'meteeDashboard'])->name('meteeDashboard');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/registration',  [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/addmentor', [MentorController::class, 'addmentor'])->name('addmentor');
Route::post('/addmentor', [MentorController::class, 'store'])->name('mentor.post');

// Route::get('/menteedashboard', [MenteeController::class, 'addMentee'])->name('menteedashboard');
// Route::post('/menteedashboard', [MenteeController::class, 'menteePost'])->name('mentee.post');

Route::get('/menteedashboard', [MenteeController::class, 'addMentee'])->name('menteedashboard');
Route::post('/menteedashboard', [MenteeController::class, 'menteePost'])->name('store-mentee');

