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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('priests','PriestController');

Route::resource('loyals','LoyalController');
Route::resource('ceremonialists','CeremonialistController');
Route::resource('ceremonies','CeremonyController')->middleware('guest');

Route::get('report/tithe','CeremonyController@tithe')->name('report.tithe');
Route::get('report/statistic','LoyalController@statistic')->name('report.statistic');

Route::get('report/ceremony','CeremonyController@reportView')->name('report.ceremony.view');
Route::get('report/ceremony/{ceremony}','CeremonyController@report')->name('report.ceremony');