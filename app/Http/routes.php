<?php


Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localize','localizationRedirect' ]

], 
function()
{
	Route::get('/', 'HomeController@index');


	Route::get('/espacios/{id}', 'HomeController@getBook');

	Route::get('/blog', ['as' => 'blog', 'uses' => 'HomeController@blog']);
	Route::get('/blog/{slug}', 'HomeController@getArticle');
	
	Route::get('/privacy-terms', ['as' => 'privacyTerms', 'uses' => 'HomeController@getPrivacyTerms']);

	Route::get(LaravelLocalization::transRoute('routes.spaces'), ['as' => 'spaces', function(){
		return view('pages.spaces');
	}]);

	Route::get(LaravelLocalization::transRoute('routes.coworking'), ['as' => 'coworking', function(){
		return view('pages.coworking');
	}]);

	Route::get(LaravelLocalization::transRoute('routes.offices'), ['as' => 'offices', function(){
		return view('pages.office');
	}]);

	Route::get(LaravelLocalization::transRoute('routes.teams'), ['as' => 'teams', function(){
		return view('pages.teams');
	}]);

	Route::get(LaravelLocalization::transRoute('routes.contact'), ['as' => 'contact', function(){
		return view('pages.contact');
	}]);

	Route::post('/book', 'HomeController@postBook');
	Route::post('/contact', 'HomeController@sendEmail');
	Route::get('/booked', function(){
		return view('pages.booked');
	});


	//workshops
	Route::get('/comunidad', ['as' => 'community', 'uses' => 'CommunityController@index']);

	/*
	 * Auth
	 */


	Route::get('facebook', ['as' => 'login.facebook', 'uses' => 'AuthController@getLoginFacebook']);
	
	Route::get('register', ['as' => 'register', 'uses' => 'AuthController@getRegister']);
	Route::post('register', ['as' => 'register', 'uses' => 'AuthController@postRegister']);
	Route::get('addUser', ['as' => 'addUser', 'uses' => 'HomeController@getaddUser']);
	Route::post('addUser', ['as' => 'addUser', 'uses' => 'HomeController@postaddUser']);

	Route::get('login', ['as' => 'login', 'uses' => 'AuthController@getLogin']);
	Route::post('login', ['as' => 'login', 'uses' => 'AuthController@postLogin']);

	Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@getLogout']);

	Route::get('password/email', ['as' => 'password.email', 'uses' => 'PasswordController@getEmail']);
	Route::post('password/email', ['as' => 'password.email', 'uses' => 'PasswordController@postEmail']);
	Route::get('password/reset/{token}', ['as' => 'password.reset', 'uses' => 'PasswordController@getReset']);
	Route::post('password/reset', ['as' => 'password.reset', 'uses' => 'PasswordController@postReset']);

	/*
	* Profile
	*/

	Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'ProfileController@getDashboard']);
	Route::get('/coworker/{id}', ['as' => 'profile', 'uses' => 'ProfileController@show']);
	Route::get('/profile/edit', ['as' => 'profile.edit', 'uses' => 'ProfileController@getEdit']);
	Route::post('/profile/edit', ['as' => 'profile.edit', 'uses' => 'ProfileController@postEdit']);
	Route::get('/profile/photos', ['as' => 'profile.photos', 'uses' => 'ProfileController@getPhotos']);

	Route::post('/imageProfile', ['as' => 'imageProfile', 'uses' => 'ImagesController@postUpload']);
	Route::put('/imageProfile', ['as' => 'imageProfile', 'uses' => 'ImagesController@editPhotos']);
	Route::delete('/imageProfile', ['as' => 'imageProfile', 'uses' => 'ImagesController@deletePhotos']);

   
});


