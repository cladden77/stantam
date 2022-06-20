<header class="banner">
  {{-- <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark navbar-offcanvas">
  <div class="container-fluid py-3 px-0 px-md-5 px-sm-0">
    <div class="col-8">
      <a class="navbar-brand" href="{{ home_url('/') }}"><img src="http://stentam.local/app/uploads/2022/06/Stentam-logo.png" alt="Stenson Tamaddon" /></a>
    </div>

        <div class="collapse" id="navbarCollapse">
          <div class="bg-dark p-4">
            @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
          </div>
        </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="#navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

  </div>
</nav> --}}

<!--  START NAVBAR   -->
<nav class="navbar navbar-expand-lg fixed-top navbar-offcanvas">
  <div class="container-fluid py-3 px-0 px-md-5 px-sm-0">
  <a class="navbar-brand" href="{{ home_url('/') }}"><img src="http://stentam.local/app/uploads/2022/06/Stentam-logo.png" alt="Stenson Tamaddon" /></a>
  
<!--     If you want to show the button online on mobile use this toggle   
  
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

-->
  
<!--      This toggle button is always visible  -->
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
<!--  END NAVBAR   -->
</header>
