<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\Commentaire as CommentairesMdl;
use App\User;



class CommentaireController extends Controller{

  public function addComment(Request $request){
      $commentaire = new CommentairesMdl;
      $commentaire->texte = $request->input('body');
      $commentaire->user_id = $request->input('user');
      $commentaire->ressource_id = $request->input('ressource');
      $commentaire->save();
      $user = User::find($commentaire->user_id);
      return $user;

}
}
