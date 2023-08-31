<?php

use App\Http\Controllers\VoteController;
use App\Models\Candidate;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

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

Route::redirect('/', '/login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $candidates = Candidate::all();

        $categories = Candidate::all()->unique('agrupacion');

        $limitDateBool = now()->lt(new Carbon('2024-07-03'));

        return view('dashboard', compact('candidates', 'categories', 'limitDateBool'));
    })->name('dashboard');
});


Route::get('poll', function() {
    return view('poll.index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/storeVote', [VoteController::class, 'store'])->name('sendVote');