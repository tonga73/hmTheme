{{--
  Template Name: Inicio
--}}

@extends('layouts.app-fluid')

@section('content')
	@while(have_posts()) @php the_post() @endphp
	    	@include('partials.content-page')
	@endwhile
@endsection
