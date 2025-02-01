<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\FuncCall;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $idioma = 'pt-BR';
        $popularMovies = Http::withToken(config('services.tmdb.token'))
        ->withOptions(['verify' => false])
        ->get('https://api.themoviedb.org/3/movie/popular',['language' => $idioma])
        ->json()['results'];

        $genresArray = Http::withToken(config('services.tmdb.token'))
        ->withOptions(['verify' => false])
        ->get('https://api.themoviedb.org/3/genre/movie/list', ['language' => $idioma] )
        ->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        $nowPlayingMovies = Http::withToken(config('services.tmdb.token'))
        ->withOptions(['verify' => false])
        ->get('https://api.themoviedb.org/3/movie/now_playing', ['language' => $idioma])
        ->json()['results'];

        $estreias = Http::withToken(config('services.tmdb.token'))
        ->withOptions(['verify' => false])
        ->get('https://api.themoviedb.org/3/movie/upcoming', ['language' => $idioma])
        ->json()['results'];
        
        return view('movie.index', [
            'popularMovies' => $popularMovies,
            'genres' => $genres,
            'nowPlayingMovies' => $nowPlayingMovies,
            'estreias' => $estreias,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public Function search(Request $request)
    {
        $query = $request->input('query');
        $idioma= 'pt-BR';

        $searchResults = Http::withToken(config('services.tmdb.token'))
        ->withOptions(['verify'=>false])
        ->get('https://api.themoviedb.org/3/search/movie',[
            'language' => $idioma,
            'query' => $query
        ])
        ->json()['results'];

        $genresArray = Http::withToken(config('services.tmdb.token'))
        ->withOptions(['verify' => false])
        ->get('https://api.themoviedb.org/3/genre/movie/list', ['language' => $idioma] )
        ->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
       
        
        return view('movie.search', [
            'searchResults' => $searchResults,
            'query' => $query,
            'genres' => $genres,
            
        ]);
    }
}
