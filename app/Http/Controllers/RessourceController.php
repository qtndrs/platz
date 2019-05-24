<?php
       namespace App\Http\Controllers;
       use App\Http\Models\Ressource as RessourcesMdl;
       use Illuminate\Support\Facades\View;
       use Illuminate\Support\Facades\Storage;
       use Illuminate\Http\Request;

       class RessourceController extends Controller {
         public function index(){
            $ressources = RessourcesMdl::orderBy('id', 'desc')->paginate(20);
            return View::make('ressources.index', compact ('ressources'));
         }

         public function show($id){
            $ressource = RessourcesMdl::find($id);
            return View::make('ressources.show', compact ('ressource'));
         }

      /*   public function download() {
               $file= public_path(). "/pdf/";  //path of your directory
                   $headers = array(
                       'Content-Type: application/pdf',
                   );
                return Response::download($file.$pdfName, 'filename.pdf', $headers);
         }*/
                     public function download()
            {
                $path = Storage::url('http://localhost/platz/public/storage/ressources/May2019/w3ySXvLmVn752k5okuOM.pdf');
                  $contents = Storage::get('http://localhost/platz/public/storage/ressources/May2019/w3ySXvLmVn752k5okuOM.pdf');
                return var_dump($path);
                  //Storage::download($path);

            }

            public function search(Request $request){
              $search = $request->get('search');
              $words = explode(' ',$search);
              $ressources= RessourcesMdl::orderBy('id', 'desc')
              ->where(function ($query ) use ($words) {
              foreach ($words as $word) {
              $query->orWhere('titre', 'like', '%'. $word .'%')
              ->orWhere('texteLead', 'like', '%'. $word .'%')
              ->orWhere('texteSuite', 'like', '%'. $word .'%')
              ->orWhere('image', 'like', '%'. $word .'%')
              ->orWhere('file', 'like', '%'. $word .'%');
            }
            })
            ->paginate(10);


              return View::make('ressources.index', compact ('ressources'));
            }
       }
