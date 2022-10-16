<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Kost;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth()->User()->id;
        $data['checkouts'] = Customer::where('user_id', $user)->get();
        return view('cart.checkout', $data);
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
        $kost = Kost::where('id', $request->id_kost)->first();
        $checkout = new customer;
        $checkout->user_id = Auth()->user()->id;
        $checkout->kost_id = $request->id_kost;
        $checkout->nama_customer = $request->nama_customer;
        $checkout->phone_number = $request->phone_number;
        $checkout->nama_kost = $request->title;
        $checkout->price = $request->price;
        $checkout->status = 0;
        $checkout->total = 0;
        $checkout->save();
        dd($kost);
        return redirect ('cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
