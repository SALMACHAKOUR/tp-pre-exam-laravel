<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;
use App\Http\Controllers\StudentLoginController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\MarkController;

Route::get('/', function () {
    return "this is /";
});
Route::get('/login', function () {
    return 'this is login page';
});
Route::get('/page/{id}', function ($id) {
    return 'this is page ' . $id;
});
Route::get('contact', function() {
    return "C'est moi le contact.";
});
// commenter la route /{n} pour qu'elle n'affecte pas les autre routes
// Route::get('{n}', function($n) {
//     return 'Je suis la page ' . $n . ' !';
// });


// sans Route::view
// Route::get('/test/{param}', function($param) {
//     return view('welcome', ["param" => $param]);
// });
// avec Route::view
Route::view("/test/{param} " , "welcome");

Route::view(
    '/formation/{formation}/filiere/{filiere}/groupe/{groupe}/stagiaire/{stagiaire?}',
    'filliere'
);

// php artisan route:list

Route::view("/profile", "profile");
Route::post("/profile", function (){
    return view("showProfile", [
        "nom" => request() -> nom,
        "email" => request() -> email,
    ]);
}) -> name("profile");



Route::get("/home", [CalcController::class, "index"]) -> name("calcHome");
Route::post("/calculer", [CalcController::class, "calc"]);


// TP3 - exercice 2
Route::get("/student-login", [StudentLoginController::class, "index"]);
Route::post("/student-login", [StudentLoginController::class, "afficher"]) -> name("studentLogin");

// TP3 - exercice 3
Route::get("/invoke-view/{view?}", SingleActionController::class);

// TP 4

Route::get("mark", [MarkController::class, "index"]) -> name("markAll");
Route::get("mark/stats", [MarkController::class, "stats"]) -> name("markStats");
Route::get("mark/show", [MarkController::class, "show"]) -> name("searchMarks");