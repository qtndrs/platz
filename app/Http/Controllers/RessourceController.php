<?php
       namespace App\Http\Controllers;
       use App\Http\Models\Ressource as RessourcesMdl;
       use App\Http\Models\Commentaire as CommentairesMdl;
       use Illuminate\Support\Facades\View;
       use Illuminate\Pagination\Paginator;
       use Illuminate\Http\Request;

       class RessourceController extends Controller {
         public function index(Request $request){
            $ressources = RessourcesMdl::simplePaginate(4);
            if ($request->ajax()) {
             return View::make('ressources.liste', compact ('ressources'));
        }
            return View::make('ressources.index', compact ('ressources'));
         }

         public function show($id){
            $ressource = RessourcesMdl::find($id);
            $commentaires = $ressource->commentaire('created_at', 'DESC');
            return View::make('ressources.show', compact ('ressource', 'commentaires'));
         }


       }
