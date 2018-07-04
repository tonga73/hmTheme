{{--
  Template Name: Inicio
--}}

@extends('layouts.app-fluid')

@section('content')
  <div class="columns is-multiline">
	@while(have_posts()) @php the_post() @endphp
  	<div class="column is-12">
  		<div class="container is-fluid">
	    	@include('partials.content-page')
  		</div>
  	</div>
	@endwhile
  </div>
@endsection
