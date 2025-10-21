<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\ReportController;

// Route untuk resource controllers
Route::resource('employees', EmployeeController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('positions', PositionController::class);
Route::resource('attendances', AttendanceController::class);
Route::resource('salaries', SalaryController::class);
Route::get('/report', [ReportController::class, 'index'])->name('report.index');
Route::get('/report/pdf', [App\Http\Controllers\ReportController::class, 'exportPdf'])->name('report.pdf');


//route belajar dasar laravel pal sandhika
// Route::get('/user', function () {
//     return view('laravel');
// });
// Route::get('/about', function () {
//     return view('about',['nama'=>'kemal']);
// });
// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/blog', function () {
//     return view('blog',['nama'=>'kemal']);
// });
// Route::get('/contact', function () {
//     return view('contact',['nama'=>'kemal']);
// });


