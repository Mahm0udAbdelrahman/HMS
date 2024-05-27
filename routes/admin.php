<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\EmployeeController;
use App\Http\Controllers\Dashboard\SubscriptionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\CountryController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\EnterpriseController;
use App\Http\Controllers\Dashboard\PermissionController;
use App\Http\Controllers\Dashboard\SpecialtiesController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){



        Route::prefix('dashboard')->as('admin.')->group(function(){

            Route::get('/home', function () {
                return view('dashboard.home.index');
            })->name('main');


            Route::resources([
                'setting' => SettingController::class,
                'permissions' => PermissionController::class,
                'roles' => RoleController::class,
                'enterprises'=> EnterpriseController::class,
                'subscriptions' => SubscriptionController::class,
                'employees' => EmployeeController::class,
                'categories' => CategoryController::class
            ]);


            Route::get('dropdown', [CountryController::class, 'index'])->name('countries');
            Route::post('fetch-states', [CountryController::class, 'fetchState']);
            Route::post('fetch-cities', [CountryController::class, 'fetchCity']);



            Route::get('specialty', [SpecialtiesController::class, 'index'])->name('specialties');
            Route::post('subspecialty', [SpecialtiesController::class, 'fetchState']);


        });





        // Route::get('/', function () {
        //     return view('welcome');
        // });

        // Route::get('/dashboard', function () {
        //     return view('dashboard');
        // })->middleware(['auth', 'verified'])->name('dashboard');



        require __DIR__.'/auth.php';






    });