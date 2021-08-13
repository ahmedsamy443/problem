<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopCnotrller extends Controller
{
    
    public function categorylist()
    {    
        $product=Product::all();
        $data=Category::all();
        $latest = Product::orderBy('created_at','desc')->take(2)->get();
        return view("shop.shoplist",["dervieddata"=>$data,"productdata"=>$product,"latest"=>$latest]);
    } 
    public function getcategoryproduct($categoryid)
    {
               $data=Category::all();
                $product=Product::where("categort_id",$categoryid)->get();
                $latest = Product::orderBy('created_at','desc')->take(2)->get();

            return view("shop.shoplist",["productdata"=>$product,"dervieddata"=>$data,"latest"=>$latest]);
    }
   public function serach(request $req)
   {
      $product= Product::where("name","like","%$req->search%")->get();
      $data=Category::all();
      $latest = Product::orderBy('created_at','desc')->take(2)->get();

      return view("shop.shoplist",["productdata"=>$product,"dervieddata"=>$data,"latest"=>$latest]);
   }
    
   public function showproduct($id)
   {
         $product = Product::find($id);
         return view("shop.productdetails",["productdetails"=>$product]);
   }

   
   

}
