<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarkController extends Controller
{
    static $marks = [
        "Mohamed Alaoui" => "16",
        "Ahmed Bennani" => "14",
        "Rachida kich" => "6",
        "Aicha Saaoudi" => "19",
        "Noura Alaoui" => "7",
        "Samar Rhaoussi" => "13",
        "Aicha Siraj" => "10",
        "Samiha Hakim" => "09",
        "Mohamed Rami"=> "17",
        "Sami Tazi" => "7",
        "Noura Tazi" => "14"
    ];

    function index($stats=false, $marks=null, $extra=[]){
        if(!isset($marks)){
            uasort(static::$marks, fn ($a, $b) => $b - $a);
            $marks = static::$marks;
        }
        return view("mark", [...compact("marks", "stats"), ...$extra]);
    }
    function stats(){
        return $this -> index(true);
    }
    function show(Request $req){
        $query = $req -> q;
        return $this -> index(true, array_filter(static::$marks, function($name) use($query){
            return preg_match("/$query/i", $name);
        }, ARRAY_FILTER_USE_KEY), [
            "q" => $req -> q
        ]);
    }
}
