<?php

use App\Http\Controllers\Admin\City\ShowController;
use App\Http\Controllers\User\Clients\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'IndexController')->name('index');

/**
 * ADMIN PANEL
 */
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')
        ->name('admin.index');
    });
    /**
     *  CITY
     */
    Route::group(['namespace' => 'City', 'prefix' => 'city'], function () {
        Route::get('/', 'IndexController')
        ->name('admin.city.index');
        Route::get('/create', 'CreateController')
        ->name('admin.city.components.create');
        Route::post('/', 'StoreController')
        ->name('admin.city.components.store');
        Route::get('/{city}', 'ShowController')
        ->name('admin.city.components.show');
        Route::get('/{city}/edit', 'EditController')
        ->name('admin.city.components.edit');
        Route::patch('/{city}', 'UpdateController')
        ->name('admin.city.components.update');
        Route::delete('/{city}', 'DeleteController')
        ->name('admin.city.components.delete');
    });
    /**
     *  BUS
     */
    Route::group(['namespace' => 'Bus', 'prefix' => 'bus'], function () {
        Route::get('/', 'IndexController')
        ->name('admin.bus.index');
        Route::get('/create', 'CreateController')
        ->name('admin.bus.components.create');
        Route::post('/', 'StoreController')
        ->name('admin.bus.components.store');
        Route::get('/{bus}', 'ShowController')
        ->name('admin.bus.components.show');
        Route::get('/{bus}/edit', 'EditController')
        ->name('admin.bus.components.edit');
        Route::patch('/{bus}', 'UpdateController')
        ->name('admin.bus.components.update');
        Route::delete('/{bus}', 'DeleteController')
        ->name('admin.bus.components.delete');
    });
    /**
     *  TIKET
     */
    Route::group(['namespace' => 'Tiket', 'prefix' => 'tiket'], function () {
        Route::get('/', 'IndexController')
        ->name('admin.tiket.index');
        Route::get('/create', 'CreateController')
        ->name('admin.tiket.components.create');
        Route::post('/', 'StoreController')
        ->name('admin.tiket.components.store');
        Route::get('/{tiket}', 'ShowController')
        ->name('admin.tiket.components.show');
        Route::get('/{tiket}/edit', 'EditController')
        ->name('admin.tiket.components.edit');
        Route::patch('/{tiket}', 'UpdateController')
        ->name('admin.tiket.components.update');
        Route::delete('/{tiket}', 'DeleteController')
        ->name('admin.tiket.components.delete');
    });
     /**
     *  ThemeCity
     */
    Route::group(['namespace' => 'ThemeCite', 'prefix' => 'theme'], function () {
        Route::get('/', 'IndexController')
        ->name('admin.themecite.index');
        Route::get('/create', 'CreateController')
        ->name('admin.themecite.components.create');
        Route::post('/', 'StoreController')
        ->name('admin.themecite.components.store');
        Route::get('/{theme}', 'ShowController')
        ->name('admin.themecite.components.show');
        Route::get('/{theme}/edit', 'EditController')
        ->name('admin.themecite.components.edit');
        Route::patch('/{theme}', 'UpdateController')
        ->name('admin.themecite.components.update');
        Route::delete('/{theme}', 'DeleteController')
        ->name('admin.themecite.components.delete');
    });
    /**
     *  Group
     */
    Route::group(['namespace' => 'Group', 'prefix' => 'group'], function () {
        Route::get('/', 'IndexController')
        ->name('admin.group.index');
        Route::get('/create', 'CreateController')
        ->name('admin.group.components.create');
        Route::post('/', 'StoreController')
        ->name('admin.group.components.store');
        Route::get('/{group}', 'ShowController')
        ->name('admin.group.components.show');
        Route::get('/{group}/edit', 'EditController')
        ->name('admin.group.components.edit');
        Route::patch('/{group}', 'UpdateController')
        ->name('admin.group.components.update');
        Route::delete('/{group}', 'DeleteController')
        ->name('admin.group.components.delete');
    });
});
/**
 * USER
 */
Route::group(['namespace' => 'User', 'prefix' => 'main'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')
        ->name('user.index');
        Route::get('/tiket', 'MainController')
        ->name('user.main.main');
        Route::get('/details', 'DetaliController')
        ->name('user.main.datali');
        Route::get('/pay', 'PayController')
        ->name('user.card.pay');
        Route::get('/card', 'PayController')
        ->name('user.card.card');
    });
    Route::group(['namespace' => 'CreditCard', 'prefix' => 'creditka'], function () {
        Route::get('/', 'IndexController')
        ->name('user.card.creditka');
        Route::get('/create', 'CreateController')
        ->name('user.card.components.create');
        Route::post('/', 'StoreController')
        ->name('user.card.components.store');
        Route::get('/{creditka}', 'ShowController')
        ->name('user.card.components.show');
    });
});