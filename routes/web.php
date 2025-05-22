<?php

use App\Http\Controllers\RecetteController;
use App\Models\Recette;
use Illuminate\Support\Facades\Route;

Route::get('/recette/create', [RecetteController::class, 'create'])->name('recettes.create');
Route::get('/recette/{id}/edit', [RecetteController::class, 'edit'])->name('recettes.edit');
Route::get('/recette/{id}/delete', [RecetteController::class, 'destroyView'])->name('recettes.delete.view');

Route::post('/recette', [RecetteController::class, 'store'])->name('recettes.store');
Route::put('/recette/{id}', [RecetteController::class, 'update'])->name('recettes.update');
Route::delete('/recette/{id}', [RecetteController::class, 'destroy'])->name('recettes.destroy');

Route::get('/recettes', function () {
    $recettes = Recette::all();
    return view('recettes.index', compact('recettes'));
})->name('recettes.index');

Route::get('/recette/{id}', function ($id) {
    $recette = Recette::findOrFail($id);
    return view('recettes.show', compact('recette'));
})->name('recettes.show');
