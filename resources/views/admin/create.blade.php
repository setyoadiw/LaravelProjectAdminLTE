@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

<div class="container">
    <div class="row">

    <a class="btn"  href="home">Home</a>

    
        <form action="create" method="POST">
        {{csrf_field()}}
        <table>
        <tr>
            <label>Nama Produk</label>
            <input name="name" type="text" />
        </tr>            
        <br>
        <tr>
            <label>Deskripsi Produk</label>
            <input name="description" type="text" />
        </tr>
       <br>     
       <tr>
       <tr>
            <label>Harga Produk</label>
            <input name="harga" type="text" />
            </tr>
            <br>
            <tr>
        
            <label>Image</label>
            <input name="image" type="text" />

        </tr>       
        <br>
         <input type="submit" name="submit"/ >
        
        </form>

        </table>
    
    </div>
</div>

@endsection


