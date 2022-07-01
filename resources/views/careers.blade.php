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
          @include('partials.blog-insights')
          </div>
        </main>
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
