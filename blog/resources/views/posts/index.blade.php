@extends('layouts.master')

@section('content')
	<h1>Posts</h1>
	<ul>
		@foreach($posts as $post)
				<a href="/posts/{{ $post->id }}"><li>{{ $post->title }}</li></a>		
		@endforeach
	</ul>
@endsection	