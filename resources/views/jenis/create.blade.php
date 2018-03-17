@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<ul class="breadcrumb">
					
					<li><a href="{{ url('/admin/jenis') }}">jenis barang</a></li>
				
				</ul>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title">Tambah Jenis Barang</h2>
					</div>

					<div class="panel-body">
					<table class="table"> 
						{!! Form::open(['url'=>route('jenis.store'),
						'method'=>'post','class'=>'form-horizontal']) !!}
						@include('jenis._from')
						{!! Form::close() !!}
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection