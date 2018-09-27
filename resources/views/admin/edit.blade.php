@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

<div class="container">
    <div class="row">

    <a class="btn"  href="home">Home</a>

    
        <form action="../{{$produk->id}}" method="POST">
        {{csrf_field()}}
        <table>

        <input type="hidden" name="_method" value="put" />

        <tr>
            <label>Nama Produk</label>
            <input name="name" value="{{$produk->name}}" type="text" />
        </tr>            
        <br>
        <tr>
            <label>Deskripsi Produk</label>
            <input name="description" value="{{$produk->description}}" type="text" />
        </tr>
       <br>     
       <tr>
       <tr>
            <label>Harga Produk</label>
            <input name="harga" value="{{$produk->price}}" type="text" />
            </tr>
            <br>
            <tr>
        
            <label>Image</label>
            <input name="image" value="{{$produk->image}}" type="text" />

        </tr>       
        <br>
         <input type="submit" name="submit"/ >
        
        </form>

        </table>
    
    </div>
</div>

@endsection


