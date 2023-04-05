<?php

use App\Http\Controllers\PageController01;
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

// Static routes
Route::get('/',			[PageController01::class, 'home'])->name('home');
Route::get('/donate',	[PageController01::class, 'donate'])->name('donate');

// Dynamic routes
Route::get('/' . config('app.routing.public_pages'), 						[PageController01::class, 'public_page_index'])->name('public_page_index');
Route::get('/' . config('app.routing.public_pages') . '/{slug}', 			[PageController01::class, 'public_page_details'])->name('public_page_details');
Route::get('/' . config('app.routing.organizations'), 						[PageController01::class, 'organization_index'])->name('organization_index');
Route::get('/' . config('app.routing.organizations') . '/{type}', 			[PageController01::class, 'organization_type_index'])->name('organization_type_index');
Route::get('/' . config('app.routing.organizations') . '/{type}/{slug}', 	[PageController01::class, 'organization_details'])->name('organization_details');
