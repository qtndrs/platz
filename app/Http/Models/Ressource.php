<?php
  namespace App\Http\Models;
  use App\Http\Models\Categorie;
  use App\Http\Models\Commentaire;
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
        return $this->belongsTo('App\Http\Models\Categorie', 'categorie_id');
       }
       public function commentaire(){
        return $this->hasMany('App\Http\Models\Commentaire')->orderBy('created_At', 'desc');
      }
  }
