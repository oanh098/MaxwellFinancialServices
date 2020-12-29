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


use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\indexController;
use App\Mail\NewUserWelcomeMail;
use App\Mail\SingleNewsMail;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

Route::get('/', 'HomeController@index')->name('index');
Route::get('/ExampleNavigation', function () {
    return view('ExampleNavigation');

});
Route::get('/Vue', function () {
    return view('indexVue');

});

Route::get('/mail', function(){
    return new NewUserWelcomeMail();
});
Route::get('/news-mail', function(){
    return new SingleNewsMail();
});



Route::get('/about','PagesController@about');
Route::get('/business-growth','PagesController@BusinessGrowth');
Route::get('/research-and-strategy','PagesController@ResearchAndStrategy');
Route::get('/liabilities-management','PagesController@LiabilitiesManagement');
Route::get('/clearing-and-execution','PagesController@ClearingAndExecution');
Route::get('/product-solutions','PagesController@ProductSolution');
Route::get('/transition-services','PagesController@TransitionServices');
Route::get('/why-choose-us','PagesController@WhyChooseUs');
Route::get('/resort','PagesController@Resource_Name');
Route::get('/contactus', 'ContactFormController@create');
Route::post('/contactus', 'ContactFormController@store');


Route::get('/holdings/{user}', 'HoldingsController@index')->name('holding.index');
Route::get('/holdings/user/create', 'HoldingsController@create')->name('holding.create');
Route::post('/holdings/{user}', 'HoldingsController@store');
Route::get('/holdings/shows/{holding}', 'HoldingsController@show');
Route::get('/holdings/shows/{holding}/edit', 'HoldingsController@edit');
Route::patch('/holdings/shows/{holding}', 'HoldingsController@update');
Route::get('/holdings/user/{user}/edit', 'HoldingsController@editUserHoldings');
Route::post('/save/{holding}/{user}', 'SavePivotController@store');

Route::get('/profiles/shows/{user}','UserController@show')->name('user.show');
Route::get('/profiles/shows/{user}/edit','UserController@edit')->name('user.edit');
Route::patch('/profiles/shows/{user}','UserController@update')->name('user.update');





Route::get('/index', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('index');

Route::get('/react', function () {
    return view('welcome');
});

Auth::routes();



