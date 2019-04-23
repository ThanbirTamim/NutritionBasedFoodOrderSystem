<?php

namespace App\Http\Controllers;

use App\Customer;
use App\data;
use App\Order;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function customer_info(){
        $value = Customer::all();
        return response()->json($value);
    }

    public function food_info(){
        $value = data::all();
        return response()->json($value);
    }
    public function order_info(){
        $value = Order::all();
        return response()->json($value);
    }
}
