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
    return view('admin.dashboard');
});

Route::get('admin','DashboardController@admin');
//employee routes
Route::get('all-employees','EmployeeController@all_employees');
Route::get('employee-leave','EmployeeController@employee_leave');
Route::get('employee-holiday','EmployeeController@employee_holiday');
Route::get('employee-attendance','EmployeeController@employee_attendance');

Route::get('add-employee','EmployeeController@add_employee');
Route::get('add-leave','EmployeeController@add_leave');
Route::get('add-holiday','EmployeeController@add_holiday');
Route::get('add-attendance','EmployeeController@add_attendance');
//guest
Route::get('all-guest','EmployeeController@all_guest');
Route::get('checkin-guest','EmployeeController@checkin_guest');
Route::get('checkout-guest','EmployeeController@checkout_guest');

//booking routes
Route::get('all-booking','BookingController@all_booking');


//payments
    Route::get('all-payments','PaymentsController@all_payments');
//reservations

Route::get('all-reservations','ReservationController@all_reservations');
