@extends('layout')
@section('content')
	{{ Form::open(['url' => 'posts', 'method' => 'post']) }}

		<h3 style="text-align: center;"><b>Criando Post</b></h3>
		<br>
		{{ Form::label('title', 'Titulo:')}}
		{{ Form::text('title', NULL,['class' => 'form-control','placeholder'=>'Titulo do Post'])}}
		<br>
		{{ Form::label('content','Conteudo do Post')}}
		{{ Form::textarea('content', NULL, ['class' => 'form-control','plateholder'=>'Conteudo do Post'])}}
		<br>
		<div style="text-align: center;">{{ Form::submit('Criar Post')}}</div>

	{{ Form::close() }}
@endsection