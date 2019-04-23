<?php

namespace App\Http\Controllers;

use App\Transanction;
use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function store(Request $request){
        $value = new Order;
//        $value2 = new Transanction;

        $value->numberoffood = $request->numberoffood;
        $value->foodname = $request->foodname;
        $value->foodprice = $request->foodprice;
        $value->customername = $request->customername;
        $value->customerphone = $request->customerphone;
        $value->address = $request->address;

//        if(Auth::user()->name){
//            $value2->foodname = $request->foodname;
//            $value2->foodprice = $request->foodprice;
//            $value2->email = Auth::user()->email;
//            $value2->save();
//        }

        $value->save();
        return redirect('/');

    }
}
