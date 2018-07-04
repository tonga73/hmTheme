<header class="banner">
  <div class="container-fluid">
    <div class="brand">
    	<a class="logo" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    </div>
    <nav class="navigation" role="navigation" aria-label="main navigation">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
