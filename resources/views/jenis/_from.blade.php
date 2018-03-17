<div class="form-group{{ $errors->has('jenis_barang') ?'has-error':''}}">
	{!!Form::label('jenis_barang','jenis barang',['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-4">
		{!! Form::text('jenis_barang',null,['class'=>'form-control'])!!}
		{!! $errors->first('jenis_barang','<p class="help-block">:message</p>')!!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}
	</div>
</div>