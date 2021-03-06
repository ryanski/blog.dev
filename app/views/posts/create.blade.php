@extends('layouts.master')

@section('content')
{{-- ///FORM defaults to get so you must specify post. --}}
{{ Form::open(array('action' => 'PostsController@store')) }}

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
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{{ Form::close() }}
@stop