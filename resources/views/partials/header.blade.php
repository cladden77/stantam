<header class="banner pb-5">

<nav class="navbar navbar-expand-lg fixed-top navbar-offcanvas">
  <div class="container-fluid py-3 px-0 px-md-5 px-sm-0">

  <a class="navbar-brand" href="{{ home_url('/') }}"><img src="http://stentam.local/app/uploads/2022/06/Stentam-logo.png" alt="Stenson Tamaddon" /></a>

 <button class="navbar-toggler d-block" type="button" id="navToggle">
  <span class="navbar-toggler-icon"></span>
</button>

  <div class="navbar-collapse offcanvas-collapse">
    @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
  </div>
  </div>
</nav>

</header>
