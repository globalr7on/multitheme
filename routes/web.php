<?php

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


Route::view('/', 'welcome');
// consulting_startup
Route::view('/consulting_startup', 'themes.consulting_startup.index');
Route::view('/consulting_startup/about', 'themes.consulting_startup.about');
Route::view('/consulting_startup/services', 'themes.consulting_startup.services');
Route::view('/consulting_startup/projects', 'themes.consulting_startup.projects');
Route::view('/consulting_startup/prices', 'themes.consulting_startup.prices');
Route::view('/consulting_startup/blog', 'themes.consulting_startup.blog');
Route::view('/consulting_startup/detail-blog', 'themes.consulting_startup.detail-blog');
Route::view('/consulting_startup/contact', 'themes.consulting_startup.contact');
// design_agency
Route::view('/design_agency', 'themes.design_agency.index');
Route::view('/design_agency/standalone', 'themes.design_agency.standalone');
