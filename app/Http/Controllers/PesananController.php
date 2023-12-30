<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Makanan;

use Illuminate\Http\Request;

class PesananController extends Controller
{
    
    public function index()
    {
        $pesanan = Pesanan::all();
        $makanan = Makanan::all();
        return view('pesanan.index', compact('pesanan','makanan'));
    }

    
    public function create()
    {
        $makanan = Makanan::all();
        return view('pesanan.create', compact('makanan'));
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
        // vardump
        Pesanan::create($input);
        return redirect('/pesanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pesanan = Pesanan::find($id);
        $makanan = Makanan::all();
        return view('pesanan.edit', compact('pesanan','makanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $pesanan = Pesanan::find($id);
        $data = $request->all();
        $pesanan->update($data);
        return redirect('/pesanan');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesanan $pesanan)
    {
        //
    }
}
