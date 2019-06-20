<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Users
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Liste des catégories
View::composer('categories.index', function( $view){
  $view->with('categories', App\Http\Models\Categorie::all());
});

// Ressources liées
View::composer('ressources.indexByCategorie', function( $view){
      $currentRoute = Route::current();
      $id = $currentRoute->parameters()['id'];
      $ressource = App\Http\Models\Ressource::find($id);
      $categorie_id = $ressource->categorie_id;
      $view->with('ressources', App\Http\Models\Ressource::where('categorie_id', $categorie_id)
                  ->where('id', '!=', $ressource->id)
                  ->limit(4)
                  ->get());
  });

// Commentaires
Route::get('ressources/add/comment', 'CommentaireController@addComment')->name('addComment');

// Liste des ressources
Route::get('/', 'RessourceController@index')->name('templates.homepage');

// Détails d'une ressource
Route::get('ressources/{id}', 'RessourceController@show')->name('ressource');

// Détails d'une catégorie
Route::get('categorie/{id}', 'CategorieController@show')->name('categorie');

// Newsletter
Route::post('/newsletter','NewsletterController@store');


// Profil
Route::get('profile/{id}', 'ProfileController@show')->name('profile')->middleware('auth');
Route::get('profile', 'ProfileController@update_avatar')->name('avatar');
