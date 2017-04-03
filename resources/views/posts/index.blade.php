@extends('layout')
@section('content')


	  	@foreach($posts as $post)
		  	<h1>{{$post->title}}</h1>
		  	<p>{{$post->content}}</p>
        <a href='{{url("/posts/{$post->id}/edit")}}'><button>Editar</button></a>
        {{ Form::open(['url' => 'posts/'.$post->id, 'method' => 'delete']) }}
        <button>Apagar</button>
        {{ Form::close() }}
		  	<hr>
	  	@endforeach

@endsection
