<?php
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web'], 'prefix' => 'dashboard'], function () {
    Route::get("/", [Module\Dashboard\Controllers\IndexController::class, 'index'])->name("dashboard.index");
    Route::get("/blank", [Module\Dashboard\Controllers\IndexController::class, 'blank'])->name("dashboard.blank");
    Route::get("/settings", [Module\Dashboard\Controllers\SettingController::class, 'index'])->name("dashboard.settings.index");
    Route::middleware(['guest:admins'])
         ->group(function(){
             Route::get("/login",[Module\Dashboard\Controllers\LoginController::class, "showLoginForm"])->name("dashboard.login");
             Route::post("/login",[Module\Dashboard\Controllers\LoginController::class, "login"])->name("dashboard.login.authorization");
         });
});


