<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data;
use App\aboutsection;
use App\videosection;
class ClientController extends Controller
{

    public function index(){
        $value = data::all();
        $value1 = aboutsection::all();
        $value2 = videosection::all();
        return view('userhome',compact('value','value1','value2'));
    }

}
