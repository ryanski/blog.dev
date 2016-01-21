@extends('layouts.master')
@section('top-script')
@stop

@section('content')
		<script type="text/javascript">
			$(document).ready(function(){
			$('.bxslider').bxSlider({
				mode: 'fade',
  				captions: true,
  				adaptiveHeight: true,
  				
			});
			});
		</script>
		<style type="text/css">
			li.title {
				font-color: red;
				/*border: solid black 4px;*/
			}
		</style>


	    <h1>Hello!</h1>
	    <ul class="bxslider">
		  <li><img src="/images/chilemountains.jpeg" title="<a href='/posts'>Blog</a>"/></li>
		  <li><img src="/images/grasstree.jpeg" title="<a href='/resume'>Resume</a>"/></li>
		  <li><img src="/images/chilemountains.jpeg" title="Portfolio"/></li>
		  <li><img src="/images/grasstree.jpeg" title="About Me"/></li>
		</ul>
		
	@stop
@section('bottom-script')
@stop