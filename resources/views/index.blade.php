@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
  <section class="m-5 post-list">
    <div class="container">
      <div class="row">
        @include('partials.content-'.get_post_type())
      </div>
    </div>
  </section>
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
