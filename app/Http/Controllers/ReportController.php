<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function  index(){
        return view('admin.report');
    }
    public function MisReport(Request $request ){
        $newx = $request->ad;

        $values = Report::all();
        $column = 1;
        $x = 0;
        $y = 0;
        $x2 = 0;
        $y2 = 0;
        $xy = 0;
        foreach ($values as $value){
            $x = $x + $value->advertise;
            $x2 = $x2 + ($value->advertise * $value->advertise);
            $y = $y + $value->cellcost;
            $y2 = $y2 + ($value->cellcost * $value->cellcost);
            $xy = $xy+ ($value->advertise * $value->cellcost);
            $column=$column+1;
        }
        $avgx = 0;
        $avgy = 0;
        $avgx = $x / $column;
        $avgy = $y / $column;
        $xyz = ($column/2)*(($xy/$x2)-((($x*$x*$x)/2)/3));
        $y = round($xyz,2);
        return view('admin.report',compact('y','newx'));












//        $newx = $request->ad;
//
//        $values = Report::all();
//        $column = 1;
//        $x = 0;
//        $y = 0;
//        $x2 = 0;
//        $y2 = 0;
//        $xy = 0;
//        foreach ($values as $value){
//            $x = $x + $value->advertise;
//            $x2 = $x2 + ($value->advertise * $value->advertise);
//            $y = $y + $value->cellcost;
//            $y2 = $y2 + ($value->cellcost * $value->cellcost);
//            $xy = $xy+ ($value->advertise * $value->cellcost);
//            $column=$column+1;
//        }
//        $avgx = 0;
//        $avgy = 0;
//        $avgx = $x / $column;
//        $avgy = $y / $column;
//        $Byx = (($column * $xy)-($x * $y))/(($column * $x2)-($x*$x));
//
//        $newy = (($Byx*$newx) - ($Byx*$avgx))+$avgy;
//        $y = round($newy,2);
//        return view('admin.report',compact('y','newx'));
    }
}
