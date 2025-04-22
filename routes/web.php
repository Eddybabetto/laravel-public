<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\ActiveIngredientController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get("company2", [CompanyController::class, "getcompany2"]);
// Route::get("company2/{id}", [CompanyController::class, "fetchcompany2"]);

Route::resource('company', CompanyController::class)->only([
    'index', 'show'
]);

Route::get("company/{id}/drugs", [CompanyController::class, "get_drugs_by_company_id"]);
 
Route::resource('company', CompanyController::class)->only([
    'create', 'store', 'update', 'destroy'
])->middleware(['auth']);




Route::resource('drug', DrugController::class)->only([
    'index', 'show'
]);
 

Route::get("drug/{id}/company", [DrugController::class, "get_company_by_drug"]);
Route::get("drug/{id}/ingredient", [DrugController::class, "get_ingredient_by_drug"]);
 
Route::resource('drug', DrugController::class)->only([
    'create', 'store', 'update', 'destroy'
])->middleware(['auth']);

Route::resource('ingredient', ActiveIngredientController::class)->only([
    'index', 'show'
]);
 
Route::resource('ingredient', ActiveIngredientController::class)->only([
    'create', 'store', 'update', 'destroy'
])->middleware(['auth']);


Route::get("ingredient/{id}/drugs", [ActiveIngredientController::class, "get_drugs_by_ingredient"]);
 
// Route::get("ingredient/{id}/drugs", ActiveIngredientController::class, "get_drugs_by_active_ingredient");
 
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
