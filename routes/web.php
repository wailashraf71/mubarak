<?php


use Illuminate\Support\Facades\Route;

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


/// !----------------------- Admin ---------------------------!
Route::prefix('admin')->as('admin.')->group(function () {

    // Authentication Routes...
    Route::get('login', 'Auth\LoginController@showAdminLoginForm')->name('loginAdmin');
    Route::post('login', 'Auth\LoginController@loginAdmin');
    Route::post('logout', 'Auth\LoginController@logoutAdmin')->name('logout');

    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showAdminRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@registerAdmin');

    Route::group(['middleware' => ['is_admin']], function () {
        Route::get('/', 'Admin\DashboardController@index')->name('dashboard');
        Route::resource('projects', 'Admin\ProjectController');
        Route::resource('messages', 'Admin\MessageController');
        Route::get('messagesData', 'Admin\MessageController@data')->name('messages.data');
        Route::resource('users', 'UserController');
        Route::get('usersData', 'UserController@data')->name('users.data');
        Route::resource('requests', 'Admin\RequestController');
        Route::get('requestsData', 'Admin\RequestController@data')->name('requests.data');

        Route::get('settings', 'Admin\DashboardController@settings')->name('settings.index');
        Route::post('settings', 'Admin\DashboardController@settingsUpdate')->name('settings.update');

    });

    Route::fallback(function () {
        return view('admin.404');
    });

});


/// !----------------------- Web ---------------------------!

Route::get('/', 'HomeController@index')->name('home');

Route::get('projects', 'HomeController@projects')->name('projects');
Route::get('projects/{id}', 'HomeController@projectShow')->name('projects.show');
Route::get('/about-us', 'HomeController@aboutUs')->name('aboutUs');
Route::get('/our-services', 'HomeController@ourServices')->name('ourServices');

Route::get('/future', 'HomeController@future')->name('future');
Route::get('/certificates', 'HomeController@certificates')->name('certificates');

Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact/store-message', 'HomeController@storeMessage')->name('storeMessage');


// Authentication Routes...
Route::get('login', function (){
    return redirect()->route('admin.loginAdmin');
})->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
