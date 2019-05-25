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

View::composer('categories.index', function( $view){
  $view->with('categories', App\Http\Models\Categorie::all());
});

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/', 'RessourceController@index')->name('templates.homepage');
Route::get('ressources/{id}', 'RessourceController@show')->name('ressource');
Route::get('categorie/{id}', 'CategorieController@show')->name('categorie');
