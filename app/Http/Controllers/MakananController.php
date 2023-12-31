<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makanan = Makanan::all();
        return view ('makanan.index', compact('makanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('makanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Makanan::create($input);
        return redirect('/makanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $makanan = Makanan::find($id);
        return view('makanan.detail', compact('makanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $makanan = Makanan::find($id);
        return view('makanan.edit', compact('makanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $makanan = Makanan::find($id);
        $data = $request->all();
        $makanan->update($data);
        return redirect('/makanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Makanan::find($id);
        $data->delete();
        return back();
    }
}
