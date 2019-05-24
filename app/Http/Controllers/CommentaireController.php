<?php
       namespace App\Http\Controllers;
       use App\Http\Models\Categorie as CategoriesMdl;
       use App\Http\Models\Ressource as RessourceMdl;
       use App\Http\Models\Commentaire as CommentaireMdl;
       use Auth;
       use Illuminate\Support\Facades\View;
       use Illuminate\Pagination\Paginator;

       class CommentaireController extends Controller {
         public function addCommentaire(Request $request){
        if ($request->ajax()){
            $user = Auth::user();
            $commentaire = new Commentaire;

            $commentaire->userid = $user->id;
            $commentaire->ressourceid = $request->ressourceid;
            $commentaire->texte = $request->texte;

            return response($commentaire);
        }

    }
}
