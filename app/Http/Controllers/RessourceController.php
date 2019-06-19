<?php
       namespace App\Http\Controllers;
       use App\Http\Models\Ressource as RessourcesMdl;
       use App\Http\Models\Commentaire as CommentairesMdl;
       use Illuminate\Support\Facades\View;
       use Illuminate\Pagination\Paginator;
       use Illuminate\Http\Request;
       use Illuminate\Support\Facades\Storage;

       class RessourceController extends Controller {
         /**
          * [index description]
          * @param  Request $request [description]
          * @return array           [description]
          */
         public function index(Request $request){
            $ressources = RessourcesMdl::orderBy('created_At', 'DESC')->simplePaginate(20);
            if ($request->ajax()) {
             return View::make('ressources.liste', compact ('ressources'));
        }
            return View::make('ressources.index', compact ('ressources'));
         }

         /**
          * [show description]
          * @param  [type] $id [description]
          * @return array    [description]
          */
         public function show($id){
            $ressource = RessourcesMdl::find($id);
            $file= $ressource->file;
            $file = explode('"', $file);
            $filelink=$file[3];
            $filename=$file[7];
            $commentaires = $ressource->commentaire;
            return View::make('ressources.show', compact ('ressource', 'commentaires', 'filelink', 'filename'));
         }

       }
