@extends('layouts.admin')

@section('content')

    {!!Form::model($cuenta,['route'=>['cuenta.update', $cuenta],'method'=>'PUT'])!!}
			@include('cuentas.forms.cuenta')
		{!!Form::submit('Modificar',['class'=>'btn btn-info'])!!}
		{!!Form::close()!!}

@endsection
