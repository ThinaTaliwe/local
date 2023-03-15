<?php
/**
 * Web routes for the application.
 *
 * PHP version 9
 *
 * @author    Siyabonga Alexander Mnguni <alexmnguni57@gmail.com>
 * @copyright 2023 1Office
 * @license   MIT License
 * @link      https://github.com/alexmnguni57/1Office-GBA
 */

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\MyWelcomeController;
use App\Http\Controllers\MembershipsController;
use App\Http\Middleware\WelcomesNewUsers as MiddlewareWelcomesNewUsers;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\WelcomeNotification\WelcomeController;

/**
 * Route for displaying the homepage.
 */
Route::get(
    '/', function () {
        return view('home');
    }
)->name('home');

/**
 * Route for displaying the member view.
 */
Route::get(
    '/member', function () {
        return view('view-member');
    }
);

/**
 * Routes for Spatie Welcome Notification.
 */
Route::group(
    ['middleware' => ['web', MiddlewareWelcomesNewUsers::class]], function () {
        /**
         * Route for displaying the welcome form.
         */
        Route::get('welcome/{user}', [MyWelcomeController::class, 'showWelcomeForm'])->name('welcome');

        /**
         * Route for saving the user's password.
         */
        Route::post('welcome/{user}', [UserController::class, 'savePassword'])->name('savePassword');
    }
);

/**
 * Route for saving user information.
 */
Route::post('onboarding/{user}', [MyWelcomeController::class, 'saveUserInfo'])->name('save-user-info');

/**
 * Route for displaying the add user info form.
 */
Route::get('onboarding/{user}', [WelcomeController::class, 'showAddUserInfoForm'])->name('onboarding');

/**
 * Routes for memberships.
 */
Route::get('/memberships', 'App\Http\Controllers\MembershipsController@index')->name('memberships');

Route::controller(MembershipsController::class)->group(
    function () {
        /**
         * Route for displaying the membership index.
         */
        Route::get('/memberships', 'index')->name('memberships');

        /**
         * Route for displaying a member.
         */
        Route::get('/view-member/{id}', 'show')->name('view-member');

        /**
         * Route for editing a member.
         */
        Route::get('/edit-member/{id}', 'edit')->name('edit-member');

        /**
         * Route for cancelling a member.
         */
        Route::get('/cancel-member/{id}', 'delete')->name('cancel-member');

        /**
         * Route for adding a member.
         */
        Route::get('/add-member', 'create')->name('add-member');
        Route::post('/add-member', 'store')->name('add-member.store');
    }
);

/**
 * Routes for dependants.
 */
Route::get('/dependants', 'App\Http\Controllers\DependantsController@index')->name('dependants');

/**
 * Routes for recieving your christmas presents.
 */
Route::get('/presents', 'App\Http\Controllers\PresentsController@index');

/**
 * Route for adding a dependant.
 */
Route::post('/add-dependant', 'App\Http\Controllers\DependantsController@store')->name('add-dependant.store');

/**
 * Route for removing a dependant.
 */
Route::get('/remove-dependant/{id}', 'App\Http\Controllers\DependantsController@delete')->name('remove-dependant');

require __DIR__ . '/auth.php';
