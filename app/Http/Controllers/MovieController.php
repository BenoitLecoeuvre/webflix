<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('movies.index', [
            'movies' => Movie::latest('released_at')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create', [
            'categories' => Category::all()->sortBy('name'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            // Le title est obligatoire, doit faire 2 caractères min et doit être unique.
            // Le synopsys est obligatoire et doit faire 10 caractères
            // La durée est obligatoire (et doit être un nombre)
            // Le champ Youtube est optionnel
            // Le champ cover est obligatoire, doit être une image et doit faire 1mo maximum.
            // Released at est obligatoire et doit être une date.
            // Le champ category_id doit exister dans la base de données.
            'title' => 'required|min:2|unique:movies,title',
            'synopsys' => 'required|min:10',
            'duration' => 'required|numeric',
            'youtube' => 'nullable',
            'cover' => 'required|image|max:1024',
            'released_at' => 'required|date',
            'category' => 'exists:categories,id',
        ]);

        // Ajout du film dans la BDD
        Movie::create([
            'title' => request('title'),
            'synopsys' => request('synopsys'),
            'duration' => request('duration'),
            'youtube' => request('youtube'),
            // Pour faire l'upload
            'cover' => '/storage/'.request('cover')->store('covers', 'public'), // /storage/covers/123456.jpg
            'released_at' => request('released_at'),
            'category_id' => request('category'),
        ]);

        return redirect('/films')->with('status', 'Le film a été créé.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show', [
            'movie' => $movie,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}