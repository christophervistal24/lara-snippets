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
Route::group(['as' => 'users.' , 'prefix' => 'users'] , function () {
    Route::group(['as' => 'comments.' , 'prefix' => 'comments'] , function () {
        Route::get('{id}' , function ($id) {
            return $id;
        })->name('show');
        Route::get('/testing' , function () {
            return 'Testing Name Prefixes';
        });
    });
});



Route::get('posts/create' , 'PostsController@create');
Route::post('posts' , 'PostsController@store');
Route::get('posts/{post}' , 'PostsController@show');

/**
 * Checking if you are already logged if not then you will
automatically redirect to the login form
 */
/*Route::group(['middleware' => 'auth'] , function () {
    Route::resource('tasks','RestController');
});
*/
/**
 * Let the resource method handle all the HTTP VERBS
 */
Route::resource('tasks','RestController');
Route::get('/form'  , function () {
    return view('form');
});

Route::post('/form' , 'TestController@login');
Route::get('/response_test' , function () {
     return response()->make(old());
});

//response download
Route::get('/pdf_download' , 'TestController@pdf_download');