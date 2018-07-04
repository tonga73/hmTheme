<article class="column is-12-mobile is-half-tablet is-6-desktop is-4-widescreen" @php post_class() @endphp>
  <header class="column">
	<picture class="image">
	  @php the_post_thumbnail( 'large', array( '' => 'aligncenter' ) ); @endphp
	</picture>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    @include('partials/entry-meta')
	<div class="entry-summary">
	@php the_excerpt() @endphp
	</div>		
  </header>
</article>
