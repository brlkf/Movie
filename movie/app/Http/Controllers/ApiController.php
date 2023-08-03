<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function getMovies()
    {
        $client = new Client();

        try {
            $response = $client->get('https://api.themoviedb.org/3/discover/movie', [
                'query' => [
                    'include_adult' => false,
                    'include_video' => false,
                    'language' => 'en-US',
                    'page' => 1,
                    'sort_by' => 'popularity.desc',
                ],
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            return $response->getBody();
        } catch (\Exception $e) {
            // Handle any errors here
            return response()->json(['error' => 'Failed to retrieve data from the API.'], 500);
        }
    }
}



