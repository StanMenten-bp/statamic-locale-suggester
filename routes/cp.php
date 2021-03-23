<?php

Route::prefix('locale-suggester')->name('statamic-locale-suggester.')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});
