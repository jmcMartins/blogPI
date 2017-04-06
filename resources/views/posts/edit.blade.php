@extends('layout')
@section('content')

	{{ Form::open(['url' => "post/{$post->id}", 'method' => 'put']) }}
		<h3 style="text-align: center;"><b>Editando Post</b> {{ Form::label(NULL, $post->title) }}</h3>
		<br>
		{{ Form::label('title', 'Titulo:')}}
		{{ Form::text('title', $post->title,['class' => 'form-control','placeholder'=>'Titulo do Post'])}}
		<br>
		{{ Form::label('content','Texto do Post')}}
		{{ Form::textarea('content', $post->content, ['class' => 'form-control','plateholder'=>'Texto do Post'])}}
		<br>
		<div style="text-align: center;">{{ Form::submit('Salvar')}}</div>

	{{ Form::close() }}
@endsection