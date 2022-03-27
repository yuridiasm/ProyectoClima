<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $paises = Pais::all();
        
       
        return view('home',compact('paises'));
    }

    public function  consumirApi()
    {
        // $datosClima = HTTP::get(' http://api.weatherapi.com/v1/current.json',[
            
        //     'q' => 'Mexico',
        //     'aqi'=>'no'
        // ]);
        
        $client = new Client();
        $url = "http://api.weatherapi.com/v1/current.json?q=Mexico";


        $params = [
            'q' => 'Mexico'
        ];

        $headers = [
            'key' => '1b8c30072cdb4d8590a53345222503'
        ];

        $response = $client->request('GET', $url, [            
           
            'headers' => $headers,
            'json' => $params
        ]);        

        $responsePaises = ['datos'=>json_decode($response->getBody())];       
        
       return view('Clima.datosClima',$responsePaises);
    }
}
