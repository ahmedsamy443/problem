<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;

class Orders extends Controller
{
   public function showallorders()
   {
       $data=Order::all();
       return view("admin.ordertrackforadmin.showallorderforadmin",["delivereddata"=>$data]);
   }

   public function updatestatus(Request $req ,$id)
   {
         $order=Order::find($id);
         $order->update(["status"=>$req->status]);
         return redirect()->back();
   }
   public function getuserorders()
   {
       
        $hello=Order::where("user_id",1)->get();
      //  $data=Order::find(2)->itemes;
      // dd($data);
       // $data=Order::find($hello['id'])->items->get();
     //   $data=Item::where("order_id",$hello->id)->get();
        return view("orderlistforuser.thankyou",["data"=>$hello]);
   }
   
}
