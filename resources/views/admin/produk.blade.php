@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('js')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<script>

$(document).ready( function () {
    $('#table_id').DataTable();
} );

</script>



@endsection


@section('main-content')



<div  class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">


            <a class="btn" href="create">Tambah Produk</a>
            </br>
            </br>
            </br>

			<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Descripsi</th>
			<th>Harga</th>
			
            <th>Edit</th>	            		
        </tr>
    </thead>
    <tbody>
		<?php
		use App\Produk;
		$Produk = Produk::all();
		
		?>

		@foreach($Produk as $data)
        <tr>
            <td>{{$data->name}}</td>
			<td>{{$data->description}}</td>
			<td>{{$data->price}}</td>            
            <td>
            <form action="produk/{{$data->id}}" method="POST">
            {{csrf_field()}}
            {{ method_field('DELETE') }}

            <a class="btn" href="produk/{{$data->id}}/edit">Edit</a>
            
            <input value="hapus"  type="submit">
            
            </form>
            </td>
			            
        </tr>

		@endforeach
        
    </tbody>
</table>

				

			</div>
		</div>
	</div>
@endsection
