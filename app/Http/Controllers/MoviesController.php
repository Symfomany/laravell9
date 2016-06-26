<?php

namespace App\Http\Controllers;

use App\Http\Models\Movies;
use Illuminate\Http\Request;
use Validator;
use Session;
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
   * Page creer.
   *
   * @return  vue creer
   */
  public function creer()
  {
      return view('movies/creer');
  }

  /**
   * Page creer.
   *
   * @return  vue creer
   */
  public function activation($id, $action = true)
  {

      Movies::activation($id, $action);
      if ($action == true) {
        $chaine = 'Votre film a bien été activé';
      }else {
        $chaine = 'Votre film a bien été inactivé';
      }
      return redirect()
      ->route('movies.index')
      ->with('success', $chaine);
  }



      /**
       * Fonction de like des films, enregistré en session
       * Session : mécanisme de stockage temporelle
       * BDD: mécanisme de stockage atemporelle.
       *
       * @param Request $request
       */
      public function like($id, $action)
      {
          $movie = Movies::find($id);
          $likes = session('likes', []);

          // si l'action est "like"
          if ($action == 'like') {
              // J'ajoute mon movie dans le tableaux des likes en session
              $likes[$id] = $movie->id;
              $message = "Le film {$movie->title} a bien été liké";
          } else {
              // je supprime le like dans le tableaux des likes
              // unset() supprimer un element dans un tableau en PHP
              unset($likes[$id]);
              $message = "Le film {$movie->title} a bien été disliké";
          }

          //j'enregistre en session mon nouveau tableaux des likes
          Session::put('likes', $likes);
          // une redirection avec message flash
          return redirect()
              ->route('movies.index')
              ->with('success', $message);
      }



  /**
   * Enregistrer mes données depuis mon formulaire
   * Reception des données de mon formulaire une fois envoyé
   * Object $request : objet de la classe Request.
   *
   * @return [type] [description]
   */
  public function store(Request $request)
  {

    // construction du validator
    $validator = Validator::make($request->all(), [
        'titre'        => 'required|min:3|max:255|unique:movies,title',
        'synopsis'     => 'required|min:5|max:255',
        'description'  => 'required|min:10|max:255',
        'image'        => 'required|url',
        'date_release' => 'required|date_format:d/m/Y|after:now',
        'languages'    => 'required|in:fr,en,it',
        'duree'        => 'required|integer|between:1,5',
        'budget'       => 'required|integer|between:10000,100000000|regex:/\d+(\.\d{1,2})?/',
        'bo'           => 'required|in:vo,vost,vostfr',
    ],
    [
        'titre.unique'   => 'Votre titre de film est déjà pris',
        'titre.min'      => 'Votre titre de film est trop court',
        'titre.max'      => 'Votre titre de film est trop long',
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
