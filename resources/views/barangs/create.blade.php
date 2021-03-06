@extends('layouts.app')

@section('content')
 <div class="container">
 	<div class="row">
 		<div class="col-md-12">
 			<ul class="breadcrumb">
 				
 				<li><a href="{{ url('/admin/barangs')}}">Barang</a></li>
 			</ul>
 			<div class="panel panel-default">
 				<div class="panel-heading">
 					<h2 class="panel-title">Tambah Barang</h2>
 				</div>
 				<div class="panel-body">
 					{!! Form::open(['url'=>route('barangs.store'),'method'=>'post','files'=>'true','class'=>'form-horizontal'])!!}
 					@include('barangs._form')
 					{!! Form::close()!!}
 				</div>
 			
 			</div>
 		</div>
 	</div>
 </div>
 @endsection