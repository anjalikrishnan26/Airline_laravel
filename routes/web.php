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
/*
@function name:regAdd
@function:registration
@author:Fathimi Haja
@date:09/03/2021
*/

Route::get('/register', function () {
    return view('register');
});

Route::post("/regist",[AirlineController::class,'regAdd']);


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
@function name:login
@function:login
@author:Fathimi Haja
@date:10/03/2021
*/

Route::get('/login_form', function () {
    return view('login');
});

Route::post("log_in",[AirlineController::class,'login']);
//login to user page
Route::post("pass",[AirlineController::class,'passenger']);
Route::get("log_out",[AirlineController::class,'log_out']);


/*
@function name:admin
@function:Load the admin home page
@author:Anjali Krishnan
@date:10/03/2021
*/
Route::get('/admin', function () {
    return view('adminhome');
});


// Route::post('/registeration', function () {
//     return view('registration');
// });

Route::view('flightbook_form','flightbook');
Route::get('viewbookdetails/{id}',[AirlineController::class,'viewbookdetails']);//


/*
@function name:addflightform
@function:load the flight page
@author:Jayalekshmi L
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
Route::post('/update',[AirlineController::class,'updateData']); 
/*
@function name:delete
@function:delete the flight
@author:Anjali Krishnan
@date:10/03/2021
*/
Route::get('delete/{id}',[AirlineController::class,'delete']);
/*
@function name:discount
@function:discount view page
@author:Anjali Krishnaa 
@date:10/03/2021
*/
Route::view('discount','discount');
/*
@function name:discount
@function:discount insertion
@author:Anjali Krishnan
@date:10/03/2021
*/
Route::post('add_discount',[AirlineController::class,'add_discount']);
/*
@function name:addstatus
@function:Load the status page
@author:Nikhila shibu
@date:10/03/2021
*/
Route::view('addstatus','addstatus');
Route::get('add',[AirlineController::class,'addstatus']);
/*
@function name:addstatus
@function:view status page
@author:Nikhila shibu
@date:10/03/2021
*/
Route::get('view',[AirlineController::class,'viewstatus']);
/*
@function name:addstatus
@function:delete the status page
@author:Nikhila shibu
@date:10/03/2021
*/
Route::get('delete/{id}',[AirlineController::class,'delete_status']);

/*
@function name:addflightform
@function:load the flight page
@author:Jayalekshmi L
@date:11/03/2021
*/
Route::view('airport','airportdetails');//airport details add form
/*
@function name:addairport
@function:insert airport details 
@author:Jayalekshmi L
@date:11/03/2021
*/
Route::post('addairport',[AirlineController::class,'addairport']);//insert airport details.
/*
@function name:viewairport
@function:view the airort details
@author:Jayalekshmi L
@date:11/03/2021
*/
Route::get('viewairport',[AirlineController::class,'viewairport']);//view airport details.
/*
@function name:passenger
@function:load the passenger home page
@author:Anjali Krishnan
@date:11/03/2021
*/
Route::view('passenger','passenger');
/*
@function name:logout
@function:logout 
@author:Anjali Krishnan
@date:11/03/2021
*/
Route::post('logout', [AirlineController::class,'logout']);
/*
@function name:viewnoti
@function:view the notification to the users 
@author:Anjali Krishnan
@date:11/03/2021
*/
Route::get('viewnoti',[AirlineController::class,'viewuserstatus']);
//flight search
// Route::view('flightsearchform','flightsearch');
// Route::get('searchflight',[AirlineController::class,'searchflight']);
//view

/*
@function name:searchflight
@function:searching the flight
@author:Anjali Krishnan
@date:11/03/2021
*/
Route::view('flightsearchform','flightsearch');
Route::post('searchflight',[AirlineController::class,'searchflight']);

/*
@function name:pro_update
@function:to update user profile
@author:Fathimi Haja
@date:11/03/2021
*/
Route::get('update_profile/{id}',[AirlineController::class,'update_profile']);
Route::post('/update_profile',[AirlineController::class,'pro_update']);

/*
@function name:insert_bookings
@function:insert booking
@author:Anjali Krishnan
@date:12/03/2021
*/

Route::get('insert_bookings',[AirlineController::class,'insert_bookings']);//insert booking details.
Route::get('receipt',[AirlineController::class,'receipt']);//view receipt after book

/*paypal integration*/
/*
@function name:
@function:payment
@author:Nikhila shibu
@date:11/03/2021
*/
Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'PaypalController@payWithPaypal',));
Route::post('paypal', array('as' => 'paypal','uses' => 'PaypalController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'PaypalController@getPaymentStatus',));
Route::view("payment",'payment');
Route::view("pay",'success');

/*
@function name:ticket
@function:to load ticket
@author:Anjali Krishnan
@date:13/03/2021
*/

Route::get('tickets', 'AirlineController@tickets');
#Route::get('ticket','AirlineController@ticketgeneration');
/*
@function name:ticketgeneration
@function:Ticket Generation
@author:Jayalekshmi L
@date:13/03/2021
*/
Route::get("ticket", [AirlineController::class,'ticketgeneration']);

/*
@function name:user_details
@function:Load the user details
@author:Fathimi Haja
@date:12/03/2021
*/

Route::get("details", [AirlineController::class,'user_details']);

