<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses' => 'Auth\AuthController@home']);


// Authentication routes...
Route::get('/auth/login', function(){ return redirect('/user/login'); });
Route::get('/auth/logout', function(){ return redirect('/user/logout'); });
Route::get('/auth/register', function(){ return redirect('/user/signup'); });
Route::get('/user/register', function(){ return redirect('/user/signup'); });

Route::get('/user/login', 'Auth\AuthController@getLogin');
Route::post('/user/login', 'Auth\AuthController@postLogin');
Route::get('/user/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('/user/signup', 'Auth\AuthController@getRegister');
Route::post('/user/signup', 'Auth\AuthController@postRegister');


Route::get('/home', ['uses' => 'UserController@view_me']);

// View the currently logged in user [yourself]
Route::get('/user', ['uses' => 'UserController@view_me']);
// Save the currently logged in user
Route::post('/user/save', ['uses' => 'UserController@save']);
// View people you've connected with, at specific events
Route::get('/user/connections', ['uses' => 'UserController@connections_view']);
// View a specific user [if you've connected in the past]
// Must come last, because it accepts parameter that intercepts the other apps
Route::get('/user/{user_id}', ['uses' => 'UserController@view']);

// See a list of events
Route::get('/events', ['uses' => 'EventController@view_list']);
// See just my list of events
Route::get('/events/mine', ['uses' => 'EventController@view_my_list']);
// View a specific event
Route::get('/event/{event_id}', ['uses' => 'EventController@view']);
// View a list of attendees you've connected with during an event; if you're the supervisor, view all attendees
Route::get('/event/{event_id}/attendees/', ['uses' => 'EventController@attendees_view']);
// Subscribe a specific user [i.e. yourself] to the specified event
Route::get('/event/{event_id}/subscribe', ['uses' => 'EventController@attendee_subscribe']);
// Unsubscribe a specific user [i.e. yourself] from the specified event
Route::get('/event/{event_id}/unsubscribe', ['uses' => 'EventController@attendee_unsubscribe']);


// Handle API data from our bracelets
Route::post('/api/receive', ['uses' => 'ApiController@receive']);