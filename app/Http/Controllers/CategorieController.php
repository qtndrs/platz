<?php
       namespace App\Http\Controllers;
       use App\Http\Models\Categorie as CategoriesMdl;
       use App\Http\Models\Ressource as RessourcesMdl;
       use Illuminate\Support\Facades\View;
       use Illuminate\Pagination\Paginator;
       use Illuminate\Http\Request;

       class CategorieController extends Controller {
         public function index(){
            $categories = CategoriesMdl::orderBy('id');
            return View::make('templates.homepage', compact ('categories'));
         }


         public function show($id, Request $request){
            $categorie = CategoriesMdl::find($id);
             $ressources = $categorie->ressource()->simplePaginate(8);
          if ($request->ajax()) {
                   return View::make('ressources.liste', compact ( 'ressources'));
           }
            return View::make('categories.show', compact ('categorie', 'ressources'));
         }

       }
