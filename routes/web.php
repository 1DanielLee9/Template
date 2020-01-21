<?php

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


Auth::routes();



// Tickets
    // Plane
Route::get('showPlaneDataTickets','TicketsController@indexPlane')->name('adminPlaneTickets');
Route::get('inputPlaneDataTickets','TicketsController@inputPlane')->name('adminPlaneInputTickets');
Route::post('insertPlaneDataTickets','TicketsController@insertPlane')->name('adminPlaneInsertTickets');
Route::get('editPlaneDataTickets/{id}','TicketsController@editPlane')->name('adminPlaneEditTickets');
Route::post('updatePlaneDataTickets','TicketsController@updatePlane')->name('adminPlaneUpdateTickets');
Route::get('deletePlaneDataTickets/{id}','TicketsController@deletePlane')->name('adminPlaneDeleteTickets');
    // Train
Route::get('showTrainDataTickets','TicketsController@indexTrain')->name('adminTrainTickets');
Route::get('inputTrainDataTickets','TicketsController@inputTrain')->name('adminTrainInputTickets');
Route::post('insertTrainDataTickets','TicketsController@insertTrain')->name('adminTrainInsertTickets');
Route::get('editTrainDataTickets/{id}','TicketsController@editTrain')->name('adminTrainEditTickets');
Route::post('updateTrainDataTickets','TicketsController@updateTrain')->name('adminTrainUpdateTickets');
Route::get('deleteTrainDataTickets/{id}','TicketsController@deleteTrain')->name('adminTrainDeleteTickets');

// Transportation
    // Plane
Route::get('showPlaneDataTransportation','TransportationController@indexPlane')->name('adminPlaneTransportation');
Route::get('inputPlaneDataTransportation','TransportationController@inputPlane')->name('adminPlaneInputTransportation');
Route::post('insertPlaneDataTransportation','TransportationController@insertPlane')->name('adminPlaneInsertTransportation');;
Route::get('editPlaneDataTransportation/{id}','TransportationController@editPlane')->name('adminPlaneEditTransportation');
Route::post('updatePlaneDataTransportation','TransportationController@updatePlane')->name('adminPlaneUpdateTransportation');;
Route::get('deletePlaneDataTransportation/{id}','TransportationController@deletePlane')->name('adminPlaneDeleteTransportation');
    // Train
Route::get('showTrainDataTransportation','TransportationController@indexTrain')->name('adminTrainTransportation');
Route::get('inputTrainDataTransportation','TransportationController@inputTrain')->name('adminTrainInputTransportation');
Route::post('insertTrainDataTransportation','TransportationController@insertTrain')->name('adminTrainInsertTransportation');;
Route::get('editTrainDataTransportation/{id}','TransportationController@editTrain')->name('adminTrainEditTransportation');
Route::post('updateTrainDataTransportation','TransportationController@updateTrain')->name('adminTrainUpdateTransportation');;
Route::get('deleteTrainDataTransportation/{id}','TransportationController@deleteTrain')->name('adminTrainDeleteTransportation');

//Accounts
Route::get('showAccountData','AccountController@index')->name('adminAccountShow');


Route::get('/authority', 'HomeController@index')->name('home');

//Customer
Route::get('/','CustomerController@customerIndex')->name('customerHome');
Route::get('customerLogin', 'CustomerController@customerLogin')->name('customerLogin');
Route::post('customerSignIn','CustomerController@customerSignIn')->name('customerSignIn');
Route::get('customerRegister', 'CustomerController@customerRegister')->name('customerRegister');
Route::post('customerSignUp','CustomerController@customerSignUp')->name('customerSignUp');
Route::get('customerContact','CustomerController@customerContact')->name('customerContact');
Route::get('customerFlight','CustomerController@customerFlight')->name('customerFlight');
Route::post('customerFlightFind','CustomerController@customerFlightFind')->name('customerFlightFind');
Route::get('customerTrain','CustomerController@customerTrain')->name('customerTrain');
Route::post('customerTrainFind','CustomerController@customerTrainFind')->name('customerTrainFind');

Route::get('/trial',function ()
{
    return view('try');
});

Route::get('/sign-in',function ()
{
    return view('sign_in');
});