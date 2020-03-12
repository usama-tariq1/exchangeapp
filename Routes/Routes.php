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






// Route::setfunc('/contact', function () {
//     echo "Contact";
// });
