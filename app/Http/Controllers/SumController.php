<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function index()
    {
        return view('sum');
    }

    public function calculate(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $sum = $a + $b;
        return view('sum', ['sum' => $sum]);
    }
}
