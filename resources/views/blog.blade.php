{{--
  Template Name: Blog Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.blog-content')

    <?php if( have_rows('blog_content') ): ?>
          <?php while( have_rows('blog_content') ): the_row(); ?>
              <?php if( get_row_layout() == 'recent_post_cards' ): ?>
              @include('flexible-content.recent-post-cards')
              <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
  @endwhile
@endsection
