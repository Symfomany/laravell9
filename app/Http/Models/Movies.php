<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

/**
 * Model Movies
 */
class Movies extends Model
{

  /**
   * Connexion avec la table
   * @var string
   */
  protected $table = 'movies';

  /**
   * Selection de tous les films
   * @return [type] [description]
   */
  public static function allMovies()
  {
    $resultat = DB::table('movies')->get();
    return $resultat;
  }
  
}











 ?>
