<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\View\View;
use GuzzleHttp\Exception\ClientException;

class PokemonController extends Controller
{
    public function pokemon(): View
    {
        return view('pokemon');
    }

    public function PokemonSearch()
    {
        $name = filter_var($_GET['pokemon'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $client = new Client();
        $uri = "https://pokeapi.co/api/v2/pokemon/$name";

        try {
            $response = $client->request("GET", $uri);
            $responseBody = json_decode($response->getBody());
        } catch (ClientException $Ex) {
            $responseBody =  false;
        }
        return view('pokemon', compact('responseBody'));
    }
}
