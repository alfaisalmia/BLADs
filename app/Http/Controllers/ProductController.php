<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInfo;
use App\Models\FooterAbout;
use App\Models\SocialLink;
use App\Models\Copyright;
use App\Models\UsefulLinks;
use App\Models\ServiceLists;
use App\Models\Header;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $contactInfo = ContactInfo::all();
        $footer_about = FooterAbout::all();
        $socialLinks = SocialLink::all();
        $copys = Copyright::all();
        $usefullinks = UsefulLinks::all();
        $servicesLists = ServiceLists::all();
        $headers = Header::all();
        $productsAll = Product::select('*')->orderBy('id', 'desc')->paginate(16);
        return view('product.index', compact('contactInfo', 'footer_about', 'socialLinks', 'copys', 'usefullinks', 'servicesLists', 'headers', 'productsAll'));
    }

    public function productDetails($id)
    {
        $contactInfo = ContactInfo::all();
        $footer_about = FooterAbout::all();
        $socialLinks = SocialLink::all();
        $copys = Copyright::all();
        $usefullinks = UsefulLinks::all();
        $servicesLists = ServiceLists::all();
        $headers = Header::all();
        $productDetails =  Product::where('id', $id)->get();
        return view('product.product-details', compact('contactInfo', 'footer_about', 'socialLinks', 'copys', 'usefullinks', 'servicesLists', 'headers', 'productDetails'));
        return view('product.product-details');
    }
    public function addToCart(Request $request)
    {

        if (Auth::user()) {
            $cart = new Cart();
            $cart->product_id = $request->product_id;
            $cart->user_id = Auth::user()->id;
            $cart->product_price = $request->product_price*$request->quantity;
            $cart->save();
            return redirect()->route('products');
        } else {
            return redirect()->route('signin');
        }
    }

    public function cartList()
    {
        if(Auth::user()){
            $userId = Auth::user()->id;
            $data =  DB::table('carts')
                ->join('products', 'carts.product_id', 'products.id')
                ->select('products.*', 'carts.id as cart_id','carts.product_price')
                ->where('carts.user_id', $userId)
                ->get();
            return view('product.cartlist', ['products' => $data]);
        }else{
            return redirect()->route('signin');
        }
     
    }
    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartList');
    }
    public function orderNow()
    {
        $userId = Auth::user()->id;
        $total =  DB::table('carts')
            ->join('products', 'carts.product_id', 'products.id')
            ->where('carts.user_id', $userId)
            ->sum('carts.product_price');
        return view('product.ordernow', ['total' => $total]);
    }
    public function orderPlace(Request $request)
    {
  
        $userId = Auth::user()->id;
        $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order();
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->shipping_address = $request->shipping_address;
            $order->status = "pending";
            $order->payment_method = $request->payment_method;
            $order->payment_status = "pending";
            $order->save();
        }
        Cart::where('user_id', $userId)->delete();
        // return $request->input();
    }
    public function customerOrder(){
        $userId = Auth::user()->id;
        $myOrder = Order::where('user_id', $userId)->get();
        $data =  DB::table('orders')
        ->join('products', 'orders.product_id', 'products.id')
        ->select('products.*', 'orders.*')
        ->where('orders.user_id', $userId)
        ->get();
        return view('product.customerOrder', ['orders' => $data]);

    }
}
