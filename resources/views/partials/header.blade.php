<header class="header">
      <div class="row header__row align-content-center">
        <div class="col-6 col-lg-3 text-left">
          <a class="navbar-brand" href="{{ home_url('/') }}" aria-label="return to homepage"><img src="/wp-content/uploads/2022/07/Stenson-tamaddon-logo.png" alt="Stenson Tamaddon" /></a>
        </div>
        <div class="col-9 text-right flex-row justify-content-end align-items-center d-none d-lg-flex">
          <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>
        <div class="header__header-links">
          <a class="px-3 phone-number" href="tel:888-375-1000">888-375-1000</a>
        </div>
        <div class="header__header-links">
          <a class="button button--primary" href="/get-started">Get Started</a>
        </div>
        </div>

        <div class="col-6 d-flex d-lg-none justify-content-end">
          <button class="p-2 hamburger hamburger--spring d-flex" type="button" data-pushbar-target="mobile_header">
            <span class="hamburger-box">
              <span class="hamburger-inner">
                <span class="sr-only sr-only-focusable">
                  Mobile Menu
                </span>
              </span>
            </span>
          </button>
        </div>
      </div>
      <div class="mobile-header" data-pushbar-id="mobile_header" data-pushbar-direction="top">
        <nav class="mobile-header__menu-wrap p-5">
          @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex-column']) !!}
          @endif
        </nav>
      </div>
</header>
