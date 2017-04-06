@extends('layout')
@section('content')

	<h2>{{$post->title}}</h2>
	<p>{{$post->content}}</p>
	<br>
	@foreach ($post->comments as $comment)
		<div style="margin-left: 30px"> <h5><b>{{$comment->name}}:</b></h5> </div>
		<div style="margin-left: 40px"> <p>{{$comment->comment}}</p> </div>

		<div style="text-align: right;">
			{{ Form::open(['url' => 'comments/'.$comment->id, 'method' => 'delete']) }}
			{{ Form::hidden('post_id', $post->id)}}
	        <button>Apagar</button>
	        {{ Form::close() }}
		</div>
		<hr>
	@endforeach

	<div>
	<br>
		<div style="text-align: center;"><h3><b>Novo Comentario</b></h3></div>
		{{ Form::open(['url' => 'comments', 'method' => 'post']) }}

		{{ Form::hidden('post_id', $post->id)}}
		{{ Form::label('name', 'Nome:')}}
		{{ Form::text('name', NULL,['class' => 'form-control', 'placeholder'=>'Digite seu nome'])}}
		<br>
		{{ Form::label('comment','Texto do Comentario')}}
		{{ Form::textarea('comment', NULL,['class' => 'form-control', 'plateholder'=>'Texto do Comentario'])}}
		<br>
		<div style="text-align: center;">{{ Form::submit('Comentar')}}</div>
		{{ Form::close() }}
	</div>
	<br>
@endsection