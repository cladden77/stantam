<header class="banner">
  <nav class="navbar fixed-top navbar-expand-lg py-4">
    <div class="container-fluid justify-content-center">
      <div class="row align-items-md-center justify-content-center">
        <div class="col-8 col-md-8 col-lg">
          <a class="navbar-brand" href="{{ home_url('/') }}"><img src="/wp-content/uploads/2022/07/Stenson-tamaddon-logo.png" alt="Stenson Tamaddon" /></a>
        </div>
        <div class="col-9 d-inline-flex align-items-md-center justify-content-end desktop">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
          <a class="px-3 phone-number" href="tel:602-560-9393">(602) 560-9393</a>
          <a class="button button--primary" href="/get-started">Get Started</a>
        </div>

        <div class="col-4 text-right">
          <div class="mobile-nav">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse" id="navbarToggleExternalContent">
              @if (has_nav_menu('primary_navigation'))
                  {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
                  @endif
            </div>
          </div>
      </div>
      </div>
    </div>
  </nav>
</header>
