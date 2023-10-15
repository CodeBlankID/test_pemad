<?php

use Illuminate\Support\Facades\Route;
use Modules\Controllers\admin\UserController;
use Modules\Controllers\admin\IndexController;
use Modules\Controllers\admin\OrderController;
use Modules\Controllers\admin\ProjectController;
use Modules\Controllers\admin\LanguageController;
use Modules\Controllers\admin\DashboardController;
use Modules\Controllers\front\IndexController as front_index;



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

Route::middleware(['auth'])->group(function ()
{

    Route::get('admins/klient', [IndexController::class, "klient"]);

    Route::get('admins/dashboard', [DashboardController::class, "index"]);
    Route::get('admins/user', [UserController::class, "index"]);
    Route::get('admins/adduser', [UserController::class, "addUser"]);
    Route::get('admins/edituser/{id}', [UserController::class, "editUser"]);
    Route::get('admins/deleteuser/{id}', [UserController::class, "deleteUser"]);
    Route::post('admins/doadd', [UserController::class, "doAddUser"]);
    Route::post('admins/doedit/{id}', [UserController::class, "doEditUser"]);

    Route::get('admins/lang', [LanguageController::class, "index"]);
    Route::get('admins/addlang', [LanguageController::class, "addLang"]);
    Route::get('admins/editlang/{id}', [LanguageController::class, "editLang"]);
    Route::get('admins/deletelang/{id}', [LanguageController::class, "deleteLang"]);
    Route::post('admins/doaddlang', [LanguageController::class, "doAddLang"]);
    Route::post('admins/doeditlang/{id}', [LanguageController::class, "doEditLang"]);

    Route::get('admins/project', [ProjectController::class, "index"]);
    Route::get('admins/addproject', [ProjectController::class, "addProject"]);
    Route::get('admins/editproject/{id}', [ProjectController::class, "editProject"]);
    Route::get('admins/deleteproject/{id}', [ProjectController::class, "deleteProject"]);
    Route::post('admins/doaddproject', [ProjectController::class, "doAddProject"]);
    Route::post('admins/doeditproject/{id}', [ProjectController::class, "doEditProject"]);
    Route::get('admins/order', [OrderController::class, "index"]);
    Route::post('admins/editorderstatus', [OrderController::class, "editOrderStatus"]);
});

Route::get('admins', [IndexController::class, "index"])->name("admins");
Route::post('admins/dologin', [IndexController::class, "actionlogin"]);
Route::get('admins/dologout', [IndexController::class, "actionLogout"]);

Route::get('/', [front_index::class, "index"]);
Route::get('/login', [front_index::class, "login"]);
Route::get('/logout', [front_index::class, "logout"]);
Route::post('/loginaction', [front_index::class, "ActionLogin"]);
Route::get('/registration', [front_index::class, "registration"]);
Route::get('/profile', [front_index::class, "profile"]);
Route::get('/checkout/{id}', [front_index::class, "checkout"]);
Route::post('/ordersubmit', [front_index::class, "ordersubmit"]);
Route::get('/confirmation', [front_index::class, "confirmation"]);
Route::post('/submitregistration', [front_index::class, "submitregistration"]);