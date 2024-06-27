<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\dashController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EstimateController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/dashboard', function () {
//   return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//   Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

Route::resource('/customer', 'App\Http\Controllers\CustomerController');
Route::resource('/estimate', 'App\Http\Controllers\EstimateController');
Route::post('/request-ride', "App\Http\Controllers\CustomerController@requestRide")->name('request.ride');
Route::get('/fetch-fare-rate', 'App\Http\Controllers\CustomerController@fetch');
Route::post('/order-placed/{string}', 'App\Http\Controllers\CustomerController@orderPlaced')->name('order.placed');
Route::post('/allocated/{order}/{id}', 'App\Http\Controllers\adminController@allocatedRide');

//Customer Dashboard Routes
Route::get('/dashboard', "App\Http\Controllers\dashcontroller@dashboard")->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/profile', "App\Http\Controllers\dashcontroller@profile")->middleware(['auth', 'verified'])->name('profile');
Route::get('/history', "App\Http\Controllers\dashcontroller@history")->middleware(['auth', 'verified'])->name('history');
Route::get('/address', "App\Http\Controllers\dashcontroller@address")->middleware(['auth', 'verified'])->name('address');
Route::get('/trackorder/{id}', "App\Http\Controllers\dashcontroller@trackorder")->name('trackorder');
Route::get('/orderhistory', "App\Http\Controllers\dashcontroller@orderhistory")->name('orderhistory');

Route::group(['middleware' => ['auth']], function() {
//Admin Dashboard Routes
Route::get('/admindashboard', "App\Http\Controllers\admincontroller@admindashboard")->name('admindashboard');
Route::get('/managedriver', "App\Http\Controllers\admincontroller@managedriver")->name('managedriver');
Route::get('/driverreg', "App\Http\Controllers\admincontroller@driverreg")->name('driverreg');
Route::post('/storeDriver', "App\Http\Controllers\admincontroller@storeDriver")->name('storeDriver');
Route::get('/managepartners', "App\Http\Controllers\admincontroller@managepartners")->name('managepartners');
Route::get('/partnersreg', "App\Http\Controllers\admincontroller@partnersreg")->name('partnersreg');
Route::post('/storePartner', "App\Http\Controllers\admincontroller@storePartner")->name('storePartner');
Route::get('/alldriver', "App\Http\Controllers\admincontroller@alldriver")->name('alldriver');
Route::get('/allpartner', "App\Http\Controllers\admincontroller@allpartner")->name('allpartner');
Route::get('/manageadminuser', "App\Http\Controllers\admincontroller@manageadminuser")->name('manageadminuser');
Route::get('/adminuserreg', "App\Http\Controllers\admincontroller@adminuserreg")->name('adminuserreg');
Route::post('/store_admin_user', "App\Http\Controllers\admincontroller@storeAdminUser")->name('storeAdminUser');
Route::get('/alladminuser', "App\Http\Controllers\admincontroller@alladminuser")->name('alladminuser');
Route::get('/alluser', "App\Http\Controllers\admincontroller@alluser")->name('alluser');
Route::get('/orderallocation', "App\Http\Controllers\admincontroller@orderallocation")->name('orderallocation');

//Driver Dashboard Routes
Route::get('/driverdash', "App\Http\Controllers\drivercontroller@allocatedRide")->name('allocatedRide');
Route::post('/add-driver', "App\Http\Controllers\drivercontroller@add_driver")->name('addDriver');
Route::get('/task', "App\Http\Controllers\drivercontroller@task")->name('task');
Route::get('/statement', "App\Http\Controllers\drivercontroller@statement")->name('statement');
Route::get('/accept_order/{id}', "App\Http\Controllers\drivercontroller@acceptOrder")->name('accept_order');
Route::get('/picked_up/{id}', "App\Http\Controllers\drivercontroller@pickedUp")->name('picked_up');
Route::get('/delivered/{id}', "App\Http\Controllers\drivercontroller@delivered")->name('delivered');
Route::get('/decline/{id}', "App\Http\Controllers\drivercontroller@declined")->name('declined');
});
//Partner Dashboard Routes
// Route::get('/orderhistory', "App\Http\Controllers\partnercontroller@orderhistory")->name('orderhistory');
// Route::get('/trackorder', "App\Http\Controllers\partnercontroller@trackorder")->name('trackorder');


require __DIR__.'/auth.php';
