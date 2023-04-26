<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleActionController extends Controller
{
    function __invoke($view = "accueil"){
        if(!in_array($view, ["accueil", "presentation", "contact"]))
            return response("bad request", 400);

        return view($view);
    }
}
