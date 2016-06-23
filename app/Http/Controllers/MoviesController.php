<?php

namespace App\Http\Controllers;

use App\Http\Models\Movies;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;


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

    // construction du validator
    $validator = Validator::make($request->all(), [
        'titre' => 'required|min:3|max:255|unique:movies,title',
        'synopsis' => 'required|min:5|max:255',
        'description' => 'required|min:10|max:255',
        'image' => 'required|url',
        'date_release' => 'required|date_format:d/m/Y|after:now',
        'languages' => 'required|in:fr,en,it',
        'duree' => 'required|integer|between:1,5',
        'budget' => 'required|integer|between:10000,100000000|regex:/\d+(\.\d{1,2})?/',
        'bo' => 'required|in:vo,vost,vostfr',
    ],
    [
        'titre.unique' => 'Votre titre de film est déjà pris',
        'titre.min' => 'Votre titre de film est trop court',
        'titre.max' => 'Votre titre de film est trop long',
        'titre.required' => 'Votre titre de film est obligatoire',

    ]);

    // si le validetur échoue
    if ($validator->fails()) {
        // redirection...
        return redirect()->route('movies.creer')
                    ->withErrors($validator) // message d'erreur
                    ->withInput(); // remplissage de nos champs de formulaire
    }

    // appel de mon Modele Movies et de sa methode store
    // je lui envoi mon objet $request
    Movies::store($request);

    // redirection vers la page index
    return redirect()
    ->route('movies.index')
    ->with('success', 'Votre film a bien été crée');
    // with() permet d'écrire un message flash
  }


}
