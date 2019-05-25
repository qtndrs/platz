<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\Commentaire;


class CommentaireController extends Controller{

    public function addComment(Request $request)
    {
    	try{
	        $commentaire = new Commentaire;
	        $commentaire->texte = $request->input('body');
	        $commentaire->user_id = $request->input('user');
	        $commentare->ressource_id = $request->input('ressource');

	        $commentaire->save();
	        return $commentaire;
	    }
	    catch(\Exception $e){
			// do task when error
			 $e->getMessage();   // insert query
	    }
    }

}
