<?php
#@samp
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


/*
 * The Route is a static class that contains static functions like
 *  -Route::get($uri, $callback);
    -Route::post($uri, $callback);
    -Route::put($uri, $callback);
    -Route::patch($uri, $callback);
    -Route::delete($uri, $callback);
    -Route::options($uri, $callback);
 * first parameter is url and second parameter is action that we want to do
 *
 */

Route::get('/', function () {
    return view('welcome');
});

/**
 * simple action with using function as second parameter
 */
//Route::get('/about', function(){
//    return "about us page here";
//});

/**
 * simple example for getting parameter from urls
 * we can get some parameter not just one and then using from it
 * here name is optional and has default value
 */
//Route::get('/parameter_example/{id}/{name?}', function ($id, $name = 'default_name'){
//    return "inout parameter is id : ".$id . " and name is : ".$name;
//});

/**
 * simple naming routes : sometimes we want to set a name for a long url and
 * use that name in the rest of code
 */
//Route::get('user/profile/long_url', ['as' => 'profile', function () {
//    $url = route('profile'); //getting complete url of named route
//    return "You entered in this url : ".$url;
//}]);

/**
 * Regular Expression Constraints
 */
//Route::get('user/{id}', function ($id) {
//    return "user id contains just number : ".$id;
//})->where('id', '[0-9]+');
//

#----------------------------------------------------------------------------------Controller section

/**
 * simple controller that pass id from url to showUserId function with one input argument
 */
//Route::get('simpleController/{id}', 'simpleController@showUserId');

#Middleware may be assigned to the controller's routes like so
//Route::get('profile', [
//    'middleware' => 'auth',
//    'uses' => 'UserController@showProfile'
//]);

/**
 * handle all type of request for /photo url and in the controller has pre made functions
 */
//Route::resource('photo', 'PhotoController');

Route::get('showUserProfile/{id}/{name}', 'showUser@profile');

/**
 * in this case we stored our view file in the specific directory
 */
#resources/views/admin/profile.blade.php
#return view('admin.profile', $data);

/**
 * to check that whether a view exist or not
 */
#use Illuminate\Support\Facades\View;

#if (View::exists('emails.customer')) {
    //
#}