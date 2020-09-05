<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();


//frontend
Route::get('frontend-index','FrontendController@frontend_index');
Route::get('/','FrontendController@frontend_rooms');
Route::get('frontend-about','FrontendController@frontend_about');
Route::get('frontend-booking','FrontendController@frontend_booking');
Route::get('/frontend-room-details/{room_id}','FrontendController@frontend_room_details');



 Route::get('admin','DashboardController@admin')->middleware('admin');
Route::get('all-users','DashboardController@all_users');
Route::get('unactive-employee/{id}','DashboardController@unactive_employee');
Route::get('active-admin/{id}','DashboardController@active_admin');


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
Route::get('edit-client/{id}','ClientsController@edit_client');
Route::post('update-client/{id}','ClientsController@update_client');
Route::get('delete-client/{client_id}','ClientsController@delete_client');

Route::get('unactive-client/{client_id}','ClientsController@unactive_client');
Route::get('active-client/{client_id}','ClientsController@active_client');
//Rooms
Route::get('all-rooms','BookingController@all_rooms');
Route::get('add-room','BookingController@add_room');
Route::post('save-room','BookingController@save_room');
Route::get('edit-room/{room_id}','BookingController@edit_room');
Route::post('update-room/{room_id}','BookingController@update_client');
Route::get('delete-room/{room_id}','BookingController@delete_room');




//room type

Route::get('add-room-type','BookingController@add_room_type');
Route::post('save-room-type','BookingController@save_room_type');
// service
Route::get('add-room-service','BookingController@add_room_service');
Route::post('save-room-service','BookingController@save_room_service');

// cutsomers controller
Route::get('all-customers','CustomerController@all_customers');
Route::get('add-customer','CustomerController@add_customer');
Route::post('save-customer','CustomerController@save_customer');

Route::get('send-email','CustomerController@send_welcome_customer');

//guestClientsController
Route::get('all-guest','EmployeeController@all_guest');
Route::get('checkin-guest','EmployeeController@checkin_guest');
Route::get('checkout-guest','EmployeeController@checkout_guest');

//booking routes
Route::get('all-booking','BookingController@all_booking');
Route::post('save-booking','BookingController@save_booking');

Route::get('unactive-book/{booking_id}','BookingController@unactive_book');
Route::get('active-book/{booking_id}','BookingController@active_book');

//payments
    Route::get('all-payments','PaymentsController@all_payments');
//reservations

Route::get('all-reservations','ReservationController@all_reservations');



Route::get('/home', 'HomeController@index')->name('home');



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
