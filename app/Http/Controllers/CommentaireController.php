<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\Commentaire as CommentairesMdl;



class CommentaireController extends Controller{

  public function addComment(Request $request){
       $commentaire = new CommentairesMdl;
       $commentaire->texte = $request->input('body');
       $commentaire->user_id = $request->input('user');
       $commentaire->ressource_id = $request->input('ressource');
       return ($commentaire->save())?1:0;
   }

}
