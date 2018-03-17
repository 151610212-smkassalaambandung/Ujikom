@extends('layouts.app')

@section('content')
 <div class="container">
 	<div class="row">
 		<div class="col-md-12">
 				
 			<div class="panel panel-default">
 				<div class="panel-heading">
 					<h2 class="panel-title">Jenis</h2>
 				</div>
 				
 				<div class="panel-body">
 					<p><a class="btn btn-primary" href="{{ route('jenis.create')}}">Tambah</a></p>
 					{!! $html->table(['class'=>'table-striped'])!!}
 				</div>

 			</div>
 		</div>
 	</div>
 </div>
 @endsection
@section('scripts')
{!! $html->scripts() !!}
@endsection