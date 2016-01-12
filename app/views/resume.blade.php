



@extends('layouts.master')
@section('top-script')
@stop



	@section('content')

	<script type="text/javascript">
		$(document).ready(function(){
		$('.bxslider').bxSlider();
	});
	</script>

	    <h1>Hello!</h1>
	    <ul class="bxslider">
		  <li><img src="/images/chilemountains.jpeg" /></li>
		  <li><img src="/images/chilemountains.jpeg" /></li>
		  <li><img src="/images/chilemountains.jpeg" /></li>
		  <li><img src="/images/chilemountains.jpeg" /></li>
		</ul>
	@stop
@section('bottom-script')
@stop
