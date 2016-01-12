@extends('layouts.master')

@section('content')
{{-- ///FORM defaults to get so you must specify post. --}}
<form action="{{{ action('PostsController@store') }}}" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{{ Input::old('title') }}}" 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <input type="body" name="body" class="form-control" id="body" placeholder="Body">
  </div>
  <input type="hidden" name="user_id" value="1">
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>