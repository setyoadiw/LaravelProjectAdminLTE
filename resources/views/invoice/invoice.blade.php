@extends('layouts.app')

@section('master')

<div class="container" align="center">
    <div class="col-md-6 col-md-offset-3">
    {!! Form::open([ 'url'=>'order', 'id'=>'payment-form','method'=>'POST'  ]) !!}

    {{ csrf_field() }}

    <div class="form-group" id="first-name-group">
    {!! Form::label('firstname','Nama Depan:') !!}
    {!! Form::text('namadepan',null,[
        'class' => 'form-control',
    ]) !!}

    </div>

    <div class="form-group" id="first-name-group">
    {!! Form::label('lastname','Nama Belakang:') !!}
    {!! Form::text('namabelakang',null,[
        'class' => 'form-control',
    ]) !!}

    </div>
    <div class="form-group" id="first-name-group">
    {!! Form::label('email','Email:') !!}
    {!! Form::email('email',null,[
        'class' => 'form-control',
    ]) !!}

    </div>

    <div class="form-group" id="first-name-group">
    {!! Form::label('telp','Telp:') !!}
    {!! Form::text('telp',null,[
        'class' => 'form-control',
    ]) !!}

    </div>

    <div class="form-group" id="first-name-group">
    {!! Form::label('produk','Produk:') !!}
    {!! Form::select('produk',

    ['25000' => 'Snack Semprong' , '20000' => 'Snack Kuping Gajah' , '15000' => 'Snack Wafer Coklat'],
    
    [
        'class' => 'form-control',
    ]) !!}

    </div>

    <div class="form-group" id="first-name-group">
    {!! Form::label('kuantitas','Kuantitas:') !!}
    {!! Form::number('kuantitas',null,[
        'class' => 'form-control',
    ]) !!}

    </div>


    <div class="form-group" id="first-name-group">
    {!! Form::label('alamat','Alamat:') !!}

    {!! Form::textarea('alamat' , null , ['class' => 'form-control']) !!}
    </div>


    {!! Form::submit('Purchase!') !!}

    {!! Form::close() !!}
    
    


</div>


</div>
@endsection
