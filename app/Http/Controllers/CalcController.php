<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{

    public function result($num1, $operetor, $num2)
    {
        switch ($operetor) {
            case 'addition':
                $result = $num1 + $num2;
                return view('calcs.result', ['result' => $result]);
                break;
            case 'subtraction':
                $result = $num1 - $num2;
                return view('calcs.result', ['result' => $result]);
                break;
            case 'multiplication':
                $result = $num1 * $num2;
                return view('calcs.result', ['result' => $result]);
                break;
            case 'division':
                $result = $num1 / $num2;
                return view('calcs.result', ['result' => $result]);
                break;
        }
    }
}
