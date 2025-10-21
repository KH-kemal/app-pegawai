<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\ReportController;

// Route untuk resource controllers
Route::get('/', function () {
    return view('welcome', ['title' => 'Dashboard']);});

Route::resource('employees', EmployeeController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('positions', PositionController::class);
Route::resource('attendances', AttendanceController::class);
Route::resource('salaries', SalaryController::class);
Route::get('/report', [ReportController::class, 'index'])->name('report.index');
Route::get('/report/pdf', [App\Http\Controllers\ReportController::class, 'exportPdf'])->name('report.pdf');


