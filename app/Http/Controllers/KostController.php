<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kost;
use App\Models\Cateogry;
Use App\Models\User;
use Illuminate\Support\Facades\DB;

class KostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data['kosts'] =Kost::with('category')->get();
        return view('kosts', [
            "title" => "semua kost ada disini gais!"
        ], $data);
    }

    public function singleKost($slug) 
    {
        $result['kost'] = Kost::with('user')->where('slug', $slug)->first();
        
        return view ('kosts_single', $result);
    }

    public function Second()
    {
        $data['kosts'] =Kost::with('user')->get();
        return view('kosts', [
            "title" => "welcome bestiee, cari kost disini aja",
            "kosts" => Kost::latest()->filter(request(['search', 'category']))->get()
        ], $data);
    }

    public function singleFasil($fasilitas) 
    {
        $result['kost'] = Kost::with('fasilitas')->where('fasilitas', $fasilitas)->first();
        
        return view ('kosts_single', $result);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    // public function show(kost $kost)
    // {
    //     return view('kost', [
    //         "title" => "single post",
    //         "kost" => $kost
    //     ]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
