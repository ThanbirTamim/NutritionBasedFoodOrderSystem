<?php

namespace App\Http\Controllers;

use App\Value;
use Illuminate\Http\Request;

class ApilabController extends Controller
{
    public function values(){
        $value = Value::all();
        return response()->json($value);
    }
}
