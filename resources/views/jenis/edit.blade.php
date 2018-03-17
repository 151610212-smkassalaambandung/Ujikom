@extends('layouts.app')

@section('content')
<div class="container">
 	<div class="row">
 		<div class="col-md-12">
 			<ul class="breadcrumb">
 				
 				<li><a href="{{ url('/admin/jenis')}}">Jenis</a></li>
 				
 			</ul>
 			<div class="panel panel-default">
 				<div class="panel-heading">
 					<h2 class="panel-title">Ubah Jenis Barang</h2>
 				</div>
 				<div class="panel-body">
 					{!! Form::model($jenis,['url'=>route('jenis.update',$jenis->id),'method'=>'put','files'=>'true',    'class'=>'form-horizontal'])!!}
 					@include('jenis._from')
 					{!! Form::close()!!}
 				</div>
 			
 			</div>
 		</div>
 	</div>
 </div>
 @endsection