@extends('layouts.admin')

@section('content')

    {!!Form::model($detalle,['route'=>['detalle.update', $detalle],'method'=>'PUT'])!!}
			@include('detalles.forms.detalle')
		{!!Form::submit('Modificar',['class'=>'btn btn-info'])!!}
		{!!Form::close()!!}

@endsection
