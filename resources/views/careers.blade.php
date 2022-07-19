{{--
  Template Name: Careers Page
--}}

<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
          <div class="careers">
          @include('partials.title-head')
          @include('partials.job-openings')
          @include('partials.our-culture')
          @include('partials.experts')
          @while(have_posts()) @php the_post() @endphp
          <?php if( have_rows('careers_content') ): ?>
          <?php while( have_rows('careers_content') ): the_row(); ?>
              <?php if( get_row_layout() == 'recent_post_cards' ): ?>
              @include('flexible-content.recent-post-cards')
              <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
        
          @endwhile
          </div>
        </main>
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
