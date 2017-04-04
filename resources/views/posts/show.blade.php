@extends('layout')
@section('content')
	<h1>{{$post->title}}</h1>
	<p>{{$post->content}}</p>
	@foreach ($post->comments as $comment)
		<h4>{{$comment->name}}</h4>
		<p>{{$comment->comment}}</p>
		{{ Form::open(['url' => 'comments/'.$comment->id, 'method' => 'delete']) }}
		{{ Form::hidden('post_id', $post->id)}}
        <button>Apagar</button>
        {{ Form::close() }}
		<hr>
	@endforeach
	<h1>NOVO COMENTARIO</h1>
	{{ Form::open(['url' => 'comments', 'method' => 'post']) }}
	{{ Form::hidden('post_id', $post->id)}}
	{{ Form::label('name', 'Nome:')}}
	{{ Form::text('name', NULL,['placeholder'=>'Escreva seu nome aqui'])}}
	{{ Form::label('comment','Texto do Comentario')}}
	{{ Form::textarea('comment', NULL, ['plateholder'=>'Texto do Comentario'])}}
	{{ Form::submit('Comentar')}}

	{{ Form::close() }}
@endsection