<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use App\Models\Cart;
use App\Models\Kost;
use Illuminate\Http\Request;

class CartDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return abort('404');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kost_id' => 'required',
        ]);
        $itemuser = $request->user();
        $itemkost = Kost::findOrFail($request->kost_id);

        $cart = Cart::where('user_id', $itemuser->id)
                    ->where('status_cart', 'cart')
                    ->first();

        if ($cart) {
            $itemcart = $cart;
        } else {
            $inputancart['user_id'] = $itemuser->id;
            $inputancart['status_cart'] = 'cart';
            $inputancart['status_pembayaran'] = 'belum';
            $itencart = Cart::create($inputancart);
        }

        //cek keranjang
        $cekdetail = CartDetail::where('cart_id', $itemcart->id)
                                ->where('produk_id', $itemkost->id)
                                ->first();

        $qty = 1;
        $price = $itemcart->price;
        $subtotal = ($qty * $price);

        if ($cekdetail) {
            $cekdetail->updatedetail($cekdetail, $qty, $price);
            $cekdetail->cart>updatetotal($cekdetail->cart, $subtotal);
        } else {
            $inputan = $request->all();
            $inputan['cart_id'] = $itemcart->id;
            $inputan['kost_id'] = $itemkost->id;
            $inputan['qty']     = $qty;
            $inputan['price']   = $price;
            $inputan['subtotal']= ($price * $qty);
            $itemdetail = CartDetail::create($inputan);

            $itemdetail->cart->updatetotal($itemdetail->cart, $subtotal);
        }
        return redirect()->route('cart.index')->with('success', 'Produk berhasil ditambhakan ke cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function show(CartDetail $cartDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(CartDetail $cartDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartDetail $cartDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartDetail $cartDetail)
    {
        //
    }
}
