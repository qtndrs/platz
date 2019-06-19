<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{

/**
 * [store description]
 * @param  Request $request [description]
 * @return int           [description]
 */
    public function store(Request $request)
    {
     if ( ! Newsletter::isSubscribed($request->email) )
        {
           Newsletter::subscribe($request->email);
            return 1;
        }
        return 0;

    }
}
