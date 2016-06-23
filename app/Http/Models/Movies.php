<?php
namespace App\Http\Models;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use \DateTime;

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
   * Methode qui enregistre en Base De Données mon film
   * @return [type] [description]
   */
  public static function store(Request $request){

    // insert permet d'insérer dans une table
    DB::table('movies')->insert(
      [
        'title' => $request->titre,
        'synopsis' => $request->synopsis,
        'description' => $request->description,
        'date_release' => DateTime::createFromFormat('d/m/Y',$request->date_release),
        'languages' => $request->languages,
        'budget' => $request->budget,
        'bo' => $request->titre,
        'image' => $request->image,
      ]
    );

  }

}
