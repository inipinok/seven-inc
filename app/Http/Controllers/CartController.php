<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kost;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        $user = Auth()->User()->id;
        $data['carts'] = Cart::where('user_id', $user)->get();
        // dd($data['cart']);
        return view('cart/index', $data);
    }

    function store(Request $request){
        $kost = Kost::where('id', $request->id_kost)->first();
        $cart = new Cart;
        $cart->user_id = $request->id_user;
        $cart->id_kost = $request->id_kost;
        $cart->nama_kost = $kost->title;
        $cart->image = $kost->image;
        $cart->alamat = $kost->address;
        $cart->harga = $kost->price;
        $cart->qty = $kost->qty;
        $cart->save();
        // dd($kost);
        return redirect('cart');

    }


    public function destroy($id)
    {
        $cart=cart::find($id)->delete();
        return redirect('cart');
    }

}
