@extends('layouts.app')

@section('content')
<div class="container">
 	<div class="row">
 		<div class="col-md-12">
 			<ul class="breadcrumb">
 				
 				<li><a href="{{ url('/admin/modelis')}}">Model</a></li>

 			</ul>
 			<div class="panel panel-default">
 				<div class="panel-heading">
 					<h2 class="panel-title">Ubah Model</h2>
 				</div>
 				<div class="panel-body">
 					{!! Form::model($modeli,['url'=>route('modelis.update',$modeli->id),'method'=>'put','class'=>'form-horizontal'])!!}
 					@include('modelis._form')
 					{!! Form::close()!!}
 				</div>
 			
 			</div>
 		</div>
 	</div>
 </div>
 @endsection