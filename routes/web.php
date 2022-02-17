<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PolitesseController;
use App\Models\Category;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});

Route::get('/bonjour', [PolitesseController::class, 'helloEveryone']);
Route::get('/au-revoir', [PolitesseController::class, 'goodbye']);
Route::get('/bonjour/{name}', [PolitesseController::class, 'helloSomeone']);


Route::get('/a-propos' , [AboutController::class, 'team']);
Route::get('/a-propos/{user}' , [AboutController::class, 'nameUser'] );

//Affiche le formulaire
Route::get('/categories/creer', function() {
    return view('categories.create');
});

//Traite le formulaire
Route::post('/categories/creer', function() {
    //Vérifier les erreurs
    request()->validate([
        'name' => 'required|min:3|max:10'
    ]);

    //S'il n'y a pas d'erreurs
    Category::create([
        'name' => request('name'),
    ]);

    return redirect('/exercices/categories');
});

//Categories
Route::get('/exercices/categories', function() {
    return view('exercices.categories', [
        'categories' => Category::all()
    ]);
});

Route::get('/exercices/categories/creer', function() {
    $category = Category::create([
        'name' => 'Test'
    ]);

    return redirect ('exercices/categories');
});

Route::get('/exercices/categories/{id}', function ($id) {
    $category = Category::find($id);

    return $category->name;
});

//Movies
Route::get('exercices/movies', function() {
    return view('exercices.movies', [
        'movies' => Movie::all()
    ]);
});


Route::get('/exercices/movies/new', function() {
    $movie = Movie::create([
        'title' => 'test',
        'synopsys' => 'isok for a long time lol',
        'duration' => 144,
        'cover' => 'youtube.com'
    ]);

    return redirect ('exercices/movies');
});

Route::get('exercices/movies/{id}', function ($id) {

    return view('exercices.movies-select', [
        'movie' => Movie::find($id)
    ]);
});