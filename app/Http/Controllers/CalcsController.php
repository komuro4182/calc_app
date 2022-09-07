<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
        public function result($num1, $calclation, $num2){
        switch ($calclation) {
                case 'addition':
                $result = $num1 + $num2;
                        break;
                case 'subtraction':
                $result = $num1 - $num2;
                        break;
                case 'multiplication':
                $result = $num1 * $num2;
                        break;
                case 'division':
                $result = $num1 / $num2;
                        break;
        }
        return view("calcs.calcs",["result" => $result]);
        
        }
}
