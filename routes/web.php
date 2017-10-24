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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{
	Route::get('/', function(){
		return view('admin.index');
	})->name('admin.index');


	/*
	*
	* Below are routes to handle requests concerning staff members of the department
	*
	*/

	Route::resource('staff', 'staffController'); 


	/*
	*
	* Below are routes to handle requests concerning students
	*
	*/

    Route::resource('student', 'studentController'); 


	/*
	*
	* Below are routes to handle requests concerning research
	*
	*/

	Route::resource('research', 'researchController'); 

	/*
	*
	* Below are routes to handle requests concerning research centers
	*
	*/

	Route::get('research_centers', 'researchController@centerIndex')->name('centerIndex');

	Route::get('research_center/create', 'researchController@createCenter')->name('createCenter');

    Route::post('research_center', 'researchController@storeCenter')->name('storeCenter');


    /*
	*
	* Below are routes to handle requests concerning research facilities
	*
	*/

	Route::get('facilities', 'researchController@facilityIndex')->name('facilityIndex');

	Route::get('facility/create', 'researchController@createFacility')->name('createFacility');

    Route::match(['get', 'post'], 'facility', 'researchController@storeFacility')->name('storeFacility');

	/*
	*
	* Below are routes to handle requests concerning news Categories
	*
	*/
    
	Route::resource('newsCategory', 'newsCategoryController');

	/*
	*
	* Below are routes to handle requests concerning events Categories
	*
	*/

    Route::resource('eventsCategory', 'eventsCategoryController');

	/*
	*
	* Below are routes to handle requests concerning news
	*
	*/

	Route::resource('news', 'newsController'); 



	/*
	*
	* Below are routes to handle requests concerning events
	*
	*/

    Route::resource('events', 'eventsController');
    
});

Route::get('news/details/{id}', 'newsController@newsDetails');

Route::get('/', 'pagesController@index'); // serves the "home" page request

Route::get('/home', 'pagesController@index'); // serves the "home" page request too

Route::get('/about', 'pagesController@about'); // serves the "about-us" page request

Route::get('/people', 'pagesController@people'); // serves the "people/staff" page request

Route::get('/programs', 'pagesController@programs'); // serve the "degree-programs" page request

Route::get('/research', 'pagesController@research'); // serve the "research" page request

Route::get('/news', 'pagesController@news'); // serve the news "page" request 

Route::get('/facility', 'pagesController@facility'); // serve the "facilities" page request

Route::get('/event', 'pagesController@event'); // serve the "events" page request
