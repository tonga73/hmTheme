<header class="banner">
  <div class="container-fluid">
    <nav class="navbar logo">
    	<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    </nav>
    <nav id="navigator" class="navbar navigation" role="navigation" aria-label="main navigation">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
