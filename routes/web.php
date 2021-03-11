<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirlineController;


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
// to view register page

Route::get('/register', function () {
    return view('register');
});

//to insert

Route::post("/regist",[AirlineController::class,'regAdd']);
//login
//login form
Route::get('/login_form', function () {
    return view('login');
});

//login
//login
Route::post("log_in",[AirlineController::class,'login']);

/*
@function name:index
@function:Load the index page
@author:Anjali Krishnan
@date:09/03/2021
*/
Route::get('/index', function () {
    return view('index');
});
/*
@function name:admin
@function:Load the admin home page
@author:Anjali Krishnan
@date:10/03/2021
*/

Route::get('admin', function () {
    return view('adminhome');
});



Route::get('/registeration', function () {
    return view('registration');
});

Route::view('flightbook','flight_book');
Route::get("/flight",[AirlineController::class,'flight_book']);

/*
@function name:addflightform
@function:load the flight page
@author:Jyalekshmi L
@date:09/03/2021
*/
Route::view('addflightform','flightreg');
/*
@function name:addflight
@function:add the flight details
@author:Jayalekshmi L
@date:09/03/2021
*/
Route::get('addflight',[AirlineController::class,'addflight']);//insert addflights form data into db
/*
@function name:viewflight
@function:view the flight details
@author:Anjali Krishnan
@date:10/03/2021
*/
Route::get('viewflight',[AirlineController::class,'viewflight']);
/*
@function name:update
@function:update the flight details
@author:Anjali Krishnan
@date:10/03/2021
*/
Route::get('update/{id}',[AirlineController::class,'update']);
Route::post('updateData',[AirlineController::class,'updateData']); 
/*
@function name:delete
@function:delete the flight
@author:Anjali Krishnan
@date:10/03/2021
*/
Route::get('delete/{id}',[AirlineController::class,'delete']);
//discount
Route::view('discount','discount');
// Route::get('discount',[AirlineController::class,'discount']);
Route::post('add_discount',[AirlineController::class,'add_discount']);
/*
@function name:addstatus
@function:Load the status page
@author:Nikhila shibu
@date:10/03/2021
*/
Route::view('addstatus','addstatus');
Route::post('add',[AirlineController::class,'addstatus']);
//view status
Route::post('view',[AirlineController::class,'viewstatus']);

//delete status
Route::get('delete/{id}',[AirlineController::class,'delete_status']);

//add airport
Route::view('airport','airportdetails');//airport details add form
Route::post('addairport',[AirlineController::class,'addairport']);//insert airport details.
//view airport
Route::get('viewairport',[AirlineController::class,'viewairport']);//view airport details.
//passenger home
Route::view('passenger','passenger');
//logout
Route::post('logout', [AirlineController::class,'logout']);