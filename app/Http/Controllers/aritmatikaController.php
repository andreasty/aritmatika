<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aritmatikaController extends Controller
{
    public function index(Request $request){
        $value = $request->value;

        $result = 22/7 * $value * $value;

        return view('aritmatika', compact('result'));
    }
}
