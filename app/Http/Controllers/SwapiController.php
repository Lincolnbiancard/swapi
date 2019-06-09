<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class SwapiController extends Controller
{
    
    public function __construct()
    {
        $this->swapi = Curl::to('https://swapi.co/api/people/')->get();
    }

    //Exibir todos dados do retorno da api 
    public function index()
    {
        $response_http = $this->swapi;
        $obj_peoples = json_decode($response_http);
        $result = $obj_peoples->results;
        
        return view('main.list')->with('result', $result);
    }

    //Exibir registro unico passando a id depois da / 
    public function show($id)
    {
        $response_http = $this->swapi = Curl::to('https://swapi.co/api/people/'. $id . '/')->get();
        $obj_peoples = json_decode($response_http);
        
        $result = (object)['results' => 
            $obj_peoples
        ];
        
        return view('main.list')->with('result', $result);
    }

}
