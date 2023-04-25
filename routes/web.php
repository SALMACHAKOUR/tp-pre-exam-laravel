<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

// Route::get('/test/{param}', function($param) {
//     return view('welcome', ["param" => $param]);
// });

Route::view("/test/{param} " , "welcome");

Route::view(
    '/formation/{formation}/filiere/{filiere}/groupe/{groupe}/stagiaire/{stagiaire?}',
    'filliere'
);

// php artisan route:list

Route::view("/profile", "profile");
Route::post("/profile", function (){
    return view("show_profile", [
        "nom" => request() -> nom,
        "email" => request() -> email,
    ]);
}) -> name("profile");



Route::view("/home", "calcView");

Route::post("/calculer", function(){
    $req = request();
    $number1 = $req -> number1;
    $number2 = $req -> number2;
    $opr = $req -> opr;
    $res = 0;
    switch ($opr) {
        case '*':
            $res = $number1 * $number2;
            break;
        case '/':
            $res = $number1 / $number2;
            break;
        case '+':
            $res = $number1 + $number2;
            break;
        case '-':
            $res = $number1 - $number2;
            break;
        
        default:
            return abort(400, "bad request");
            break;
    }

    return view("calcView", compact(["res", "number1", "number2", "opr"]));
});
Route::get('{n}', function($n) {
    return 'Je suis la page ' . $n . ' !';
});