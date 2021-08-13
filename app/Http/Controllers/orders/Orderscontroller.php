<?php

namespace App\Http\Controllers\orders;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Order;
use App\Models\Order_Item;
use Illuminate\Http\Request;

class Orderscontroller extends Controller
{
   public function orderpage()
   {
       return view('orders.orderpage');
   }

   public function storeorderitems(Request $req)
   {
    
        //$text="asda";
       // dd($text);
       $req->validate( [
            'address' => 'required|max:255',
            'firstname' => 'required|max:255',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city' => 'required',
        ]);

        $order=new  Order();
        $order->address=$req->address;
        $order->firstname=$req->firstname;
        $order->phone=$req->phone;
        $order->lastname=$req->lastname;
        $order->email=$req->email;
        $order->city=$req->city;
        $order->totalprice=\Cart::getTotal();
        $order->user_id=1;
        $order->save();
           foreach(\Cart::getContent() as $index =>$val)
           {
            Item::create(
                [
                    "quantity"=>$val['quantity'],
                    "price"=>$val['price'],
                    "name"=>$val['name'],
                   "product_id"=>$val['id'],
                   "order_id"=>$order->id,
                ]);
            }
            \Cart::clear();
        return redirect()->route("trackordersforuser");
    }
    
   
   
}
