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
Route::get('/', array('before' => array('newyear','valentine','halloween'), 'uses' => 'HomeController@showWelcome'));
Route::get('about', 'AboutController@showAbout');
Route::get('about/directions', array('uses' => 'AboutController@showDirections', 'as' => 'directions'));
Route::get('about/{theSubject}', 'AboutController@showSubject');


/*
Route::get('/', array(
  'before' => 'newyear'|'valentine'|'halloween', //array('newyear','valentine','halloween'),
  'after' => 'logvisits',
  function()
{
	return View::make('hello');
}));//->before('auth.basic');

Route::get('about', function() {
    return 'ABOUT content';
});
*/

/*
Route::get('about/directions', array('as' => 'directions', function() {
    $theURL = URL::route('directions');
    return "DIRECTIONS go to this URL: $theURL";
}));

Route::any('submit-form', function() { //the function(){} is called a closure
    return 'process FORM';
});
*/
 /*
Route::get('about/{theSubject}', function($theSubject) {
    return $theSubject . ' content goes here';
});
*/
Route::get('about/classes/{theSubject}', function($theSubject) {
    return "Content on $theSubject";
});

Route::get('where', function() {
    return Redirect::route('directions'); //in this case, we have named our route to directions
    // as seen in line 22
});

Route::get('vote', array( 
    'before' => 'age:17',
    function()
    {
      return 'Vote!';
    }
));

Route::get('programs', function() {
    return View::make('programs'); //in this case, we have named our route to directions
    // as seen in line 22
});

Route::get('graphic-design', function() {
    return View::make('graphic-design'); //in this case, we have named our route to directions
    // as seen in line 22
});

Route::get('signup', function() {
    return View::make('signup'); //in this case, we have named our route to directions
    // as seen in line 22
});

Route::post('thanks', function() {
    $theEmail = Input::get('email');
    return View::make('thanks')->with('theEmail', $theEmail); //in this case, we have named our route to directions
    // as seen in line 22
});

Route::get('data', function() {
   /*
    $painting = Paintings::find(1);
    $painting->title = 'Do no wrong - Just do right';
    $painting->save();
    return $painting->title;
    */
    echo '<pre>';
    $paintings = Paintings::where('year','2011')->get();
    var_dump($paintings->toArray());
    echo '</pre>';
    //return $paintings;
});