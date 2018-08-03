@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-primary">Go Back</a>
	<h1>{{$post->title}}</h1>
	<img style="width:100%" src="/storage/cover_image/{{$post->cover_image}}">
	<br><br>
	<div>
		{!!$post->body!!} {{-- using !! sebab selepas guna ckeditor tue video no.7 last --}}
	</div>
	<hr>
	<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
	<hr>
	@if(!Auth::guest()){{-- yang xlogin xleh edit delete --}}
		@if(Auth::user()->id == $post->user_id) {{-- yg bukan post hak kita xleh edit delete --}}
			<a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>

			{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!} {{-- float-right for bootstrap 4 --}}
				{{Form::hidden('_method', 'DELETE')}}
				{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
			{!!Form::close()!!}
		@endif
	@endif
@endsection