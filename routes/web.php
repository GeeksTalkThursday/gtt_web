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

// ADMIN
Route::get('/admin/logout',['uses'=>'Admin\AuthController@logout','as'=>'admin.auth.logout']);
Route::get('/admin/login', ['uses'=>'Admin\AuthController@showLoginForm','as'=>'admin.auth.login']);
Route::post('/admin/login', 'Admin\AuthController@login');
// all protected middleare routes goes here...
Route::middleware('admin')->group( function () {
	Route::get('/admin', 'AdminController@index')->name('admin');
	Route::resource('/admin/category', 'CategoryController',['except'=>['show','index','destroy','edit']]);
	Route::resource('/admin/tags', 'TagsController',['except'=>['show','index','destroy','edit']]);
	Route::resource('/admin/post', 'PostsController');
	
});

//subscriptions mails newsletters
Route::get('manageMailChimp', 'MailChimpController@manageMailChimp');
Route::post('subscribe',['as'=>'subscribe','uses'=>'MailChimpController@subscribe']);
Route::post('sendCompaign',['as'=>'sendCompaign','uses'=>'MailChimpController@sendCompaign']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Social Auth
// Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');

Route::resource('/Posts', 'frontcontroller');
