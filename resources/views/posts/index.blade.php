@extends('layout')
@section('content')

<div class="row">
	@foreach($posts as $post)
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
			<div class="caption">
				<div style="height: 180px">
					<div style="text-align: center;">
						<h3><a href="{{url('/posts/'.$post->id)}}"><b>{{$post->title}}</b></a></h3>
					</div>
		        	<p>{{$post->content}}</p>
				</div>
				<div style="text-align: center;">
					<a href='{{url("/posts/{$post->id}/edit")}}'><button type="button" class="btn btn-warning">Editar</button></a>
					<a href='{{url("/posts/{$post->id}/delete")}}'><button type="button" class="btn btn-danger">Apagar</button></a>
				</div>
	        </div>
	     </div>
     </div>
	@endforeach
	<div style="text-align: center;">{{$posts->links()}}</div>
</div>
@endsection
