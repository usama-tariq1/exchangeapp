<?php


// session_start();
//home

Route::set('/', 'Home@index');


//welcome
Route::set('/welcome', 'Welcome@index');

Route::set('/login', 'Welcome@login');

Route::set('/signout', 'Welcome@signout');

Route::set('/start', 'Welcome@start');

Route::set('/signup', 'Welcome@signup');



//user controller
Route::set('/profile', 'UserController@profile');

Route::res('/user', 'UserController');

Route::set('/user/updateform', 'UserController@updateform');


Route::set('/user/uploadimg', 'UserController@uploadprofile');

Route::set('/user/authorize', 'UserController@authorizeuser');



//postController
Route::set('/posts/types', 'PostController@types');
// Route::set('/posts/types', 'PostController@update');
Route::res('/posts', 'PostController');

// RatesheetController
Route::set('/ratesheet', 'RatesheetController');
Route::set('/ratesheet/currency', 'RatesheetController@currency');
Route::set('/ratesheet/commodity', 'RatesheetController@commodity');


// module
Route::set('/module/dock', 'Module@dock');
Route::set('/module/addpage', 'Module@addpage');
Route::set('/add/citypage', 'Module@addcity');
Route::set('/add/firmpage', 'Module@addfirm');


// CityController
Route::res('/city', 'CityController');


// FirmController
Route::res('/firm', 'FirmController');

// ContractController
Route::res('/contract', 'ContractController');

// RateUpdateController
Route::res('/rateupdate', 'RateUpdateController');

// ItemController 
Route::res('/item', 'ItemController');


// ApiRateUpdateController
Route::set('/api/update/currency', 'ApiRateUpdateController@currency');
Route::set('/api/update/commodity', 'ApiRateUpdateController@commodity');

// TestController
Route::set('/test/notification', 'TestController@testnotify');


// SearchController
Route::set('/search/user', 'SearchController@feedsearch');



// Route::setfunc('/contact', function () {
//     echo "Contact";
// });
