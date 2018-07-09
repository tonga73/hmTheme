<article id="post-card" class="column is-12-mobile is-half-tablet is-6-desktop is-4-widescreen" @php post_class() @endphp>
	<a class="post-link column" href="{{ get_permalink() }}">
		<header>
			{{ the_post_thumbnail( 'large', array( 'class' => 'aligncenter' ) ) }}
			<h3 class="entry-title has-text-right">
				{{ get_the_title() }}
			</h3>
		</header>	
		<div class="triangle-up"></div>
	</a>

	<div class="column">
		@include('partials/entry-meta')
	</div>
	<div class="entry-summary column">
		@php the_excerpt() @endphp
	</div>		
</article>
