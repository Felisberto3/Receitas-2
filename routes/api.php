<?php

use App\Http\Controllers\DetalhesController;
use Illuminate\Support\Facades\Route;

Route::get('detalhes/{receitaId}', [DetalhesController::class, 'index'])->name('detalhes');