<article @php post_class() @endphp>
  <picture class="image">
    @php the_post_thumbnail( 'large', array( 'tile' => 'aligncenter' ) ); @endphp
  </picture>
  <header class="container">
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content container">
    @php the_content() @endphp
  </div>
  <footer class="container">
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
