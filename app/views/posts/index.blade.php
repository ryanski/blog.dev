@extends('layouts.master')

@section('content')
	<h2><a href="{{{ action ('PostsController@create') }}}">Create New Post</a></h2>
	@foreach($posts as $post)
		<h1><a href="{{{ action ('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h1>
		<p>{{{ $post->body }}}</p>
	@endforeach

	{{ $posts->links() }}
@stop