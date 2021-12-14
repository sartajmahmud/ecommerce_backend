<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/mediaupload', [ \App\Http\Controllers\MediaController::class, 'uploadImage' ])->name('media.upload.post');

Route::get('/welcomebanner', [ \App\Http\Controllers\WelcomeBannerController::class, 'index'])->name('welcome.banner.get');
Route::get('/sliders', [ \App\Http\Controllers\SliderController::class, 'index'])->name('sliders.get');
Route::get('/topcategories', [ \App\Http\Controllers\TopCategoryController::class, 'index'])->name('top.categories.get');
Route::get('/flashsales', [ \App\Http\Controllers\FlashSaleController::class, 'index'])->name('flash.categories.get');
Route::get('/todaysdeal', [ \App\Http\Controllers\TodaysDealController::class, 'index'])->name('todays.deal.get');
Route::get('/featuredproduct', [ \App\Http\Controllers\FeaturedProductController::class, 'index'])->name('featured.product.get');
Route::get('/allcategories', [ \App\Http\Controllers\CategoryController::class, 'index'])->name('categories.get');
Route::get('/categoryproduct/{id}', [ \App\Http\Controllers\CategoryController::class, 'getCategoryProduct'])->name('category.product.get');
Route::get('/sellers', [ \App\Http\Controllers\SellerController::class, 'index'])->name('sellers.get');
//Route::get('/categoryproduct/{id}', [ \App\Http\Controllers\CategoryController::class, 'getCategoryProduct'])->name('category.product.get');
