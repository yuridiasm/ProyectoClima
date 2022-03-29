<?php

namespace App\Http\Controllers;

//Modelos
use App\Models\Pais;
use App\Models\TareasCompletadas;
use App\Models\TareasPendientes;
use App\Models\User;
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

    public function  consumirApi(String $Pais)
    {
        $tareasPendientes = TareasPendientes::all();
        $tareasCompletadas = TareasCompletadas::all();
        
        $client = new Client();
        $url = "http://api.weatherapi.com/v1/current.json";
       

        $params = [
            'q' => $Pais,
            'lang' => 'es'
        ];

        $headers = [
            'key' => '1b8c30072cdb4d8590a53345222503'
        ];

        $response = $client->request('GET', $url, [            
           
            'headers' => $headers,
            'query' => $params
        ]);        

        $responsePaises = ['datos'=>json_decode($response->getBody())];   
        $view=[
            "tareasComp" => $tareasCompletadas,
            "tareasPend" => $tareasPendientes,
            "clima" => $responsePaises
        ];    
        
       return view('Clima.datosClima',$view);
    }

    public function user(){
        return view('userAdmin.userProfile');
    }

    public function usuarios(){
        $usuarios = User::all();        
        return view('userAdmin.usuariosLista',compact('usuarios'));
    }
}
