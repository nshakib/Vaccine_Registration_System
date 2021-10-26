<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-10-20 09:48:30
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-10-26 01:24:23
 */
namespace App\Http\Controllers\Frontend;

//use App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Route;

//admin
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ApplicantListController;

//Frontend

use App\Http\Controllers\Frontend\ApplicantController;
use App\Http\Controllers\Frontend\DashboardController;




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

//Route::get('/', function () {
//   return view('welcome');
//});
Route::get('/',[DashboardController::class,'index'])->name('Dashboard');

Route::get('/registration',[ApplicantController::class, 'index'])->name('Registration');


//Backend
Route::get('/admin',[UserController::class,'index'])->name('user');
Route::get('/admin/applicantlist',[ApplicantListController::class,'index'])->name('applicant');
