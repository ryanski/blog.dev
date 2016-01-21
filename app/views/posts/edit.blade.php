@extends('layouts.master')

@section('content')
	{{ Form::model($post, ['action' => ['PostsController@update', $post->id], 'method' => 'PUT']) }}


{{-- Title Input --}}

	 <div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your title']) }}

  </div>


 
  <div class="form-group">
    {{ Form::label('body', 'Body') }}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
  </div>
  <input type="hidden" name="user_id" value="1">
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    {{ $errors->first('body', '<span class="alert alert-danger" role="alert">:message</span>') }} 
  <button type="submit" class="btn btn-default">Submit</button>
{{ Form::close() }}
@stop