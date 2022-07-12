{{--
  Template Name: Contact Us Page
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
          <div class="contactus">
          @include('partials.title-head')
          @include('partials.contact-content')
          @include('partials.blog-insights')
          </div>
        </main>
      </div>
    </div>
    <div class="footer">
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
    </div>
  </body>
</html>
