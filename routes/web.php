<?php

use App\Http\Controllers\admin\AdminCategortycontroller;
use App\Http\Controllers\admin\AdminProductnController;
use App\Http\Controllers\admin\Orders;
use App\Http\Controllers\cart\Cart;
use App\Http\Controllers\orders\Orderscontroller;
use App\Http\Controllers\shop\ShopCnotrller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout.layout');
});



Route::get("/create",[AdminProductnController::class,"create"])->name("productcreate");
Route::get("/delete/{productid}",[AdminProductnController::class,"destroy"])->name("admindeleteproduct");
//Route::get("/index",[AdminProductnController::class,"index"])->name("productlist");
Route::post("/store",[AdminProductnController::class,"store"])->name("productstore");
Route::get("/adminshow",[AdminProductnController::class,"showtableproducts"])->name("adminproductlist");
Route::get("/gotoadmindashboard",[AdminProductnController::class,"gotoadmin"])->name("gotoadmin");
Route::get("/edit/{productid}",[AdminProductnController::class,"edit"])->name("editproduct");
Route::post("/update/{productid}",[AdminProductnController::class,"update"])->name("updateproduct");






//crud opertion for the categoryies
Route::get("/categorypageforadmin",[AdminCategortycontroller::class,"categoryshow"])->name("go_category_for_admin");
Route::get("/createcategory",[AdminCategortycontroller::class,"create"])->name("categorycreate");
Route::post("/storecategory",[AdminCategortycontroller::class,"store"])->name("categorystore");
Route::get("categotory /delete/{categoryid}",[AdminCategortycontroller::class,"destroy"])->name("admindeletecategory");
Route::get("categotory /edit/{categoryid}",[AdminCategortycontroller::class,"edit"])->name("admineditcategry");
Route::post("categotory /update/{categoryid}",[AdminCategortycontroller::class,"update"])->name("adminupdatecategory");

/////shop routes


Route::get("shopcategorylist",[ShopCnotrller::class,"categorylist"])->name("shopproduct");
Route::get("categoryproducts/{categoryid}",[ShopCnotrller::class,"getcategoryproduct"])->name("categoryprodcuts");
ROUTE::post("serachcategory",[ShopCnotrller::class,"serach"])->name("searchproducts");
ROUTE::get("productdetails/{productid}",[ShopCnotrller::class,"showproduct"])->name("productdetails");



//////cartshop



Route::get("cartpage",[Cart::class,"cartshow"])->name("cartpage");
Route::get("addtocart/{productid}",[Cart::class,"addtocard"])->name("addtocard");
Route::post("updatecart",[Cart::class,"updatecart"])->name("updatethecart");
Route::get("removeitem/{cartitemid}",[Cart::class,"removeitem"])->name("removeitem");



///ckeckout
Route::get("orderpage",[Orderscontroller::class,"orderpage"])->name("orderpage");
Route::post("makeorder",[Orderscontroller::class,"storeorderitems"])->name("makeorder");
//Route::get("thankyou",[Orderscontroller::class,"confirmorder"])->name("confirmorder");
 //// ordertrack

 //Route::get("trackpage",[Orders::class,"index"])->name("orderspageforadmin");
 Route::get("orderslistforadmin",[Orders::class,"showallorders"])->name("showordersforadmin");
 Route::post("updatestatus/{orderid}",[Orders::class,"updatestatus"])->name("updatestatus");
 Route::get("trackorderforuser",[Orders::class,"getuserorders"])->name("trackordersforuser");






















