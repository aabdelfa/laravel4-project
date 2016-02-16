<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('about', function() {
    return 'ABOUT content';
});

Route::get('about/directions', array('as' => 'directions', function() {
    $theURL = URL::route('directions');
    return "DIRECTIONS go to this URL: $theURL";
}));

Route::any('submit-form', function() { //the function(){} is called a closure
    return 'process FORM';
});

Route::get('about/{theSubject}', function($theSubject) {
    return $theSubject . ' content goes here';
});

Route::get('about/classes/{theSubject}', function($theSubject) {
    return "Content on $theSubject";
});

Route::get('where', function() {
    return Redirect::route('directions'); //in this case, we have named our route to directions
    // as seen in line 22
});