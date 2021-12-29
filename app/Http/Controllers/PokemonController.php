<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\View\View;

class PokemonController extends Controller
{
    public function pokemon(): View
    {
        $client = new Client();
        $uri = "https://pokeapi.co/api/v2/pokemon/?limit=150";

        $response = $client->request("GET", $uri);

        $responseBody = json_decode($response->getBody());

        return view('pokemon', compact('responseBody'));
    }
}
