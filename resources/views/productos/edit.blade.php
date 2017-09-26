@extends('layouts.admin')

@section('content')

    {!!Form::model($producto,['route'=>['producto.update', $producto],'method'=>'PUT'])!!}
			@include('productos.forms.producto')
		{!!Form::submit('Modificar',['class'=>'btn btn-info'])!!}
		{!!Form::close()!!}

@endsection
