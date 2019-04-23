<?php

namespace App\Http\Controllers;

use App\Value;
use Illuminate\Http\Request;

class LabtestController extends Controller
{
    public function index(){
        $values = Value::all();
        return view('labtest.home',compact('values'));
    }
    public function index2(){
        return view('labtest.index');
    }
    public function store(Request $request){
        $value = new Value;
        $value->name = ($request->name)+2;
        $value->phone = ($request->phone)+2;
        $value->save();
        return redirect('/home');
    }
}
