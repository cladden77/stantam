<header class="banner">
  <nav class="navbar fixed-top navbar-expand-lg py-2">
    <div class="container">
      <div class="col">
    <a class="navbar-brand" href="{{ home_url('/') }}"><img src="{{ home_url('/') }}wp-content/uploads/2022/06/Stentam-logo.png" alt="Stenson Tamaddon" /></a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="col">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </div>
    </div>
  </nav>
</header>
