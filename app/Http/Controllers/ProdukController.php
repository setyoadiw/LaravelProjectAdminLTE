<?php

namespace App\Http\Controllers;

use App\Produk;
use Redirect;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
              

        return view('admin.produk');        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.create');
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
        $produk = new Produk;
        $produk -> name = $request ->name;
        $produk -> slug = $request ->name;
        $produk -> description = $request ->description;
        $produk -> price = $request ->harga;
        $produk -> image = $request ->image;     
     
        $produk ->save();
        return redirect()->action('ProdukController@index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $produk = Produk::find($id);       
        
        return (view('admin.edit')->with('produk',$produk));
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $produk = Produk::find($id);       
        $produk -> name = $request ->name;
        $produk -> slug = $request ->name;
        $produk -> description = $request ->description;
        $produk -> price = $request ->harga;
        $produk -> image = $request ->image;     
     
        $produk ->save();
        return redirect()->action('ProdukController@index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $produk = Produk::find($id);  
        $produk-> delete();

        return redirect()->action('ProdukController@index');       
       
    }

    public function home( )
    {
        //
        $produk = Produk::all();
        return(view('shop.index ')->with('produk',$produk));
    }
}
