<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return(view('invoice.invoice'));
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

        $s = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvyxyz',5)),0,5);
        
        $awal = 'INV';

        $nomoriv = $awal.$s.date('dmY');

        $invoice = new Invoice;
        $invoice -> namadepan = $request ->namadepan;
        $invoice -> namaBelakang = $request ->namabelakang;
        $invoice -> email = $request ->email;
        $invoice -> telp = $request ->telp;
        $invoice -> produk = $request ->produk;
        $invoice -> kuantitas = $request ->kuantitas;
        $invoice -> alamat = $request ->alamat;

        $total = $request -> kuantitas * $request -> produk;
        $invoice -> totalbiaya = $total;
        $invoice -> nomorinv = $nomoriv;
        $invoice ->save();



        return redirect()->action('ProdukController@index');





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}

