<footer class="content-info footer">
  <div class="container is-fluid">
  	<div class="columns is-multiline">
      @php dynamic_sidebar('sidebar-footer') @endphp
	    <div class="column is-12 brand has-text-centered">
	    	<a class="logo" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
	    </div>  
  	</div>
  </div>
</footer>
