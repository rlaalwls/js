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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Front@main');

Route::get('/introduction/company', 'Front@introduction');
Route::get('/introduction/greeting', 'Front@introduction');
Route::get('/introduction/history', 'Front@introduction');
Route::get('/introduction/organization', 'Front@introduction');
Route::get('/introduction/map', 'Front@introduction');

Route::get('/research/intellectual', 'Front@research');
Route::get('/research/quality', 'Front@research');
Route::get('/research/etc', 'Front@research');
Route::get('/research/premier', 'Front@research');


Route::get('/product/list', 'Front@list');
Route::get('/product/view', 'Front@view');

Route::get('/construction_case/list ', 'Front@list');
Route::get('/construction_case/view ', 'Front@view');

Route::get('/construction_result/list ', 'Front@list');
Route::get('/construction_result/view ', 'Front@view');

Route::get('/archives/list ', 'Front@list');
Route::get('/archives/view ', 'Front@view');

Route::get('/login', 'Front@login');
Route::get('/find_member', 'Front@login');

Route::get('/join', 'Front@join');