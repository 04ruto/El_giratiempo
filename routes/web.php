<?php

use App\Http\Controllers\BotigaController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Redirigeix a la pagina de registrar-se
Route::get('/logup', function () {
    return view("register");
});

// Funció de crear l'ususari
Route::post(
    '/newUser',
    [BotigaController::class, "newUser"]
);

// Redirigeix a la pagina d'iniciar sessió
Route::get('/login', function () {
    return view("login");

})->name("login");

// Funció per iniciar sessió
Route::post(
    '/oldUser',
    [BotigaController::class, "oldUser"]
);

Route::get(
    '/logout',
    [BotigaController::class, "logout"]
);

// Redirigeix a la pagina principal
Route::get('/', function () {

    $adminUser = User::where('email', 'admin@admin.com')->first();

    // Si no existe, crea el usuario
    if (!$adminUser) {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Admin Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin12345'),
            'role' => 'admin',
            'active' => true,
        ]);
    }

    return view("main");
});

// Redirigeix a la botiga
Route::get(
    '/store',
    [BotigaController::class, "store"]
)->name("store");

Route::get(
    '/store/{prod}',
    [BotigaController::class, "showProd"]

)->middleware("auth");

Route::post(
    '/store/{prod}/purchase/{show}',
    [BotigaController::class, "buyProd"]

)->middleware("auth")->name("purchase");

Route::post(
    '/card/add',
    [BotigaController::class, "addCard"]

)->middleware("auth");

Route::get(
    '/store/{prod}/purchase/{show}/{card}/{cant}',
    [BotigaController::class, "buyProd"]

)->middleware("auth");

Route::get(
    '/purchaseDone/{prod}/{cant}',
    [BotigaController::class, "purchase"]

)->middleware("auth");

// Redirigeix a la pagina de categories
Route::get('/categories', function () {
    return view("categories");

});

// Redirigeix a la pagina de categories
Route::get('/contact', function () {
    return view("contact");

});

// Redirigeix a la pagina de categories
Route::get(
    '/dashboard',
    [BotigaController::class, "dashboard"]
);

Route::post(
    '/newCat',
    [BotigaController::class, "newCategory"]

);

Route::get(
    '/delCat',
    [BotigaController::class, "delCategory"]
);

Route::post(
    '/newProd',
    [BotigaController::class, "newProduct"]

);

Route::post(
    '/modProd',
    [BotigaController::class, "modProduct"]
);

Route::get(
    '/userStatus',
    [BotigaController::class, "updUser"]
);



