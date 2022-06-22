<footer class="footer pt-5 pb-2">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4 col-sm-12">
        <h2>About Company</h2>
        <hr />
        <div class="mb-4">
        @if (has_nav_menu('footer_navigation_left_1'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation_left_1', 'menu_class' => 'nav']) !!}
        @endif
        </div>

        <h2>Tax Credits</h2>
        <hr />
        <div class="mb-4">
        @if (has_nav_menu('footer_navigation_left_2'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation_left_2', 'menu_class' => 'nav']) !!}
        @endif
        </div>
      </div>

      <div class="col-12 col-md-4 col-sm-12">
        <h2>Compliance & Risk
          Protection</h2>
        <hr />
        <div class="mb-4">
        @if (has_nav_menu('footer_navigation_middle_1'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation_middle_1', 'menu_class' => 'nav']) !!}
        @endif
        </div>

        <h2>Technology</h2>
        <hr />
        <div class="mb-4">
        @if (has_nav_menu('footer_navigation_middle_2'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation_middle_2', 'menu_class' => 'nav']) !!}
        @endif
        </div>
      </div>

      <div class="col-12 col-md-4 col-sm-12">
        <h2>Knowledge Center</h2>
        <hr />
        <div class="mb-4">
        @if (has_nav_menu('footer_navigation_right_1'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation_right_1', 'menu_class' => 'nav']) !!}
        @endif
        </div>

        <h2>Client Portals</h2>
        <hr />
        <div class="mb-4">
        @if (has_nav_menu('footer_navigation_right_2'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation_right_2', 'menu_class' => 'nav']) !!}
        @endif
        </div>
      </div>
    </div>

    <div class="row pt-5">
      <div class="col-12 text-center text-sm-center text-md-left social-icons">
        <a href="#"><img src="/app/uploads/2022/06/twitter-icon.svg" alt="twitter"></a>
        <a href="#"><img src="/app/uploads/2022/06/facebook-icon.svg" alt="Facebook"></a>
        <a href="#"><img src="/app/uploads/2022/06/google-icon.svg" alt="Google"></a>
        <a href="#"><img src="/app/uploads/2022/06/linkedin-icon.svg" alt="LinkedIn"></a>
      </div>
    </div>
      <div class="row no-gutters justify-content-between copyright">
        <div class="col-sm-12 col-md-8 text-center text-md-left text-sm-center">
          <p>(602) 560-9393 • 1 N Central Ave., Suite 1030, Phoenix, AZ  85004</p>
        </div>
        <div class="col-sm-12 col-md-4 text-center text-md-right text-sm-center">
          <p>© 2022 Stenson Tamaddon</p>
        </div>
      </div>
    </div>
  </div>
</footer>
