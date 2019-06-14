<?php
  namespace App\Http\Models;
  use App\Http\Models\Commentaire;
  use App\User ;
  use Illuminate\Database\Eloquent\Model;

  class Commentaire extends Model {
      /**
        * The table associated with the model.
        * @var string
        */
       protected $table = 'commentaires';

       public function ressource(){
        return $this->belongsTo('App\Http\Models\Ressource');
       }

       public function user(){
        return $this->belongsTo('App\User');
       }
  }
