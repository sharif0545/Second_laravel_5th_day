<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\wesiteController;
use App\Http\Controllers\Admin\BackendController;
use App\Http\Controllers\Admin\AboutSectionController;
use App\Http\Controllers\Admin\DashboardController;




Route::get('/', [wesiteController::class, 'mywebSite'])->name("website");
Route::get('/heroform', [BackendController::class, 'hero_form'])->name("admin.heroform");
Route::post('/heroformsave',[BackendController::class,'hero_form_save'])->name("admin.heroformsave");
Route::post('/heroupdate',[BackendController::class,'hero_form_update'])->name("admin.heroupdate");


Route::get('/herolist',[BackendController::class,'hero_list'])->name("admin.herolist");
Route::get('/herodelete/{id}',[BackendController::class,'hero_delete'])->name("admin.herodelete");
Route::get('/heroedit/{id}',[BackendController::class,'hero_edit'])->name("admin.heroedit");


Route::get('/aboutform',[AboutSectionController::class,'about_form'])->name("admin.aboutform");
Route::post('/aboutformsave',[AboutSectionController::class,'about_form_save'])->name("admin.aboutformsave");

Route::get('/dashboard',[DashboardController::class,'dash_board'])->name("admin.dashboard_home");
