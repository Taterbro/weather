<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use App\Events\weatherevent;

class weathercontroller extends Controller
{
    public function index(Request $request){
        $city = $request->query('city', 'abuja');
        $plaincity = 'Abuja';
        $apiKey = env('WEATHER_KEY');   //storing the api key in the env file
        $url = "https://api.openweathermap.org/data/2.5/weather?q={$plaincity}&appid={$apiKey}";
        $client = new Client(['timeout'=>60, 'verify'=>false]);  //setting the timeout to 60s and disabling ssl certificate verification
        $response = $client->get($url);
        $weatherdata = json_decode($response->getBody(), true); //true is set to make it an associative array
        $weather = $weatherdata['weather'][0];

        
        $sumry = $weather['main'];
        $description = $weather['description'];
        $icon = $weather['icon'];
        $weatherstuff = ['weather'=>$weatherdata['weather'][0]['main'], 'sumry'=>$sumry, 'description'=>$description, 'icon'=>$icon, 'city'=>$plaincity];

        event(new weatherevent($weatherstuff));
        broadcast(new weatherevent($weatherstuff));

        return view('welcome', );
    }
}

