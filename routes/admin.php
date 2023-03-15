<?php

/**
 * Admin routes group.
 *
 * @package App\Http\Controllers\Admin
 */
Route::group(
    [
    'namespace'  => 'App\Http\Controllers\Admin',
    'prefix'     => 'admin',
    'middleware' => ['auth'],
    ], function () {
    
        /**
         * Resource routes for user management.
         */
        Route::resource('user', 'UserController');
    
        /**
         * Resource routes for permission management.
         */
        Route::resource('permission', 'PermissionController');
    
        /**
         * Resource routes for role management.
         */
        Route::resource('role', 'RoleController');
    
        /**
         * Route for displaying account information edit form.
         */
        Route::get('edit-account-info', 'UserController@accountInfo')->name('admin.account.info');
    
        /**
         * Route for storing updated account information.
         */
        Route::post('edit-account-info', 'UserController@accountInfoStore')->name('admin.account.info.store');
    
        /**
         * Route for storing updated password.
         */
        Route::post('change-password', 'UserController@changePasswordStore')->name('admin.account.password.store');
    
        /**
         * Route for displaying admin home page.
         */
        Route::get(
            'home', function () {
                return view('admin.admin-home');
            }
        )->name('admin.home');
    
    }
);

   