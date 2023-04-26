<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentLoginController extends Controller
{
    function index(){
        return view("studentLogin");
    }
    function afficher(Request $req){
        $lastname = $req -> lastname;
        $firstname = $req -> firstname;
        $gender = $req -> gender;
        $email = $req -> email;

        return "
            prénom : $lastname <br/>
            nom : $firstname <br/>
            sexe : $gender <br/>
            email : $email <br/>
        ";
    }
}
