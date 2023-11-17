<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use App\Models\User;

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
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {       
            $users = User::all();
            return view('dashboard', ['users' => $users]);
    })->name('dashboard');
});

Route::get("/user/register", [UserController::class, "register"])->name("register.user.view");
Route::post("/user/register", [UserController::class, "store"])->name("register.user");

Route::get("/edit/{id}", [UserController::class, "edit"])->name("edit.user");
Route::post("/edit/{id}", [UserController::class, "update"])->name("update.user");

Route::get("/delete/{user}", [UserController::class, "softDelete"])->name("delete.user");