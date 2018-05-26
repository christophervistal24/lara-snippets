<?php
Route::get('/' , 'WelcomeController@index');
/**
 * Wildcard parameter with strict & and Name Route
 */
Route::get('/test/{user}','WelcomeController@get')->name('user.show')->where(['user' => '[0-9]+']);

/**
 * Route group with Middleware Authentication
 */
// Route::group(['middleware' => 'auth'] , function () {
//     Route::get('hello' , function () {
//         return 'hello';
//     });
//     Route::get('world' , function () {
//         return 'world';
//     });
// });

// Route::get('/first' , 'TestController@first');
// Route::get('/second' , 'TestController@second');


Route::get('/login' , 'WelcomeController@login')->name('login');

/**
 * Prefix Route
 */
// Route::group(['prefix' => 'api'] , function () {
//     Route::get('/' , function () {
//         return 'Root Prefix';
//     });

//     Route::get('/users' , function () {
//         return 'Prefix Testing';
//     });
// });

/**
 * Namespace Route
 */

/*Route::group(['namespace' => 'API'] , function () {
    Route::get('/api' , 'APIController@index');
});
*/

/**
 * Name Prefixes
 */