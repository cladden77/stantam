@extends('layouts.generalpage')

@section('general_content')
  @while(have_posts()) @php the_post() @endphp
  <?php if( have_rows('general_flexible_content') ): ?>
  <?php while( have_rows('general_flexible_content') ): the_row(); ?>
      <?php if( get_row_layout() == 'page_hero' ): ?>
          @include('flexible-content.page-hero')
      <?php endif; ?>
      <?php if( get_row_layout() == 'three_col' ): ?>
          @include('flexible-content.three-col')
      <?php endif; ?>
      <?php if( get_row_layout() == 'info_slider' ): ?>
          @include('flexible-content.info-slider')
      <?php endif; ?>
      <?php if( get_row_layout() == 'satisfaction_block' ): ?>
          @include('flexible-content.satisfaction')
      <?php endif; ?>
      <?php if( get_row_layout() == 'full_width_cta' ): ?>
      @include('flexible-content.full-width-cta')
      <?php endif; ?>
      <?php if( get_row_layout() == 'logo_slider' ): ?>
      @include('flexible-content.logo-slider')
      <?php endif; ?>
      <?php if( get_row_layout() == 'recent_post_cards' ): ?>
      @include('flexible-content.recent-post-cards')
      <?php endif; ?>
      <?php if( get_row_layout() == 'timeline' ): ?>
      @include('flexible-content.timeline')
      <?php endif; ?>
      <?php if( get_row_layout() == 'about_fifty_fifty' ): ?>
      @include('flexible-content.about-fifty-fifty')
      <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

  @endwhile
@endsection
