@extends('layouts.app')

@section('content')
	<h1>Posts</h1>
	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div class="card mb-3"> {{-- dalam video guna well dan guna satu div shj--}}
  				{{-- <div class="card-body">
    				<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
				<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
  				</div> --}}
  				<div class="col-6 col-md-4" style="max-width: 18rem;">
  					<div class="card-body">
  						<img style="width:100%" src="/storage/cover_image/{{$post->cover_image}}">
  					</div>
  				</div>
  				<div class="col-12 col-md-8">
  					<div class="card-body">
		    			<h3 class="card-title"><a class="card-link" href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
						<small class="card-text">Written on {{$post->created_at}} by {{$post->user->name}}</small>
  					</div>
  				</div>
			</div>
		@endforeach
		{{$posts->links()}}
	@else
		<p>No posts found</p>
	@endif
@endsection