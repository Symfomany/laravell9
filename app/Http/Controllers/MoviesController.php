<?php

namespace App\Http\Controllers;

use App\Http\Models\Movies;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


/**
 * @class MoviesController
 * Controller for movies pages
 */
class MoviesController extends Controller
{
    /**
   * Pages Liste de nos films.
   *
   * @return  vue list
   */
  public function index()
  {
      $movies = Movies::allMovies();

      return view('movies/index', ['movies' => $movies]);
  }

  /**
   * Page creer
   * @return  vue creer
   */
  public function creer(){

    return view('movies/creer');
  }

  /**
   * Enregistrer mes données depuis mon formulaire
   * Reception des données de mon formulaire une fois envoyé
   * Object $request : objet de la classe Request
   * @return [type] [description]
   */
  public function store(Request $request){

    // appel de mon Modele Movies et de sa methode store
    // je lui envoi mon objet $request
    Movies::store($request);

    // redirection vers la page index
    return redirect()->route('movies.index');
  }

}
