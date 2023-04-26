<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    function index(){
        return view("calcView");
    }

    function calc(){
        $req = request();
        $number1 = $req -> number1;
        $number2 = $req -> number2;
        $opr = $req -> opr;
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

        return redirect() -> route("calcHome", compact(["res", "number1", "number2", "opr"]));
    }
}
