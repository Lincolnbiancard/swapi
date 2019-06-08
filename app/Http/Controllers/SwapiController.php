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
        $result = $this->swapi;
        
        return $result;
    }

    //Exibir registro unico passando a id depois da / 
    public function show($id)
    {
        $result = $this->swapi = Curl::to('https://swapi.co/api/people/'. $id)->get();
        
        return $result;
    }

}
