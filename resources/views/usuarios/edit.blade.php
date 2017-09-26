@extends('layouts.admin')

@section('content')

    {!!Form::model($usuario,['route'=>['usuario.update', $usuario],'method'=>'PUT'])!!}
			@include('usuarios.forms.usuario')
		{!!Form::submit('Modificar',['class'=>'btn btn-info'])!!}
		{!!Form::close()!!}

@endsection
