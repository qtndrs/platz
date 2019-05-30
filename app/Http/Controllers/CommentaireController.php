<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\Commentaire;


class CommentaireController extends Controller{

    public function addComment(Request $request)
    {

      if($request->$ajax())
      {
          return "True request!";
      }
}
  

}
