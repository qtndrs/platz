<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\Commentaire;


class CommentaireController extends Controller{

    public function addComment(Request $request)
    {

	        $commentaire = new Commentaire;
	        $commentaire->texte = $request->input('body');
	        $commentaire->ressource_id = $request->input('ressource');

	        $commentaire->save();
	        return $commentaire;
    }

}
