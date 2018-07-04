<article id="post-card" class="column is-12-mobile is-half-tablet is-6-desktop is-4-widescreen" @php post_class() @endphp>
	<a class="post-link column" href="{{ get_permalink() }}">		
		@php the_post_thumbnail( 'large', array( 'is-gapless' => 'aligncenter image' ) ); @endphp
		<h3 class="entry-title has-text-right">
			{{ get_the_title() }}
		</h3>
		<div class="triangle-up"></div>
	</a>

	<div class="column">
		@include('partials/entry-meta')
	</div>
	<div class="entry-summary column">
		@php the_excerpt() @endphp
	</div>		
</article>
