<?php

namespace App\Http\Controllers;

use App\Models\FavoredMovie;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;



class MovieController extends Controller
{
    public function getMovies()
    {
        $client = new Client();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/discover/movie', [
            'query' => [
                'api_key' => '8ca90066883db30683ac4b5e006aaebb',
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

        $movies = json_decode($response->getBody(), true)['results'];

        return view('movies.index', compact('movies'));
    }

    
    
    public function favorite(Request $request, $movieId)
    {
        try {
            // Fetch the movie title and release_date from the Request
            $title = $request->input('title');
            $releaseDate = $request->input('release_date');

            // Check if the movie is already favorited
            $isFavorited = FavoredMovie::where('title', $title)->exists();

            if (!$isFavorited) {
                // If the movie is not favorited, create a new favored movie record
                FavoredMovie::create([
                    'title' => $title,
                    'release_date' => $releaseDate,
                ]);

                return redirect()->back()->with('success', 'Movie added to favorites successfully!');
            } else {
                return redirect()->back()->with('error', 'Movie is already in favorites!');
            }
        } catch (\Exception $e) {
            // Catch and log any exceptions for debugging purposes
            dd($e->getMessage());
        }
    }





    
    


    public function showFavorites()
    {
        $favoredMovies = FavoredMovie::paginate(10);

        return view('movies.favorites', compact('favoredMovies'));
    }
}

