<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MobileController;
use App\Http\Controllers\InsuranceController;

use App\Http\Livewire\AddForm;
use App\Http\Livewire\EditForm;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/index/dashboard',[MobileController::class,'dashboard']);


//Mobile Routes
Route::get('/mobile',[MobileController::class,'mobileview']);
Route::post('/edit/mobile/data',[EditForm::class,'render']);





Route::get('/insurance',[InsuranceController::class,'insuranceview']);
