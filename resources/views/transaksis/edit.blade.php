@extends('layouts.app')

@section('content')
<div class="container">
 	<div class="row">
 		<div class="col-md-12">
 			<ul class="breadcrumb">
 				<li><a href="{{ url('/home')}}">Dasboard</a></li>
 				<li><a href="{{ url('/admin/transaksis')}}">Transaksi</a></li>
 				<li class="active">Ubah Transaksi</li>
 			</ul>
 			<div class="panel panel-default">
 				<div class="panel-heading">
 					<h2 class="panel-title">Ubah Transaksi</h2>
 				</div>
 				<div class="panel-body">
 					{!! Form::transaksis($transaksis,['url'=>route('transaksi.update',$transaksis->id),'method'=>'put','files'=>'true','class'=>'form-horizontal'])!!}
 					@include('transaksis._form')
 					{!! Form::close()!!}
 				</div>
 			
 			</div>
 		</div>
 	</div>
 </div>
 @endsection