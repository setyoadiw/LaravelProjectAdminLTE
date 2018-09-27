@extends('layouts.app')

@section('master')

<div class="album py-5 bg-light">
        <div class="container"> 
          <div class="row">
          @foreach ($produk as $item)

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{asset($item->image)}}" alt="{{$item->image}}" >
                <div class="card-body">
                    <h4>{{$item->name}}</h4>
                  <p class="card-text">{{$item->description}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group"> 
                        <a  class="btn btn-sm btn-outline-secondary" href="order">Buy</a>                     

                    </div>
                    <small class="text-muted">Harga Rp.{{$item->price}}</small>
                  </div>
                </div>
              </div>
            </div>
        @endforeach

            
      </div>



      


@endsection

