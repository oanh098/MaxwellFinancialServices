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

//Route::get('/index', 'indexController@index');
Route::get('/mail', function(){
    return new NewUserWelcomeMail();
});
Route::get('/news-mail', function(){
    return new SingleNewsMail();
});


Route::get('/json-api', function() {
    $client = new \GuzzleHttp\Client();
//    $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
//    $response = $client->request('GET', 'https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=MSFT&apikey=demo');
//    $response = $client->request('GET', 'https://fcsapi.com/api-v2/stock/list?Indices_id=1&access_key=7agdt1BX2m6lGyGflYY4V1GdA0Hw7HiMIIRi66kDA3CFwAdLvG');
    $response = $client->request('GET', 'https://fcsapi.com/api-v2/forex/latest?symbol=EUR/USD,USD/JPY,GBP/CHF&access_key=7agdt1BX2m6lGyGflYY4V1GdA0Hw7HiMIIRi66kDA3CFwAdLvG');

//    echo $response->getStatusCode(); // 200
//    echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
//    echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'
    $arr=$response->getBody();
//    var_dump($arr);
//    echo $arr;
    $queries = json_decode($arr);
//   var_dump($queries);
//
//    //Example foreach
    foreach($queries as $query){
        // this is where your WP query_posts( $args ); will go

        // this is how you'll access the array variables
//        echo "Query: ";
//        var_dump( $query);
//        echo ",  ";
//        echo $query->short_name;
//        echo ",  ";
//        echo $query->columns;
//        echo "<br>";
       if (is_array($query) )
       {
//           echo $query->id;
//           echo 'here:';
           foreach($query as $item)
           {

               echo $item->id .'</br>';
               echo $item->price .'</br>';
               echo $item->change .'</br>';
               echo $item->chg_per.'</br>';
               echo $item->last_changed.'</br>';
               echo $item->symbol.'</br>';
           }
         var_dump($query);
       }
    }


});

Route::get('/about','PagesController@about');
Route::get('/business-growth','PagesController@BusinessGrowth');
Route::get('/research-and-strategy','PagesController@ResearchAndStrategy');
Route::get('/liabilities-management','PagesController@LiabilitiesManagement');
Route::get('/clearing-and-execution','PagesController@ClearingAndExecution');
Route::get('/product-solutions','PagesController@ProductSolution');
Route::get('/transition-services','PagesController@TransitionServices');
Route::get('/resort','PagesController@Resource_Name');
//Route::get('/testrsc', function()
//{
//    return 'testrsc Hello World';
//});

//Route::get('/contact','PagesController@Contact');
//Route::get('/contact', 'ContactFormController@create');
Route::get('/contactus', 'ContactFormController@create');
Route::post('/contactus', 'ContactFormController@store');
//Route::get('/contactus', function()
//{
//    return 'Hello World';
//});

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



//Route::post('/h', 'HoldingsController@store');





Route::get('/index', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('index');

Auth::routes();



