<?php

namespace App\Http\Controllers;

use App\data;
use App\FoodCart;
use App\FoodRecommend;
use App\Order;
use App\Transanction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomerTransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function order(Request $request){
        if ($request->has('Cart')){
            $cart = new FoodCart;
            $cart->foodid = $request->Cart;
            $cart->customeremail = Auth::user()->email;
            $cart->save();
            return redirect('/customer');
        }
        else{
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






                return view('customer.customerorder',compact('price','name','numberOfFood','nutrition','totalprotein','totalcalories','totalfat'));
            }
            catch (\Exception $e) {
                return redirect('/customer');
            }
        }

    }
    public function transaction(Request $request){
        $value2 = new Transanction;
        if(true){
            $value2->name = Auth::user()->name;
            $value2->phone = $request->customerphone;
            $value2->address = $request->address;
            $value2->foodname = $request->foodname;
            $value2->foodprice = $request->foodprice;
            $value2->email = Auth::user()->email;
        }

        $value2->save();
        return redirect('/customer');

    }
    public function alltransaction(){
        $value = Transanction::all();
        $user = Auth::user()->email;
        $newvalue = $value->where('email',$user);
//        dd($newvalue);
        return view('customer.customertransaction',compact('newvalue'));
    }
    public function cart(){
        $value = FoodCart::all();//this line for take all value in foodcart
        $user = Auth::user()->email;//this line for instant customer who is in session
        $newvalue = $value->where('customeremail',$user);//here i take only that email who is in login in session
        $food = array();
        $i = 0;
        foreach ($newvalue as $item){

            $foodinfo = data::find($item->foodid);
            $food[$i] = $foodinfo;
            $i = $i + 1;


        }
//        dd($food);
        return view('customer.cfoodcart',compact('food'));

    }

    public function foodrecommend(Request $request){
        try{
            $values = FoodRecommend::all();
            $newy = $request->obtainbmi;
            $column = 1;
            $x = 0;
            $y = 0;
            $x2 = 0;
            $y2 = 0;
            $xy = 0;
            foreach ($values as $value){
                $x = $x + $value->foodid;
                $x2 = $x2 + ($value->foodid * $value->foodid);
                $y = $y + $value->BMI;
                $y2 = $y2 + ($value->BMI * $value->BMI);
                $xy = $xy+ ($value->foodid * $value->BMI);
                $column=$column+1;
            }
            $avgx = 0;
            $avgy = 0;
            $avgx = $x / $column;
            $avgy = $y / $column;
            $Bxy = (($column * $xy)-($x * $y))/(($column * $y2)-($y*$y));

            $newx = (($Bxy*$newy) - ($Bxy*$avgx))+$avgx;
            $y = round($newx,0);


            $food = data::all();

            $fname=array();
            $i = 0;
            foreach ($food as $item){
                if(($item->fat)<=$y+3){
                    $finfo[$i] = array(
                        'photo' => $item->photo,
                        'price' => $item->price,
                        'name' => $item->name,
                        'id' => $item->id
                    );
//                $fname[$i] = $item->name;
                    $i += 1;
                }
            }
            if (in_array(null, $finfo, true)){
                $finfo[0] = array(
                    'photo' => 'nofood.jpg',
                    'price' => '',
                    'name' => 'NO food',
                    'id' => 1
                );
            }
            return view('customer.customerfoodrecommder',compact('finfo'));
        }catch (\Exception $e) {
            echo '<script language="javascript">';
            echo 'alert("Sorry You are Morbid Obesity. So you should not to eat burger.(Recommend by our agent)")';
            echo '</script>';
        }
    }

}
