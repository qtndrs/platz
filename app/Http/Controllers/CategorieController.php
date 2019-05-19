<?php
       namespace App\Http\Controllers;
       use App\Http\Models\Categorie as CategoriesMdl;
       use App\Http\Models\Ressource as Ressource;
       use Illuminate\Support\Facades\View;

       class CategorieController extends Controller {
         public function index(){
            $categories = CategoriesMdl::orderBy('id');
            return View::make('templates.homepage', compact ('categories'));
         }

         public function show($id){
            $categorie = CategoriesMdl::find($id);
            $ressources = $categorie->ressource()->get();
            return View::make('categories.show', compact ('categorie', 'ressources'));
         }

       }
