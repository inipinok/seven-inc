<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardKostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kost.index', [
            'kosts' => Kost::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kost.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedDate = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:kosts',
            'category_id' => 'required',
            'body' => 'required',
            'address' => 'required',
            'image' => 'image|file|max:1024',
            'price' => 'required',
            'qty' => 'required',
        ]);

        if($request->file('image')) {
            $validatedDate['image'] = $request->file('image')->store('post-images');
        }

        $validatedDate['user_id'] = auth()->user()->id;
        $validatedDate['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Kost::create($validatedDate);

        return redirect('dashboard/kost')->with('success', 'new post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kost  $kost
     * @return \Illuminate\Http\Response
     */
    public function show(Kost $kost)
    {
        return view('kost.show', [
            'kost' => $kost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kost  $kost
     * @return \Illuminate\Http\Response
     */
    public function edit(Kost $kost)
    {
        return view('kost.edit', [
            'kost' => $kost,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kost  $kost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kost $kost)
    {

        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required',
            'address' => 'required',
            'image' => 'image|file|max:1024',
            'price' => 'required',
            'qty' => 'required',
        ];

        if($request->slug != $kost->slug) {
            $rules['slug'] = 'required|unique:kosts';
        }

        $validatedDate = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedDate['image'] = $request->file('image')->store('post-images');
        }

        $validatedDate['user_id'] = auth()->user()->id;
        $validatedDate['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Kost::where('id', $kost->id)
                ->update($validatedDate);
        return redirect('dashboard/kost')->with('success', 'post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kost  $kost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kost $kost)
    {
        if($kost->image) {
            Storage::delete($kost->image);
        }
        Kost::destroy($kost->id);

        return redirect('dashboard/kost')->with('success', 'post has been deleted!');
    }
}
