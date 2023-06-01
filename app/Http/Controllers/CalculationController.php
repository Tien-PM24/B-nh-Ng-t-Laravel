<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculation;

class CalculationController extends Controller
{
    public function index()
    {
        return view('calculation');
    }

    public function calculate(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operator = $request->input('operator');
        $result = 0;

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = $num1 / $num2;
                break;
        }

        Calculation::create([
            'num1' => $num1,
            'num2' => $num2,
            'operator' => $operator,
            'result' => $result,
            ]);
            return view('calculation', compact('result'));
    }
}

?>


