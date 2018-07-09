<article id="post" class="columns is-multiline" @php post_class() @endphp>
  <div class="column image is-12">
    {{ the_post_thumbnail( 'large', array( 'class' => 'aligncenter is-marginless' ) ) }}
  </div>
  <header class="column padding-30 hero is-info is-12">
    <h1 class="entry-title has-text-light">{{ get_the_title() }}</h1>
  </header>
  <div id="content-section" class="container">
      <span class="column is-8 is-offset-2 is-flex has-background-dgreen">
        @include('partials/entry-meta')
      </span> 
      <div class="entry-content column is-8 is-offset-2 margin-bottom-30">
        @php the_content() @endphp
      </div>    
  </div>
  <footer class="column is-12">
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
