<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SbuController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MealrateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\DisburshmentController;
use App\Http\Controllers\OfficeLocationController;
// use App\Http\Middleware\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'isAdmin'], function () {
    //Designation
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.dashboard');

    Route::get('/designation/index', [DesignationController::class, 'index'])->name('designation.index');
    Route::get('/designation/create', [DesignationController::class, 'create'])->name('designation.create');
    Route::post('/designation/store', [DesignationController::class, 'store'])->name('designation.store');
    Route::get('/designation/edit/{id}', [DesignationController::class, 'edit'])->name('designation.edit');
    Route::post('/designation/update/{id}', [DesignationController::class, 'update'])->name('designation.update');


    //Meal Rate
    Route::get('/mealrate/index', [MealrateController::class, 'index'])->name('mealrate.index');
    Route::get('/mealrate/create', [MealrateController::class, 'create'])->name('mealrate.create');
    Route::post('/mealrate/store', [MealrateController::class, 'store'])->name('mealrate.store');
    Route::get('/mealrate/edit/{id}', [MealrateController::class, 'edit'])->name('mealrate.edit');
    Route::post('/mealrate/update/{id}', [MealrateController::class, 'update'])->name('mealrate.update');


    //SBU
    Route::get('/sbu/index', [SbuController::class, 'index'])->name('sbu.index');
    Route::get('/sbu/create', [SbuController::class, 'create'])->name('sbu.create');
    Route::post('/sbu/store', [SbuController::class, 'store'])->name('sbu.store');
    Route::get('/sbu/edit/{id}', [SbuController::class, 'edit'])->name('sbu.edit');
    Route::post('/sbu/update/{id}', [SbuController::class, 'update'])->name('sbu.update');

    //Office location
    Route::get('/officelocation/index', [OfficeLocationController::class, 'index'])->name('officelocation.index');
    Route::get('/officelocation/create', [OfficeLocationController::class, 'create'])->name('officelocation.create');
    Route::post('/officelocation/store', [OfficeLocationController::class, 'store'])->name('officelocation.store');
    Route::get('/officelocation/edit/{id}', [OfficeLocationController::class, 'edit'])->name('officelocation.edit');
    Route::post('/officelocation/update/{id}', [OfficeLocationController::class, 'update'])->name('officelocation.update');

    //Unit
    Route::get('/unit/index', [UnitController::class, 'index'])->name('unit.index');
    Route::get('/unit/create', [UnitController::class, 'create'])->name('unit.create');
    Route::post('/unit/store', [UnitController::class, 'store'])->name('unit.store');
    Route::get('/unit/edit/{id}', [UnitController::class, 'edit'])->name('unit.edit');
    Route::post('/unit/update/{id}', [UnitController::class, 'update'])->name('unit.update');
   

});











//  Route::group(['middleware' => 'shareholder'], function () {

//     Route::get('/', [DashboardController::class, 'index'])->name('dashboard.dashboard');


//         //project
//         Route::get('/project/index', [ProjectController::class, 'index'])->name('project.index');
//         Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
//         Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
//         Route::get('/project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
//         Route::get('/project/show/{id}', [ProjectController::class, 'show'])->name('project.show');
//         Route::post('/project/update/{id}', [ProjectController::class, 'update'])->name('project.update');

//         //user
//         Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
//         Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
//         Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
//         Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
//         Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
//         Route::get('/user/show/{id}',[UserController::class,'show'])->name('user.show');

//         //financial
//         Route::get('/financial/index', [FinancialController::class, 'index'])->name('financial.index');
//         Route::get('/financial/create', [FinancialController::class, 'create'])->name('financial.create');

//         //disburshment
//         Route::get('/disburshment/index', [DisburshmentController::class, 'index'])->name('disburshment.index');
//         Route::get('/disburshment/create', [DisburshmentController::class, 'create'])->name('disburshment.create');
//         Route::post('/disburshment/store', [DisburshmentController::class, 'store'])->name('disburshment.store');
//         Route::get('/disburshment/edit/{id}', [DisburshmentController::class, 'edit'])->name('disburshment.edit');
//         Route::post('/disburshment/update/{id}', [DisburshmentController::class, 'update'])->name('disburshment.update');
//         Route::get('/disburshment/show/{id}',[DisburshmentController::class,'show'])->name('disburshment.show');


//       });


      
        //Auth::routes();
        Auth::routes(['register' => true]); //disable register route.['except' => 'logout']

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
