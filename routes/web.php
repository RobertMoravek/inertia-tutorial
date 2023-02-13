<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("login", [LoginController::class, "create"])->name("login");
Route::post("login", [LoginController::class, "store"]);

Route::middleware("auth")->group(function () {


Route::get('/', function () {
    return inertia('Home', [
        "name" => "Robert"
    ]);
});

Route::get('/users', function () {
    return inertia('Index', [
        "users" => \App\Models\User::query()
            ->when(Request::input("search"), function ($query, $search){
                $query->where("name", "like", "%{$search}%" );
            })
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user) => [
            "id" => $user->id,
            "name" => $user->name
        ]),
        "filters" => Request::only(["search"])

    ]);
});

Route::post('/users', function () {
    $attributes = Request::validate([
        "name" => "required",
        "email" => ["required", "email"],
        "password" => "required"
    ]);
    User::create($attributes);
    return redirect("/users");
});

Route::get('/users/create', function () {
    return inertia('Create');
});

Route::get('/settings', function () {
    return inertia('Settings', [
        "name" => "Robert"
    ]);
});

Route::post("/logout", function () {
    dd("logged out");
} );

});
