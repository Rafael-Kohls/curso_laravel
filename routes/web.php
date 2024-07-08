<?php

use App\Http\Controllers\ContaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index-contas', [ContaController::class, 'index'])->name('conta.index');
Route::get('create-contas', [ContaController::class, 'create'])->name('conta.create');
Route::post('store-contas', [ContaController::class, 'store'])->name('conta.store');
Route::get('show-contas', [ContaController::class, 'show'])->name('conta.show');
Route::get('edit-contas', [ContaController::class, 'edit'])->name('conta.edit');
Route::put('update-contas', [ContaController::class, 'update'])->name('conta.update');
Route::delete('destroy-contas', [ContaController::class, 'destroy'])->name('conta.destroy');
 