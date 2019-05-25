<?php
       namespace App\Http\Controllers;
       use App\Http\Models\Categorie as CategoriesMdl;
       use App\Http\Models\Ressource as RessourceMdl;
       use App\Http\Models\Commentaire as CommentaireMdl;
       use Auth;
       use Illuminate\Http\Request;
       use App\Http\Requests\CommentRequest;
       use Illuminate\Support\Facades\View;
       use Illuminate\Pagination\Paginator;

       class CommentaireController extends Controller {

         public function store(CommentRequest $request){
        $ressource = RessourceMdl::findOrFail($request->ressource_id);

        Comment::create([
            'texte' => $request->texte,
            'user_id' => Auth::id(),
            'ressource_id' => $ressource->id
        ]);
        return redirect()->route('ressources.show', $ressource->id);
    }
        }

    }
}
