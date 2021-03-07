<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerjasama;
use Illuminate\Support\Facades\Auth;
class KerjasamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kerjasama = Kerjasama::where('user_id',Auth::user()->id)->get() ;
        return view('user.index', compact('kerjasama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
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

        $request->validate([
            'gambar' => 'required|mimes:jpeg,png,jpg,gif,svg|max:1023',
            'nama_barang' => 'required|max:14|min:3',
            'harga' => 'required|min:3|numeric',
            'keterangan' => 'required|max:255|min:3',
        ]);
        //
        $imgName = $request->gambar->getClientOriginalName() . '-' . time() . '.' . $request->gambar->extension();
         $request->gambar->move(public_path('image'),$imgName);
        //

        Kerjasama::create([
            'user_id' => Auth::user()->id,
            'status' => 'Menunngu',
            'nama_barang' => $request -> nama_barang,
            'harga' => $request -> harga,
            'keterangan' => $request -> keterangan,
            'gambar' => $imgName,
        ]);
        return redirect('/kerjasama');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kerjasama = Kerjasama::where('id',$id)->first();

        return view('user.show', compact('kerjasama'));





    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kerjasama = Kerjasama::find($id);

        return view('user.edit', compact('kerjasama'));

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
        $imgName = $request->gambar->getClientOriginalName() . '-' . time() . '.' . $request->gambar->extension();
         $request->gambar->move(public_path('image'),$imgName);

        Kerjasama::find($id)->update([
            'nama_barang'=> $request->nama_barang,
            'harga'=> $request->harga,
            'stok'=> $request->stok,
            'keterangan'=> $request->keterangan,
            'gambar' => $imgName


        ]);
        return redirect('/kerjasama');
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
