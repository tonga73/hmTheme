{{--
  Template Name: Libros
--}}

@extends('layouts.app-fluid')

@section('content')
<div class="columns">
  @while(have_posts()) @php the_post() @endphp
    <div class="column is-12">
  	  @include('partials.content-page')
    </div>
  @endwhile
</div>
@endsection
