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
//     return view('frontend.index');
// });

//frontend
Route::get('/','FrontendController@frontend_index');
Route::get('frontend-rooms','FrontendController@frontend_rooms');
Route::get('frontend-about','FrontendController@frontend_about');
Route::get('frontend-booking','FrontendController@frontend_booking');
Route::get('/frontend-room-details/{room_id}','FrontendController@frontend_room_details');



Route::get('admin','DashboardController@admin');
//employee routes
Route::get('all-employees','EmployeeController@all_employees');
Route::get('add_employee','EmployeeController@add_employee');
Route::post('save-employee','EmployeeController@save_employee');


Route::get('employee-leave','EmployeeController@employee_leave');
Route::get('employee-holiday','EmployeeController@employee_holiday');
Route::get('employee-attendance','EmployeeController@employee_attendance');


Route::get('add-leave','EmployeeController@add_leave');
Route::get('add-holiday','EmployeeController@add_holiday');
Route::get('add-attendance','EmployeeController@add_attendance');
//clients
Route::get('all-clients','ClientsController@all_clients');
Route::get('add-client','ClientsController@add_client');
Route::post('save-client','ClientsController@save_client');
Route::get('edit-client','ClientsController@edit_client');
Route::post('update-client','ClientsController@update_client');
Route::get('edit-client','ClientsController@update_client');
Route::get('delete-client','ClientsController@delete_client');
//booking
Route::get('all-rooms','BookingController@all_rooms');
Route::get('add-room','BookingController@add_room');
Route::post('save-room','BookingController@save_room');
Route::get('edit-room','BookingController@edit_client');
Route::post('update-room','BookingController@update_client');
Route::get('edit-room','BookingController@edit_room');
Route::get('delete-room','BookingController@delete_room');

//room type

Route::get('add-room-type','BookingController@add_room_type');
Route::post('save-room-type','BookingController@save_room_type');
// service
Route::get('add-room-service','BookingController@add_room_service');
Route::post('save-room-service','BookingController@save_room_service');

//guestClientsController
Route::get('all-guest','EmployeeController@all_guest');
Route::get('checkin-guest','EmployeeController@checkin_guest');
Route::get('checkout-guest','EmployeeController@checkout_guest');

//booking routes
Route::get('all-booking','BookingController@all_booking');
Route::post('save-booking','BookingController@save_booking');

//payments
    Route::get('all-payments','PaymentsController@all_payments');
//reservations

Route::get('all-reservations','ReservationController@all_reservations');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
