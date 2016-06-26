<?php

namespace App\Http\Models;

use DateTime;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * Model Movies.
 */
class Movies extends Model
{
    /**
   * Connexion avec la table.
   *
   * @var string
   */
  protected $table = 'movies';

  /**
   * Selection de tous les films.
   *
   * @return [type] [description]
   */
  public static function allMovies()
  {
      $resultat = DB::table('movies')->get();

      return $resultat;
  }

  /**
   *
   *
   */
  public static function activation($id, $action){

    return DB::table('movies')
          ->where('id', $id)
          ->update(['visible' => $action]);
  }

  /**
   * Methode qui enregistre en Base De Données mon film.
   *
   * @return [type] [description]
   */
  public static function store(Request $request)
  {

    // insert permet d'insérer dans une table
    return DB::table('movies')->insert(
      [
        'title'        => $request->titre,
        'synopsis'     => $request->synopsis,
        'description'  => $request->description,
        'date_release' => DateTime::createFromFormat('d/m/Y', $request->date_release),
        'languages'    => $request->languages,
        'budget'       => $request->budget,
        'bo'           => $request->titre,
        'image'        => $request->image,
      ]
    );
  }
}
