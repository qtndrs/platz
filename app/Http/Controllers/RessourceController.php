<?php
       namespace App\Http\Controllers;
       use App\Http\Models\Ressource as RessourcesMdl;
       use Illuminate\Support\Facades\View;

       class RessourceController extends Controller {
         public function index(){
            $ressources = RessourcesMdl::orderBy('id', 'desc')->take(20)->get();
            return View::make('ressources.index', compact ('ressources'));
         }

         public function show($id){
            $ressource = RessourcesMdl::find($id);
            return View::make('ressources.show', compact ('ressource'));
         }

       }
