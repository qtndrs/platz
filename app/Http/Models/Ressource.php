<?php
  namespace App\Http\Models;
  use App\Http\Models\Categorie;
  use App\User ;
  use Illuminate\Database\Eloquent\Model;

  class Ressource extends Model {
      /**
        * The table associated with the model.
        * @var string
        */
       protected $table = 'ressources';

       public function user(){
        return $this->belongsTo('App\User');
       }
       public function categorie(){
        return $this->belongsTo('App\Http\Models\Categorie');
       }
  }