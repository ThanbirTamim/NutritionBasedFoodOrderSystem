<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data;
use App\aboutsection;
use App\videosection;
use Illuminate\Support\Facades\DB;
class ClientController extends Controller
{

    public function index(){
        $value = data::all();
        $value1 = aboutsection::all();
        $value2 = videosection::all();
//        for slide show
        $simg1 = "images/home-bg-slideshow1.jpg";
        $simg2 = "images/home-bg-slideshow2.jpg";
        $simg3 = "images/home-bg-slideshow3.jpg";
        return view('customer.userhome',compact('value','value1','value2','simg1','simg2','simg3'));
    }

    public function order(Request $request){
//        $val = new data;

        if ($request->has('Cart')){
            return 'Cart done';
        }
        if ($request->has('Order')){
            try {
                $odr = $request->input('order');
                $quantity = $request->input('quantity');
                $price = 0;
                $name = '';
                $totalprotein = 0;
                $totalcalories = 0;
                $totalfat = 0;
                $i = 1;
                $count = 0;
                $nutrition = array();
//        print_r($quantity);
                $numberOfFood = 0;
                foreach ($odr as $v){
                    while($i < 30){
                        if($v == $i){
                            $val = data::find($v);

                            //doing these 3 line fot calculate total protine, calories and fat
                            $totalprotein +=  $val->protein;
                            $totalcalories +=  $val->calories;
                            $totalfat +=  $val->fat;

                            //ekhane acciociative array use korsi onk koita id er under e food er name and tader nutrition gula ber korbar jonno.
                            $nutrition[] = array(
                                'name' => $val->name,
                                'protein' => $val->protein,
                                'fat' => $val->fat,
                                'calories' => $val->calories
                            );
//                    dd($nutrition);
                            $name .= $val->name . '('.$quantity[$i-1].'), ';
                            $price +=  (($val->price)*($quantity[$i-1]));
                            $numberOfFood += $quantity[$i-1];
                            $count+=1;
                            break;
                        }
                        $i += 1;
                    }
                }
                $totalprotein = round($totalprotein/$count,2);
                $totalcalories = round($totalcalories/$count,2);
                $totalfat = round($totalfat/$count,2);
//        dd($nutrition);
                return view('customer.order',compact('price','name','numberOfFood','nutrition','totalprotein','totalcalories','totalfat'));
            }
            catch (\Exception $e) {
                return redirect('/#menu');
            }
        }

    }

}


//#include<life.h>
//int main(){
//   While(breath==true){
//       print("have to learn a lot !!!");
//       if(dead){
//           break;
//       }
//   }
//}


























