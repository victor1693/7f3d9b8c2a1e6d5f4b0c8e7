<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\VerifyAccountController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SignOutController; 
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\ProfileController; 

Route::get('home', [HomeController::class, 'create']);
Route::get('profile', [ProfileController::class, 'create']);
Route::get('profile-cuentas', [ProfileController::class, 'cuentas']);
Route::get('profile-seguridad', [ProfileController::class, 'seguridad']);

/*
# RUTAS PUBLICAS
#Route::middleware(['VerifySession'])->
#group(function () {
	Route::get('/', [SignInController::class, 'create']);
	Route::get('/signUp', [SignUpController::class, 'create']);
	Route::post('/user/store', [UserController::class, 'store']);
	Route::post('/user/signIn', [SignInController::class, 'show']);
#}); 
# RUTAS SEGURAS
#Route::middleware(['AuthClipper'])->group(function () { 

	

	Route::get('/verifyAccount', [VerifyAccountController::class, 'create']);
	Route::get('/campaigns', [CampaignController::class, 'index']); 
	Route::get('/campaign/{id}', [CampaignController::class, 'show']);  
	Route::post('/account/store', [AccountController::class, 'store']);  
	Route::get('/signOut', [SignOutController::class, 'signOut']); 

#}); 

#  RUTAS DE API
Route::get('/api/account-not-verified', [AccountController::class, 'indexNotVerified']);
*/
