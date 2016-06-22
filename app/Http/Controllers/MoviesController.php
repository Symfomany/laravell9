<?php

namespace App\Http\Controllers;
use App\Http\Models\Movies;
use App\Http\Controllers\Controller;

/**
 * @class MoviesController
 * Controller for movies pages
 */
class MoviesController extends Controller
{

  /**
   * Pages Liste de nos films
   * @return  vue list
   */
  public function index()
  {
    $movies = Movies::allMovies();
    
    return view('movies/index', ['movies' => $movies]);
  }
}











 ?>
