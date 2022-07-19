@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())

    <?php if( have_rows('erc_bottom') ): ?>
    <?php while( have_rows('erc_bottom') ): the_row(); ?>
        <?php if( get_row_layout() == 'full_width_cta' ): ?>
        @include('flexible-content.full-width-cta')
        <?php endif; ?>
        <?php if( get_row_layout() == 'full_width_content' ): ?>
        @include('flexible-content.full-width-content')
        <?php endif; ?>
    <?php endwhile; ?>
  <?php endif; ?>
  @endwhile
@endsection
