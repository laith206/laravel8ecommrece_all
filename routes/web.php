<?php

use App\Http\Livewire\Cartcomponet;
use App\Http\Livewire\Checkoutcomponet;
use App\Http\Livewire\Detailscomponet;
use App\Http\Livewire\Homecomponet;
use App\Http\Livewire\Shopcomponet;
use App\Http\Livewire\User\UserDashboardcomponent;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//
Route::get('/',Homecomponet::class);
Route::get('/shop',Shopcomponet::class);
Route::get('/cart',Cartcomponet::class)->name('product.cart');
Route::get('/checkout',Checkoutcomponet::class);
Route::get('/product/{slug}',Detailscomponet::class)->name('product.details');



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// for user and costemar
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashbord',UserDashboardcomponent::class)->name('user.dashbord');

});


// for admin
Route::middleware(['auth:sanctum', 'verified','adminauth'])->group(function () {
    Route::get('/admin/dashbord',UserDashboardcomponent::class)->name('admin.dashbord');

});




