<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\DB;

class ClientsOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $value = DB::table('orders')->orderBy('created_at', 'desc')->get();
        return view('admin.order.clientsorders',compact('value'));

    }
}
