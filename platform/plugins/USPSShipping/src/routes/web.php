<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Botble\USPSShipping\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(['prefix' => 'admin/usps-shipping', 'middleware' => 'auth:admin'], function () {
        Route::get('/settings', 'ShippingController@settings')->name('usps.settings');
        Route::post('/settings/save', 'ShippingController@saveSettings')->name('usps.settings.save');
        Route::get('/manage', 'ShippingController@manage')->name('usps.manage');
        Route::get('/transaction/{id}/reprint', 'ShippingController@reprintLabel')->name('usps.transaction.reprint');
    });

    // Placeholder for front-end routes
});