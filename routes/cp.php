<?php

use Parfaitementweb\StatamicLocaleSuggester\Http\Controllers\DashboardController;

Route::prefix('locale-suggester')->name('statamic-locale-suggester.')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
