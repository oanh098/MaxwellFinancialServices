<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bodyClass='index';

//        $client = new Client();
//        $response = $client->request('GET', 'https://fcsapi.com/api-v2/forex/latest?symbol=EUR/USD,USD/JPY,GBP/CHF&access_key=7agdt1BX2m6lGyGflYY4V1GdA0Hw7HiMIIRi66kDA3CFwAdLvG');
//        $arr = $response->getBody();
//        $queries = json_decode($arr);
////        var_dump($queries->response);
//        $query=$queries->response;

        return view('index', compact(['bodyClass'));
    }
}
