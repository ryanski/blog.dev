{{-- {{ Form::password('password'), array('class' => 'form-control') }} --}}
@extends('layouts.master')
@section('top-script')
@stop

@section('content')

<div class="row">
	<div id="background-for-fund-form" class="col-xm-12 center">
			{{ Form::open(array('action' => 'HomeController@postLogin')) }}
		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::email('email', Input::old('email'), ['class' =>'form-control']) }}
		</div>
		<div "form-group">
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password', ['class' => 'form-control']) }}
		</div>
		<div "form-group">
			{{ Form::submit('Log In', array('class' => 'btn btn-primary'))  }}
		</div>
	  
		{{ Form::close() }}
	</div>
</div>


@stop
@section('bottom-script')
@stop