<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsLetterController extends Controller
{

    public function store(Request $request){
    return "coucou php ";

        /*if ( ! Newsletter::isSubscribed($request->email) )
        {
            Newsletter::subscribe($request->email);
          return 1;
        }
        return 0;*/

    }
}
