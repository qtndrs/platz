<?php
       namespace App\Http\Controllers;
       use App\Http\Models\Ressource as RessourcesMdl;
       use Illuminate\Support\Facades\View;
       use Illuminate\Pagination\Paginator;
       use Illuminate\Http\Request;

       class RessourceController extends Controller {
         public function index(Request $request){
            $ressources = RessourcesMdl::orderBy('id', 'desc')->simplePaginate(20);

            if ($request->ajax()) {
                        return View::make('ressources.liste', compact ('ressources'));
                    }

            return View::make('ressources.index', compact ('ressources'));
         }

         public function show($id){
            $ressource = RessourcesMdl::find($id);
            return View::make('ressources.show', compact ('ressource'));
         }

       }
