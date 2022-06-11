<header class="banner">
  <nav class="navbar">
  <div class="container-fluid py-3 px-5">
    <div class="col-6">
      <a class="navbar-brand" href="{{ home_url('/') }}"><img src="./resources/assets/images/Stentam-logo.png" alt="Stenson Tamaddon" /></a>
    </div>

    <div class="col-6 text-right">
      <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-dark p-4">
            @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
          </div>
        </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      </div>
    </div>
  </div>
</nav>
</header>
